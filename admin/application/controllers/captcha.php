<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Captcha {

	/**
	 * 验证码控制器
	 * @author liuguangping
	 * @version 2014/10/29
	 */
	public function index()
	{
		loadLib('CaptchaClass');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */