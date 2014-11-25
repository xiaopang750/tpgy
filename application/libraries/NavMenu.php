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
		
	}

	public function __destruct(){
		unset(self::$CI);
		unset(self::$_instance);
	}

}