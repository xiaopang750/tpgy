<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');   
/*=============================================================================
#     FileName: NavMenu.php
#         Desc: 太平公益前台后台菜单例模式
#       Author: 刘广平
#        Email: liuguangpingtest@163.com
#     HomePage: http://blog.lgp2.com
#      Version: 0.0.1
#   LastChange: 2014-10-27 13:34:31
#      History:
=============================================================================*/

class NavMenu{
	public static $type;
	public static function createObj(){
		if(self::$type == 'fore'){
			$obj = ForeMenu::getInstance();
		}elseif(self::$type == 'back'){
			$obj = BackMenu::getInstance();
		}else{
			$obj = null;
		}

		return $obj;
		
	}
}

class ForeMenu
{
	
	private static $CI;

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

	public function getForeMenu(){

		$where['keysql'] = 'ishidden = ? AND type = ?';
		$where['valueSql'] = array(0,0);
		$result = M('t_arctype')->getMenu($where,'*','sx ASC,aid asc');
		return $result;
	}

	public function getMenuList(){
		$where['keysql'] = 'aid != ?';
		$where['valueSql'] = array('');
		$result = M('t_arctype')->getMenu($where,'*','sx ASC,aid asc');
		return $result;
	}

	public function __destruct(){

	}

}

class BackMenu
{
	

	private static $CI;

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

	public function getBackMenu(){
		$isadmin = isset($_SESSION['isadmin'])?$_SESSION['isadmin']:1;
		if($isadmin == 0){
			
			return $this->getAdminMenu();
	       
		}else{

			return $this->getUserMenu();
		}
	}

	//获取管理员菜单
	public function getAdminMenu(){

		$newArray = array();
        loadLib('Recursive');
        $recursiveObj = Recursive::getInstance();

        if( $recursiveObj ){
        	$menu = $this->getMenuList();
            $recursiveObj->arrayController($menu['result'],0,$newArray);
        }else{
        	exit('无相关权限，请联系相关人员！');
        }
        $BackMenu = array();
        if($newArray){
        	foreach($newArray as $key=>$value){
        		if(isset($value['children']) && $value['ishidden'] == 0){
        			$BackMenu['parent'][$key]['nid'] = $value['nid'];
        			$BackMenu['parent'][$key]['module'] = $value['module'];
        			$BackMenu['parent'][$key]['module_name'] = $value['module_name'];
        			$BackMenu['parent'][$key]['ico'] = $value['ico'];
        			$BackMenu['parent'][$key]['is_app_navi'] = $value['is_app_navi'];
        			$BackMenu['parent'][$key]['target'] = $value['target'];
        			$BackMenu['parent'][$key]['url'] = $value['url'];

        			$BackMenu['children'][$value['nid']] = $value['children'];
        		}
        	}

        	if($BackMenu){
        		return $BackMenu;
        	}else{
        		exit('无相关权限，请联系相关人员！');
        	}
        }else{
        	exit('无相关权限，请联系相关人员！');
        }
	}

	//获取普通菜单
	public function getUserMenu(){
		//获取用户权限
		$user_id = isset($_SESSION['uid'])?$_SESSION['uid']:'';
		if(!$user_id) exit('您还没有登录，请登录！');

		$where['uid'] = $user_id;
		$userGid = M('t_user_group')->getAll('t_user_group','gid,ugid',$where);
		$userGid = $userGid?twoToOneBykey($userGid,'gid','ugid'):'';

		if($userGid){
			$roles = $userGid?M('t_group_role')->getRidByGid($userGid):'';
			$roles = $roles?twoToOneBykey($roles,'rid','grid'):'';

			$auths = $roles?M('t_role_auth')->getaidByRid($roles):'';
			$auths = $auths?twoToOneBykey($auths,'nid','raid'):'';
			$auths = $auths?array_unique($auths):'';

			if(!$auths) exit('您还没分配权限，请联系管理员为你分配权限！');
			if(!$pidReuslut = M('t_navigationmenu')->getPidMenu($auths)) exit('您还没分配权限，请联系管理员为你分配权限！');
			$pidArr = $pidReuslut?array_unique(twoToOneBykey($pidReuslut,'pid','nid')):exit('您还没分配权限，请联系管理员为你分配权限！');
			//查出所有后台数据
			$newArray = array();
	        loadLib('Recursive');
	        $recursiveObj = Recursive::getInstance();

	        if( $recursiveObj ){
	        	$menu = $this->getMenuList();
	            $recursiveObj->arrayController($menu['result'],0,$newArray);
	        }else{
	        	exit('无相关权限，请联系相关人员！');
	        }

	        foreach ($newArray as $key => $value) {
	        	if(in_array($value['nid'], $pidArr)){
	        		$BackMenu['parent'][$key]['nid'] = $value['nid'];
        			$BackMenu['parent'][$key]['module'] = $value['module'];
        			$BackMenu['parent'][$key]['module_name'] = $value['module_name'];
        			$BackMenu['parent'][$key]['ico'] = $value['ico'];
        			$BackMenu['parent'][$key]['is_app_navi'] = $value['is_app_navi'];
        			$BackMenu['parent'][$key]['target'] = $value['target'];
        			$BackMenu['parent'][$key]['url'] = $value['url'];
        		
	        	}
	        	if(isset($value['children']) && $value['children']){
	        		foreach ($value['children'] as $keys => $val) {
		        		if(in_array($val['nid'], $auths)){
		        			$BackMenu['children'][$value['nid']][] = $val;
		        		}
	        		}
	        	}
	        	
	        }

	        if($BackMenu){
        		return $BackMenu;
        	}else{
        		exit('无相关权限，请联系相关人员！');
        	}

		}else{
			exit('您还没分配权限，请联系管理员为你分配权限！');
		}

	}


	public function getMenuList(){
		$where['keysql'] = 'nid != ?';
		$where['valueSql'] = array('');
		$result = M('t_navigationmenu')->getMenu($where,'*','sort ASC,nid ASC');
		return $result;
	}

	public function __destruct(){
	}

}