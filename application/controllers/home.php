<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends ForeController {

	public function __construct(){
		
		parent::__construct();
	}
	/**
	 * 首页控制器
	 * @author liuguangping
	 * @version 2014/10/24
	 */
	public function index()
	{
		// $rot = & load_class('Router','core');
		// echo $rot->fetch_class();
		// echo $rot->fetch_method();die;
		$_SESSION['preUrl'] = $_SERVER['PHP_SELF'];
		$this->display('home');
	}

	//更多捐助方式
	public function donation(){
		$this->display('donation');
	}

	public function myform(){


		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username1', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == FALSE)
		{
		$this->load->view('home/myform.html');
		}
		else
		{
		$this->load->view('formsuccess');
		}

			 // $this->load->helper(array('form', 'url'));
			 // $this->load->view('home/myform.html');
			//$this->display('myform');
		}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */