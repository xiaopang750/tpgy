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

class Sign{
	public static $type;
	public static function createObj(){
		if(self::$type == 'fore'){
			$obj = ForeSign::getInstance();
		}elseif(self::$type == 'back'){
			$obj = BackSign::getInstance();
		}else{
			$obj = null;
		}

		return $obj;
	}
}

class ForeSign
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

	public function signUp(){

		safeFilter();//防sql注入

		self::$CI->load->helper(array('form', 'url'));
		self::$CI->load->library('form_validation');

		$username = self::$CI->input->post('username');//用户名，邮箱，手机号码
		$password = md5(md5(self::$CI->input->post('password')));
		$remeber  = self::$CI->input->post('remeber');

		//用户名是否为空
		if(!self::$CI->form_validation->required($username)){
			echojson('50001','用户名为空','用户名为空');
		}

		if(!self::$CI->form_validation->required($password)){
			echojson('50001','密码为空','密码为空');
		}
		
		//验证是否登录合法
		$userinfo = M('t_user')->getUserInfo($username,$password);
		if($userinfo){
			if($userinfo['state'] == 0){
				
					$lift_time = C('common','remeber');

					$remeber_time = $lift_time['lift_time'];

					$userinfo['remeber'] = $remeber;

					//设置session cookie
					$this->setUserSession($userinfo,$remeber_time);

					//更新首次登录ip time
					$uid = array('uid'=>$userinfo['uid']);
					if(!$userinfo['onceip']){
						$data['onceip'] = getClientIp();
						$data['oncetime'] = date('Y-m-d H:i:s');	
					}
					$data['loginip'] = getClientIp();
					$data['logintime'] = date('Y-m-d H:i:s');
					$tablenames = 't_user';
					M('t_user')->editContents($uid,$data,$tablenames);

					$url = C('url','url');
					$preUrl = (isset($_SESSION['preUrl'])&&$_SESSION['preUrl'])?$_SESSION['preUrl']:$url['home'];
					echojson('20000',$preUrl,'登录成功');
			}else{
				if($userinfo['state'] == '-1'){
					echojson('30000','您未通过审核，请联系管理员审核','您未通过审核，请联系管理员审核');
				}elseif($userinfo['state'] == '1'){
					echojson('30000','您还没审核，请联系管理员审核','您还没审核，请联系管理员审核');
				}else{
					echojson('30000','您已被拉黑，请联系管理员','您已被拉黑，请联系管理员');
				}
			}
		}else{
			echojson('50005','用户名或密码错误','用户名或密码错误');
		}


	}

	public function setUserSession($userinfo,$remeber_time=0){

		if($userinfo['remeber'] == 1){

			setcookie("user_id",$userinfo['uid'],$remeber_time,'/');
			setcookie("user_name",$userinfo['uname'],$remeber_time,'/');
			setcookie("user_nickname",$userinfo['nickname'],$remeber_time,'/');
			setcookie("user_email",$userinfo['email'],$remeber_time,'/');
			setcookie("user_phone",$userinfo['phone'],$remeber_time,'/');
			setcookie("user_type",$userinfo['type'],$remeber_time,'/');
			setcookie("user_status",1,$remeber_time,'/'); //用户状态 1已登录
			setcookie("remeber",$userinfo['remeber'],$remeber_time,'/');
		}

		$_SESSION['user_id'] = $userinfo['uid'];
		$_SESSION['user_name'] = $userinfo['uname'];
		$_SESSION['user_nickname'] = $userinfo['nickname'];
		$_SESSION['user_email'] = $userinfo['email'];
		$_SESSION['user_phone'] = $userinfo['phone'];
		$_SESSION['user_type'] = $userinfo['type'];
		$_SESSION['user_status'] = 1;
		$_SESSION['remeber'] = $userinfo['remeber'];
	
	}

	public function signOut(){

		safeFilter();
		setcookie("user_id","",time()-3600*24*7,'/');
		setcookie("user_name","",time()-3600*24*7,'/');
		setcookie("user_nickname","",time()-3600*24*7,'/');
		setcookie("user_email",'',time()-3600*24*7,'/');
		setcookie("user_phone",'',time()-3600*24*7,'/');
		setcookie("user_type",'',time()-3600*24*7,'/');
		setcookie("user_status",'',time()-3600*24*7,'/');
		setcookie("remeber",'',time()-3600*24*7,'/');
		session_unset();
		echojson('20000','退出成功','退出成功');

	}

	public function register(){

		safeFilter();//防sql注入

		self::$CI->load->helper(array('form', 'url'));
		self::$CI->load->library('form_validation');

		$uname = self::$CI->input->post('uname');
		$email = self::$CI->input->post('email');
		$nickname = self::$CI->input->post('nickname');
		$phone = self::$CI->input->post('phone');
		$pwd = self::$CI->input->post('pwd');
		$pwdconf = self::$CI->input->post('pwdconf');
		$captcha = isset($_SESSION['captcha'])?$_SESSION['captcha']:'';
		$captchaconf = self::$CI->input->post('captcha');
		$type  = self::$CI->input->post('type')?self::$CI->input->post('type'):0;

		//验证uname
		if(!self::$CI->form_validation->required($uname) || !self::$CI->form_validation->min_length($uname,6) || !self::$CI->form_validation->max_length($uname,12) || !self::$CI->form_validation->alpha_dash($uname)){
			echojson('50005','用户名含字母/数字/下划线/破折号字符，在6-12之间！','用户名含字母/数字/下划线/破折号字符，在6-12之间！');
		}else{

			//验证uname 用户名的唯一
			$map['uname'] = $uname;
			$field = 'uname';
			$tablename = 't_user';
			if(M('t_user')->getOne($tablename,$field,$map)){
				echojson('50005','用户已被占用，请重新输入！','用户已被占用，请重新输入！');
			}
		}

		//验证email
		if(!self::$CI->form_validation->valid_email($email)){
			echojson('50005','不合法的email地址','不合法的email地址');
		}else{

			//验证email 地址的唯一
			$where['email'] = $email;
			$field = 'email';
			$tablename = 't_user';
			if(M('t_user')->getOne($tablename,$field,$where)){
				echojson('50005','email地址已被占用，请重新输入！','email地址已被占用，请重新输入！');
			}

		}

		//昵称 6-12
		if(!self::$CI->form_validation->required($nickname) || !self::$CI->form_validation->min_length($nickname,6) || !self::$CI->form_validation->max_length($nickname,12)){
			echojson('50005','昵称6-12之间！','昵称6-12之间！');
		}

		//手机验证
		if(!self::$CI->form_validation->valid_moblie($phone)){

			echojson('50005','请输入正确的手机号码！','请输入正确的手机号码！');
		}else{

			//手机验证 手机的唯一
			$ismobile['phone'] = $phone;
			$field = 'phone';
			$tablename = 't_user';
			if(M('t_user')->getOne($tablename,$field,$ismobile)){
				echojson('50005','手机号已被占用，请重新输入！','手机号已被占用，请重新输入！');
			}
		}

		//密码
		if(!self::$CI->form_validation->required($pwd) || !self::$CI->form_validation->min_length($pwd,6) || !self::$CI->form_validation->max_length($pwd,12)){
			echojson('50005','密码6-12之间！','昵称6-12之间！');
		}

		if($pwd != $pwdconf){

			echojson('50005','两次输入的密码不一致！','两次输入的密码不一致！');
		}

		//验证码
		if($captcha != $captchaconf){

			echojson('50005','验证码输入错误！','验证码输入错误！');
		}

		$pwd = md5(md5($pwdconf));

		$data['uname'] = $uname;
		$data['email'] = $email;
		$data['nickname'] = $nickname;
		$data['phone'] = $phone;
		$data['pwd'] = $pwd;
		$data['type'] = $type;

		$data['jointime'] = date('Y-m-d H:i:s');
		$data['joinip'] = getClientIp();
		$table_name = 't_user';
		$url = C('url','url');
		$preUrl = (isset($_SESSION['preUrl'])&&$_SESSION['preUrl'])?$_SESSION['preUrl']:$url['home'];

		if($uid = M('t_user')->addContents($table_name,$data)){
			//$curentUrl = $_SERVER['PHP_SELF'];
			$data['remeber'] = 0;
			$data['uid'] = $uid;
			$this->setUserSession($data);
			echojson('20000',$preUrl,'注册失败！');
		}else{
			echojson('50005','注册失败！','注册失败！');
		}
	}

	public function __destruct(){

	}

}


