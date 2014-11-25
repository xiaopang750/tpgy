<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends SignUpController {

	public function __construct(){

		parent::__construct();
		//$this->seoMes('太平公益','太平公益');
	}

	/**
	 * 系统用户列表
	 * @author liuguangping
	 * @version 2014/10/24
	 */
	public function backUser()
	{
		$_SESSION['admin_preUrl'] = $_SERVER['PHP_SELF'];

		$url = C('url','url');

		$model = M('t_system_user');
		$where['uid !='] = '0';
		$userResult = $model->getAll('t_system_user','*',$where);
		$this->assign('data',$userResult);
		$this->assign('delUser',$url['delUser']);
		$this->assign('addUser',$url['system_user_add_edit']);

		$this->assign('authUrl',$url['authViewUrl']);
		$this->assign('authGroup',$url['authUserGroupViewUrl']);

		$this->assign('html','');
		
		$this->display('back_user');
	}

	public function systemUserAddEdit(){

		$_SESSION['admin_preUrl'] = $_SERVER['PHP_SELF'];
		$model = M('t_system_user');

		$uid = $this->input->get_post('uid');
		$url = C('url','url');
		
		$group = $model->getAll('t_group','gid,title',array('state'=>0));

		if($uid){
			$this->assign('type','edit');
			$where['uid'] = $uid;
			$tablename = 't_system_user';
			$userResult = $model->getOne($tablename,'*',$where);
			$userGroup = $model->getAll('t_user_group','ugid,gid',array('uid'=>$uid));
			if($userGroup){
				$oneGroup = twoToOneBykey($userGroup,'gid','ugid');
			}
			if(isset($oneGroup) && $oneGroup && $group){
				foreach ($group as $key => $value) {
					$group[$key]['active'] = 0;
					if(in_array($value['gid'], $oneGroup)){
						$group[$key]['active'] = 1;
					}
				}
			}

			$this->assign($userResult);
		}else{
			$this->assign('uid',$uid);
		}
		
		$this->assign('group',$group);
		$this->assign('action',$url['do_system_user_add_edit']);
		$this->display('system_user_add_edit');
	}

	public function doSystemUserAddEdit(){
		
		$where['uid'] = $this->input->post('uid',true);
		$groups = $this->input->post('gid',true);
		$data['username'] = $this->input->post('username',true);
		$data['realname'] = $this->input->post('realname',true);
		$data['state'] = $this->input->post('state',true);
		$data['isadmin'] = $this->input->post('isadmin',true);
		$data['actiontime'] = date('Y-m-d H:i:s');
		$password = $this->input->post('password',true);
		$data['sex'] = $this->input->post('sex',true);
		$url = C('url','url');
		$model = M('t_system_user');
		$tablename = 't_system_user';
		$errorUrl = $url['system_user_add_edit'];
		$successUrl = $url['backUser'];
		if($password){
			$data['password'] = md5(md5($password));
		}

		if($groups){
			$data['groups'] = implode(',', $groups);
		}else{
			$data['groups'] = '';
		}


		
		$roles = $groups?M('t_group_role')->getRidByGid($groups):'';
		$roles = $roles?twoToOneBykey($roles,'rid','grid'):'';

		$auths = $roles?M('t_role_auth')->getaidByRid($roles):'';
		$auths = $auths?twoToOneBykey($auths,'nid','raid'):'';

		$roles = $roles?implode(',', array_unique($roles)):'';
		$auths = $auths?implode(',', array_unique($auths)):'';

		$data['roles'] = $roles;
		$data['auths'] = $auths;
		$data['loginip'] = getClientIp();
		$data['logintime'] = date('Y-m-d H:i:s');

		if(!$where['uid']){
			$data['ctime'] = date('Y-m-d H:i:s');
			$num = $model->addContents($tablename,$data);
			$uid = $num;
			
		}else{
			$newurl = $url['editForeNode'].$where['uid'];
			$num = $model->editContents($where,$data,$tablename);
			$uid = $where['uid'];
		}
		
		if($num){
			if($uid){
				//var_dump($groups);die;
				$delWhere['uid'] = $uid;
				$acffnum = $model->delContents($delWhere,'t_user_group','',1);
				if($groups){
					foreach ($groups as $key => $value) {
						$user_group[$key]['uid'] = $uid;
						$user_group[$key]['gid'] = $value;
					}
	
					$model->batchAddContents('t_user_group',$user_group);
				}
			}
			$this->success('操作成功!',$successUrl);
		}else{
			if($uid){
				$errorUrl = $errorUrl."?uid=".$uid;
			}
			$this->error('操作失败!',$errorUrl);
		}
	}

	//用户审核
	public function auth(){

		safeFilter();//防sql注入

		$uid = $this->input->get('uid');
		$url = C('url','url');

		$model = M('t_system_user');
		$where['uid'] = $uid;
		$uidResult = $model->getOne('t_system_user','state',$where);
		if(!$uidResult){
			$this->assign('state','');
		}
		$this->assign('state',$uidResult['state']);
		$this->assign('uid',$uid);
		$this->assign('doAuth',$url['authUrl']);
		$this->display('auth');
	}

	//用户分组后天
	public function authUserGroup(){
		safeFilter();//防sql注入

		$uid = $this->input->get('uid');
		$url = C('url','url');
		$model = M('t_system_user');
		$group = $model->getAll('t_group','gid,title',array('state'=>0));
		if($uid){
			$userGroup = $model->getAll('t_user_group','ugid,gid',array('uid'=>$uid));
			if($userGroup){
				$oneGroup = twoToOneBykey($userGroup,'gid','ugid');
			}
			if(isset($oneGroup) && $userGroup &&$oneGroup && $group){
				foreach ($group as $key => $value) {
					$group[$key]['active'] = 0;
					if(in_array($value['gid'], $oneGroup)){
						$group[$key]['active'] = 1;
					}
				}
			}
		}
		$this->assign('group',$group);
		$this->assign('uid',$uid);
		$this->assign('doUserGroup',$url['authUserGroupUrl']);
		$this->display('authUserGroup');
	}

	public function group(){

		$_SESSION['admin_preUrl'] = $_SERVER['PHP_SELF'];

		$url = C('url','url');

		$model = M('t_group');
		$where['gid !='] = '0';
		$userResult = $model->getAll('t_group','*',$where);
		$this->assign('data',$userResult);
		$this->assign('delGroup',$url['delGroup']);
		$this->assign('addGroup',$url['addGroup']);

		$this->assign('authUrl',$url['authGroupViewUrl']);
		$this->assign('authRole',$url['authRoleGroupViewUrl']);

		$this->assign('html','');

		$this->display('group');

	}

	public function systemGroupAddEdit(){

		$_SESSION['admin_preUrl'] = $_SERVER['PHP_SELF'];
		$model = M('t_group');

		$gid = $this->input->get_post('gid');
		$url = C('url','url');

		$role = $model->getAll('t_role','rid,title',array('state'=>0));

		if($gid){
			$this->assign('type','edit');
			$where['gid'] = $gid;

			$roleGroup = $model->getAll('t_group_role','grid,rid',array('gid'=>$gid));

			if($roleGroup){
				$oneRole = twoToOneBykey($roleGroup,'rid','grid');
			}
			if(isset($roleGroup) && $roleGroup && $oneRole && $role){
				foreach ($role as $key => $value) {
					$role[$key]['active'] = 0;
					if(in_array($value['rid'], $oneRole)){
						$role[$key]['active'] = 1;
					}
				}
			}

			$tablename = 't_group';
			$userResult = $model->getOne($tablename,'*',$where);
			$this->assign($userResult);
		}else{
			$this->assign('gid',$gid);
		}
		$this->assign('role',$role);
		$this->assign('action',$url['doAddEditGroup']);
		$this->display('group_add_edit');
	}

	public function doSystemGroupAddEdit(){
		
		$where['gid'] = $this->input->post('gid',true);
		$data['title'] = $this->input->post('title',true);
		$data['entitle'] = $this->input->post('entitle',true);
		$data['state'] = $this->input->post('state',true);
		$data['actiontime'] = date('Y-m-d H:i:s');
		$roles = $this->input->post('rid',true);

		
		$url = C('url','url');
		$model = M('t_group');
		$tablename = 't_group';
		$errorUrl = $url['addGroup'];
		$successUrl = $url['group'];

		if(!$where['gid']){
			$data['ctime'] = date('Y-m-d H:i:s');
			$num = $model->addContents($tablename,$data);
			$gid = $num;
		}else{
			$newurl = $url['addGroup'].$where['gid'];
			$num = $model->editContents($where,$data,$tablename);
			$gid = $where['gid'];
		}
		
		if($num){

			if($gid){
				//var_dump($groups);die;
				$delWhere['gid'] = $gid;
				$acffnum = $model->delContents($delWhere,'t_group_role','',1);
				if($roles){
					foreach ($roles as $key => $value) {
						$role_group[$key]['gid'] = $gid;
						$role_group[$key]['rid'] = $value;
					}
	
					$model->batchAddContents('t_group_role',$role_group);
				}
			}

			$this->success('操作成功!',$successUrl);
		}else{
			if($where['gid']){
				$errorUrl = $errorUrl.$where['gid'];
			}
			$this->error('操作失败!',$errorUrl);
		}
	}

	//用户审核
	public function authGroup(){

		safeFilter();//防sql注入

		$gid = $this->input->get('gid');
		$url = C('url','url');

		$model = M('t_group');
		$where['gid'] = $gid;
		$uidResult = $model->getOne('t_group','state',$where);
		if(!$uidResult){
			$this->assign('state','');
		}
		$this->assign('state',$uidResult['state']);
		$this->assign('gid',$gid);
		$this->assign('doAuth',$url['authGroupUrl']);
		$this->display('authGroup');
	}

	//角色分组
	public function authRoleGroup(){
		safeFilter();//防sql注入

		$gid = $this->input->get('gid');
		$url = C('url','url');
		$model = M('t_role');
		$where['state'] = 0;
		$role = $model->getAll('t_role','rid,title',$where);
		if($gid){
			$roleGroup = $model->getAll('t_group_role','grid,rid',array('gid'=>$gid));
			if($roleGroup){
				$oneRole = twoToOneBykey($roleGroup,'rid','grid');
			}
			if(isset($oneRole) && $roleGroup &&$oneRole && $role){
				foreach ($role as $key => $value) {
					$role[$key]['active'] = 0;
					if(in_array($value['rid'], $oneRole)){
						$role[$key]['active'] = 1;
					}
				}
			}
		}
		$this->assign('role',$role);
		$this->assign('gid',$gid);
		$this->assign('doRoleGroup',$url['authRoleGroupUrl']);
		$this->display('authRoleGroup');
	}

	public function role(){

		$_SESSION['admin_preUrl'] = $_SERVER['PHP_SELF'];

		$url = C('url','url');

		$model = M('t_role');
		$where['rid !='] = '0';
		$userResult = $model->getAll('t_role','*',$where);
		$this->assign('data',$userResult);
		$this->assign('delRole',$url['delRole']);
		$this->assign('addRole',$url['addRole']);

		$this->assign('authUrl',$url['authRoleViewUrl']);
		$this->assign('authRoleUrl',$url['roleUrl']);

		$this->assign('html','');
		
		$this->display('role');
	}

	public function systemRoleAddEdit(){

		$_SESSION['admin_preUrl'] = $_SERVER['PHP_SELF'];
		$model = M('t_role');

		$rid = $this->input->get_post('rid');
		$url = C('url','url');

		if($rid){
			$this->assign('type','edit');
			$where['rid'] = $rid;
			$tablename = 't_role';
			$userResult = $model->getOne($tablename,'*',$where);
			$this->assign($userResult);
		}else{
			$this->assign('rid',$rid);
		}

				//取得后台节点数据
		$newArray = array();
		$this->getMenuList($newArray);

		$this->getActiveState($rid,$newArray);

		$this->assign('action',$url['doAddEditRole']);
		$this->assign('nodeback',$newArray);
		$this->display('role_add_edit');
	}

	public function doSystemRoleAddEdit(){
		
		$where['rid'] = $this->input->post('rid',true);
		$nid = $this->input->post('nid',true);
		$data['title'] = $this->input->post('title',true);
		$data['entitle'] = $this->input->post('entitle',true);
		$data['state'] = $this->input->post('state',true);
		$data['actiontime'] = date('Y-m-d H:i:s');
		
		$url = C('url','url');
		$model = M('t_role');
		$tablename = 't_role';
		$errorUrl = $url['addRole'];
		$successUrl = $url['role'];

		if(!$where['rid']){
			$data['ctime'] = date('Y-m-d H:i:s');
			$num = $model->addContents($tablename,$data);
			$rid = $num;
		}else{
			$newurl = $url['addRole'].$where['rid'];
			$num = $model->editContents($where,$data,$tablename);
			$rid = $where['rid'];
		}
		
		if($num){
			$this->authRoleList($rid,$nid);
			$this->success('操作成功!',$successUrl);
		}else{
			if($where['rid']){
				$errorUrl = $errorUrl.$where['rid'];
			}
			$this->error('操作失败!',$errorUrl);
		}
	}

	//分配权限
	public function authRoleList($rid,$nids){

		$model = M('t_role_auth');
		
		if($rid){
			$where['rid'] = $rid;
			$acffnum = $model->delContents($where,'t_role_auth','',1);
		}

		if($nids){
			foreach ($nids as $key => $value) {
				$role_auth[$key]['rid'] = $rid;
				$role_auth[$key]['nid'] = $value;
			}

			if($model->batchAddContents('t_role_auth',$role_auth)){
				return true;
			}else{
				return false;
			}
			
		}else{
			return false;
		}
		
	}

	//用户审核
	public function authRole(){

		safeFilter();//防sql注入

		$rid = $this->input->get('rid');
		$url = C('url','url');

		$model = M('t_role');
		$where['rid'] = $rid;
		$uidResult = $model->getOne('t_role','state',$where);
		if(!$uidResult){
			$this->assign('state','');
		}
		$this->assign('state',$uidResult['state']);
		$this->assign('rid',$rid);
		$this->assign('doAuth',$url['authRoleUrl']);
		$this->display('authRole');
	}

	//用户角色分配权限
	public function roleList(){

		safeFilter();//防sql注入

		$rid = $this->input->get('rid');

		$_SESSION['admin_preUrl'] = $_SERVER['PHP_SELF'];
		//取得后台节点数据
		$newArray = array();
		$this->getMenuList($newArray);

		$url = C('url','url');

		$this->getActiveState($rid,$newArray);
		$this->assign('rid',$rid);
		$this->assign('nodeback',$newArray);
		$this->assign('doAutoRoleList',$url['autoRoleList']);
		$this->display('roleList');
	}


	//是否选中
	public function getActiveState($rid,&$newArray){
		$model = M('t_role_auth');
		$where['rid'] = $rid;
		$nidResult = $model->getAll('t_role_auth','raid,nid',$where);

		if($nidResult){
			
			$oneRoleList = twoToOneBykey($nidResult,'nid','raid');
			if($newArray ){
				foreach ($newArray as $key => $value) {
					if(isset($value['children']) && $value['children']){
						foreach ($value['children'] as $keys => $val) {
							if(in_array($val['nid'], $oneRoleList)){
								$newArray[$key]['children'][$keys]['active'] = 1;
							}else{
								$newArray[$key]['children'][$keys]['active'] = 0;
							}
						}
					}
					
				}
			}
		}
	}

	//获取菜单
	public function getMenuList(&$newArray){
		//取得后台节点数据
		loadLib('NavMenu');
        loadLib('Recursive');
        NavMenu::$type = 'back';
        $recursiveObj = Recursive::getInstance();
        $obj = NavMenu::createObj();
        
        if( $obj ){
        	$menu = $obj->getMenuList();
            $recursiveObj->arrayController($menu['result'],0,$newArray);
        }
	}

	public function test(){
		loadLib('Sign');
		Sign::$type = 'back';
		$obj = Sign::createObj();
		$result = $obj->getBackMenu();

	}


	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */