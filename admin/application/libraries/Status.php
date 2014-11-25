<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');   
/*=============================================================================
#     FileName: Sign.php
#         Desc: 太平公益前台后台注册登录单例模式
#       Author: 刘广平
#        Email: liuguangpingtest@163.com
#     HomePage: http://blog.lgp2.com
#      Version: 0.0.1
#   LastChange: 2014-10-29 13:34:31
#      History:
=============================================================================*/

class Status{
	public static $type;
	public static function createObj(){
		if(self::$type == 'arctype'){
			$obj = Arctype::getInstance();
		}elseif(self::$type == 'user'){
			$obj = UserAdmin::getInstance();
		}else{
			$obj = null;
		}

		return $obj;
	}
}

class Arctype
{
	
	private static $CI;
	
	//1是否隐藏 2是否可见
	public $type;
	
	public $aid;

	private static $_instance;

	private function __construct() 
	{
		self::$CI = &get_instance();
	}

	public static function getInstance(){

		if(!self::$_instance instanceof self){
			self::$_instance = new self;
		}
		return self::$_instance;
	}

	public function status(){

		$model = M('t_arctype');
		$result = $model->getOne('t_arctype','ishidden,guest',array('aid'=>$this->aid));
		if($result){
			if($this->type == 1){
				$isHidden = $result['ishidden'];
				if($isHidden == 0){
					$data['ishidden'] = 1;
					$return['domes'] = '显示';
					$return['mes'] = '隐藏';
				}else{
					$data['ishidden'] = 0;
					$return['domes'] = '隐藏';
					$return['mes'] = '显示';
				}
			}elseif($this->type == 2){
				$isGuest = $result['guest'];
				if($isGuest == 0){
					$data['guest'] = 1;
					$return['domes'] = '不可见';
					$return['mes'] = '可见';
				}else{
					$data['guest'] = 0;
					$return['domes'] = '可见';
					$return['mes'] = '不可见';
				}
			}
	
			$where['aid'] = $this->aid;
			if($model->editContents($where,$data,'t_arctype')){

				echojson('20000',$return,'修改成功！');
			}else{
				echojson('50005','修改失败！','修改失败！');
			}
		}else{
			echojson('50000','代码数据操作失败！','代码数据操作失败！');
		}
	}

	public function backIsHiden(){
		$model = M('t_navigationmenu');
		$result = $model->getOne('t_navigationmenu','ishidden',array('nid'=>$this->aid));
		if($result){
			if($this->type == 1){
				$isHidden = $result['ishidden'];
				if($isHidden == 0){
					$data['ishidden'] = 1;
					$return['domes'] = '显示';
					$return['mes'] = '隐藏';
				}else{
					$data['ishidden'] = 0;
					$return['domes'] = '隐藏';
					$return['mes'] = '显示';
				}
			}
	
			$where['nid'] = $this->aid;
			if($model->editContents($where,$data,'t_navigationmenu')){

				echojson('20000',$return,'修改成功！');
			}else{
				echojson('50005','修改失败！','修改失败！');
			}
		}else{
			echojson('50000','代码数据操作失败！','代码数据操作失败！');
		}
	}

	public function __destruct(){

	}

}


class UserAdmin{

	private static $CI;
	
	//1是否隐藏 2是否可见
	public $state;
	
	public $uid;

	private static $_instance;

	private function __construct() 
	{
		self::$CI = &get_instance();
	}

	public static function getInstance(){

		if(!self::$_instance instanceof self){
			self::$_instance = new self;
		}
		return self::$_instance;
	}

	public function status(){

		$model = M('t_system_user');
		$where['uid'] = $this->uid;
		$data['state'] = $this->state;
		$tablename = 't_system_user';
		$result = $model->editContents($where,$data,$tablename);
		if($result){
			echojson('20000','修改成功！','修改成功！');
		}else{
			echojson('50005','修改失败！','修改失败！');
		}
		
	}

	//用户分组
	public function userGroup(){

		$model = M('t_system_user');
		$where['uid'] = $this->uid;

		$data['groups'] = $this->state?$this->state:'';
		$data['actiontime'] = date('Y-m-d H:i:s');
		$tablename = 't_system_user';
		$result = $model->editContents($where,$data,$tablename);
		if($result){

			$acffnum = $model->delContents($where,'t_user_group','',1);

			$groups = $this->state?explode(',', $this->state):'';

			if($groups){
				foreach ($groups as $key => $value) {

					$user_group[$key]['uid'] = $this->uid;
					$user_group[$key]['gid'] = $value;
				}

				$model->batchAddContents('t_user_group',$user_group);
			}
			echojson('20000','修改成功！','修改成功！');
		}else{
			echojson('50005','修改失败！','修改失败！');
		}
		
	}

	public function statusGroup(){

		$model = M('t_group');
		$where['gid'] = $this->uid;
		$data['state'] = $this->state;
		$tablename = 't_group';
		$result = $model->editContents($where,$data,$tablename);
		if($result){
			echojson('20000','修改成功！','修改成功！');
		}else{
			echojson('50005','修改失败！','修改失败！');
		}
		
	}

	//用户组分角色
	public function groupRole(){

		$model = M('t_group_role');
		$where['gid'] = $this->uid;

			$acffnum = $model->delContents($where,'t_group_role','',1);
			$roles = $this->state?explode(',', $this->state):'';

			if($roles){
				foreach ($roles as $key => $value) {
					$role_group[$key]['gid'] = $this->uid;
					$role_group[$key]['rid'] = $value;
				}

				$model->batchAddContents('t_group_role',$role_group);
				echojson('20000','修改成功！','修改成功！');
			}else{
				echojson('50005','修改失败！','修改失败！');
			}
			
	}
	
	public function statusRole(){

		$model = M('t_role');
		$where['rid'] = $this->uid;
		$data['state'] = $this->state;
		$tablename = 't_role';
		$result = $model->editContents($where,$data,$tablename);
		if($result){
			echojson('20000','修改成功！','修改成功！');
		}else{
			echojson('50005','修改失败！','修改失败！');
		}
		
	}

	//分配权限
	public function authRoleList(){

		$model = M('t_role_auth');
		$where['rid'] = $this->uid;

		$acffnum = $model->delContents($where,'t_role_auth','',1);
		$nids = $this->state?explode(',', $this->state):'';

		if($nids){
			foreach ($nids as $key => $value) {
				$role_auth[$key]['rid'] = $this->uid;
				$role_auth[$key]['nid'] = $value;
			}

			$model->batchAddContents('t_role_auth',$role_auth);
			echojson('20000','修改成功！','修改成功！');
		}else{
			echojson('50005','修改失败！','修改失败！');
		}
		
	}
	
	public function __destruct(){

	}

}