class BackSign
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

	public function signUp(){

		safeFilter();//防sql注入

		self::$CI->load->helper(array('form', 'url'));
		self::$CI->load->library('form_validation');

		$username = self::$CI->input->post('username');//用户名，邮箱，手机号码
		$password = md5(md5(self::$CI->input->post('password')));

		//用户名是否为空
		if(!self::$CI->form_validation->required($username)){
			return $this->setMes('50001','用户名为空','用户名为空');
			/*echojson('50001','用户名为空','用户名为空');*/
		}

		if(!self::$CI->form_validation->required($password)){
			return $this->setMes('50001','密码为空','密码为空');
			/*echojson('50001','密码为空','密码为空');*/
		}

		//验证是否登录合法
		$where['username'] = $username;
		$where['password'] = $password;
		$field = "username,realname,state,uid,isadmin";
		$userinfo = M('t_system_user')->getOne('t_system_user',$field,$where);
		if($userinfo){
			if($userinfo['state'] == 0){
				
				//设置session cookie
				$this->setUserSession($userinfo);

				//更新登录ip time
				$uid = array('uid'=>$userinfo['uid']);
				$data = array(
					'loginip'=>getClientIp(),
					'logintime'=>date('Y-m-d H:i:s')
				);
				$tablenames = 't_system_user';
				M('t_system_user')->editContents($uid,$data,$tablenames);
					
				$url = C('url','url');
				$preUrl = (isset($_SESSION['admin_preUrl'])&&$_SESSION['admin_preUrl'])?$_SESSION['admin_preUrl']:$url['admin'];
				return $this->setMes('20000',$preUrl,'登录成功');
					
				/*	echojson('20000',$preUrl,'登录成功');*/
			}else{
				if($userinfo['state'] == '-1'){
					return $this->setMes('30000','您未通过审核，请联系管理员审核','您未通过审核，请联系管理员审核');
					/*echojson('30000','您未通过审核，请联系管理员审核','您未通过审核，请联系管理员审核');*/
				}elseif($userinfo['state'] == '1'){
					return $this->setMes('30000','您还没审核，请联系管理员审核','您还没审核，请联系管理员审核');
					/*echojson('30000','您还没审核，请联系管理员审核','您还没审核，请联系管理员审核');*/
				}else{
					return $this->setMes('30000','您已被拉黑，请联系管理员','您已被拉黑，请联系管理员');
					/*echojson('30000','您已被拉黑，请联系管理员','您已被拉黑，请联系管理员');*/
				}
			}
		}else{

			return $this->setMes('50005','用户名或密码错误','用户名或密码错误');
			/*echojson('50005','用户名或密码错误','用户名或密码错误');*/
		}
	}

	public function getBackMenu(){
		loadLib('NavMenu');
		NavMenu::$type = 'back';
        $obj = NavMenu::createObj();
        $result = $obj->getBackMenu();
        return $result;
	}



	public function getBackTop(){

		$weekarray=array("日","一","二","三","四","五","六");
        $data['currenttime'] = date("Y/m/d");
        $data['currentdate'] = $weekarray[date("w")];
        $data['username'] = $_SESSION['username'];
       	self::$CI->assign($data);
	}


	public function setMes($state,$data,$mes){

		$result['state'] = $state;
		$result['data'] = $data;
		$result['mes'] = $mes;
		return $result;
	}

	public function setUserSession($userinfo){

		$_SESSION['uid'] = $userinfo['uid'];
		$_SESSION['username'] = $userinfo['username'];
		$_SESSION['realname'] = $userinfo['realname'];
		$_SESSION['isadmin'] = $userinfo['isadmin'];
		$_SESSION['state'] = 1;

	}

	public function signOut(){

		safeFilter();
		session_unset();
		$this->setMes('20000','退出成功','退出成功');
		// echojson('20000','退出成功','退出成功');

	}

	public function __destruct(){
	
	}

}