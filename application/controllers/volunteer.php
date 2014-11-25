<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Volunteer extends ForeController {

	public function __construct(){
		parent::__construct();
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/*$this->assign('key','ddddss');*/
		//$this->display('home',array('key'=>'ddd'));
		//$this->load->view('welcome_message');
		$_SESSION['preUrl'] = $_SERVER['PHP_SELF'];
		$this->display('volunteer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */