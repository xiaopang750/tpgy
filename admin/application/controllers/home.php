<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends BackController {

	/**
	 * 首页控制器
	 * @author liuguangping
	 * @version 2014/10/24
	 */
	public function index()
	{
		$_SESSION['admin_preUrl'] = $_SERVER['PHP_SELF'];
		$this->display('admin');
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */