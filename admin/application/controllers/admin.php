<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends BackController {

	public function __construct(){
		parent::__construct();
	}

	/**
	 * 首页控制器
	 * @author liuguangping
	 * @version 2014/10/24
	 */
	public function index()
	{echo "dddd";die;
		$this->checklogin();
		$this->Menu();
		$this->seoMes('太平公益','太平公益');
		$_SESSION['preUrl'] = $_SERVER['PHP_SELF'];
		loadLib('Sign');
		Sign::$type = 'back';
		$obj = Sign::createObj();
		$obj->getBackTop();
		$url = C('url','url');
		$this->assign('panel',$url['panel']);
		$this->display('admin');
	}

	//登录加载页面
	public function login(){
		$data['state'] = 0;
		$this->seoMes('太平公益','太平公益');
		$this->assign($data);
		$this->display('login');
	}

	//登录
	public function signIn(){

		$data['state'] = 0;
		$this->seoMes('太平公益','太平公益');

		loadLib('Sign');
		Sign::$type = 'back';
		$obj = Sign::createObj();
		if($obj){
			$result = $obj->signUp();
			if($result && $result['state']){
				if($result['state'] == '20000'){
					$this->assign($data);
					$this->success('登录成功！',$result['data']);
					//jumpAjax('',$url);
				}else{
					$data['state'] = 1;
					$data['meserror'] = $result['data'];
				}
				
			}else{
				$data['state'] = 1;
				$data['meserror'] = '获取sign操作类失败！';
			}
		}else{
			$data['state'] = 1;
			$data['meserror'] = '获取登录对象失败！';
		/*	echojson('50000','获取登录对象失败！','获取登录对象失败！');*/
		}
		$this->assign($data);
		$this->display('login');
		

		
	}

	//退出
	public function signOut(){
		loadLib('Sign');
		Sign::$type = 'back';
		$obj = Sign::createObj();
		$obj->signOut();
		$url = C('url','url');
		$url = $url['login'];
		$this->success('退出成功！',$url);
		//jumpAjax('',$url);
	}

	/**
	 * 后台主页控制面板信息
	 */
	public function panel()
	{
		
		$this->checklogin();
		$_SESSION['admin_preUrl'] = $_SERVER['PHP_SELF'];
		$security_info=array();
		if(ENVIRONMENT=='development' || ENVIRONMENT=='testing'){
			$security_info['DEBUG']="强烈建议您网站上线后，关闭 DEBUG （错误提示）";
		}
	
		$this->seoMes('太平公益','太平公益');
		$statistics = array();

		/*
		 * 重要: 为了防止与应用别名重名，“服务器信息”、“用户信息”、“开发团队”作为key前面有空格
		 */

		// 服务器信息
		$serverInfo['核心版本']        	= '1.0 beta';
        $serverInfo['服务器系统及PHP版本']	= PHP_OS.' / PHP v'.PHP_VERSION;
        $serverInfo['服务器软件'] 			= $_SERVER['SERVER_SOFTWARE'];
        $serverInfo['最大上传许可']     	= ( @ini_get('file_uploads') )? ini_get('upload_max_filesize') : '<font color="red">no</font>';

      
        $serverInfo['执行时间限制']			= ini_get('max_execution_time').'秒' ;
        $serverInfo['服务器时间']			= date("Y年n月j日 H:i:s") ;
        $serverInfo['北京时间']			    = gmdate("Y年n月j日 H:i:s",time()+8*3600) ;
        $serverInfo['域名/IP']			    = $_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]' ;
        $serverInfo['剩余空间']			    = round((@disk_free_space(".")/(1024*1024)),2).'M' ;

       
        $statistics[' 服务器信息'] = $serverInfo;
        unset($serverInfo);

        // 用户信息
        $user['当前在线'] = '1';
        $user['全部用户'] = '2';
        $user['有效用户'] = '3';
        $statistics[' 用户信息'] = $user;
        unset($user);

       

        // 开发团队
        $statistics[' 开发团队'] = array(
        	'版权所有'	=> '<a href="'.SERVER_NAME.'" target="_blank">太平公益</a>',
            'UI设计'     => '<a href="#" target="_blank">范为</a>',
        	'项目经理'	=> '<a href="#" target="_blank">范为</a>、<a href="#" target="_blank">刘广平</a>',
        	'前端设计'	=> '<a href="#" target="_blank">范为</a>',
        	'开发团队'	=> '<a href="#" target="_blank">范为</a>、<a href="#" target="_blank">刘广平</a>',
        );
        $this->assign('statistics', $statistics);
		$this->display('panel');
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */