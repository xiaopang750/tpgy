<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends BackController {

	public function __construct(){
		parent::__construct();
	}

	/**
	 * 首页控
	 * @author liuguangping
	 * @version 2014/10/24
	 */
	public function index()
	{
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
		$this->display('news');
	}

	public function add(){
	
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */