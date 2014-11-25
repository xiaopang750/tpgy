<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends ForeController {

	public function __construct(){
		parent::__construct();
	}
	/**
	 * 关于我们控制器
	 * @author liuguangping
	 * @version 2014/10/24
	 */
	public function index()
	{
		/*$this->assign('key','ddddss');*/
		//$this->display('home',array('key'=>'ddd'));
		//$this->load->view('welcome_message');
		$_SESSION['preUrl'] = $_SERVER['PHP_SELF'];
		$this->display('about');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */