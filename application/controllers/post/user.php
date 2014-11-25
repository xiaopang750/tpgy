<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *description:前台登录注册
 *author:liuguangping
 *date:2014/10/29
 */
class User extends ForeController {

	public function __construct(){
		parent::__construct();
	}
	
	//登录
	public function signIn()
	{
		//测试数据
		$_POST['username'] = 'admin@admin.com';
		$_POST['password'] = '111111';
		$_POST['remeber'] = '0';

		loadLib('Sign');
		Sign::$type = 'fore';
		$obj = Sign::createObj();
		if($obj){
			$obj->signUp();
		}else{
			echojson('50000','获取登录对象失败！','获取登录对象失败！');
		}

	}

	//退出登录
	public function signOut(){
		
		loadLib('Sign');
		Sign::$type = 'fore';
		$obj = Sign::createObj();
		if($obj){
			$obj->signOut();
		}else{
			echojson('50000','获取登录对象失败！','获取登录对象失败！');
		}

	}

	//注册
	public function register(){

		//测试数据
		//echo $_SESSION['captcha'];DIE;
		$_POST=array(
				'uname'=>'liuguangpin',
				'email'=>'admin@admin1.com',
				'nickname'=>'liuguangping',
				'phone'=>'13071150092',
				'pwd'=>'111111',
				'pwdconf'=>'111111',
				'captcha'=>'0065',
				'type'=>'0'
			);

		loadLib('Sign');
		Sign::$type = 'fore';
		$obj = Sign::createObj();
		if($obj){
			$obj->register();
		}else{
			echojson('50000','获取登录对象失败！','获取登录对象失败！');
		}
	}

	//用户表验证唯一性
	public function isOnly(){

		//测试数据
		$_POST['key'] = 'uname';
		$_POST['value'] = 'liuguangping';
		$_POST['uid'] = '1';

		safeFilter();//防sql注入
		$key = $this->input->post('key');
		$value = $this->input->post('value');
		$type = $this->input->post('uid');
		//type 1 修改 0不修改
		$map[$key] = $value;
		if($type){
			$result = M('t_user')->isOnly('t_user',$map,'uid',$type);
		}else{
			$result = M('t_user')->isOnly('t_user',$map);
		}
		
		if($result){
			echojson('50005','用户已被占用，请重新输入！','用户已被占用，请重新输入！');
		}else{
			echojson('20000','用户可用！','用户可用！');
		}
	}

}

