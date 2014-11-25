<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 /**
 *description: Smarty操作类
 *author:liuguagnping
 *date:2014/04/19
 */
define('SMARTY_DIR', BASEPATH . '../' . APPNAME . '/libraries/smarty/');
require(SMARTY_DIR . 'SmartyBC.class.php');
class Sm extends SmartyBC {
 
	var $CI;
	var $lang_code;
 
	/**
	 * Constructor
	 *
	 * Loads the smarty class
	 *
	 * @access	public
	 */
	public function __construct() {

 		parent::__construct();

		if (!file_exists(BASEPATH . '../' . APPNAME . '/cache/smarty/cache'))
		{
			$this->mkdirs(BASEPATH . '../' . APPNAME . '/cache/smarty/cache');
		}
 
		$this->CI			= &get_instance();
		$this->lang_code	= $this->CI->config->item('lang_code');
 
		$this->template_dir = BASEPATH . '../static/views/';
		//$this->template_dir = BASEPATH . '../' . CUSTOM_VIEW;

        $this->compile_dir  = BASEPATH . '../' . APPNAME . '/cache/smarty/templates_c/';
        $this->config_dir   = BASEPATH . '../' . APPNAME . '/config/smarty/configs/';
        $this->cache_dir    = BASEPATH . '../' . APPNAME . '/cache/smarty/cache/';
 
		$this->caching 			= true;
		$this->force_compile	= true;
		$this->left_delimiter   = "<{";
		$this->right_delimiter  = "}>";
		log_message('debug', "SmartyExtended Class Initialized");
    }
 
	public function view($template, $data='') {

		if($data)
		{
			if(is_array($data))
			{
				foreach($data as $key=>$val)
				{
					$this->assign($key, $val);
				}
			}
		}
		if(substr($template,0,1) == '/'){
			$template = substr($template, strpos($template, '/')+1);
		}
		$this->display($template . '.html');  //模板后缀名

	}

	public function show($template){
		if(substr($template,0,1) == '/'){
			$template = substr($template, strpos($template, '/')+1);
		}
		$this->display($template . '.html');  //模板后缀名
	}

	private function mkdirs($dir)
	{
		if(!is_dir($dir))
		{
			if(!$this->mkdirs(dirname($dir))){
				
				return false;
			}
			if(!mkdir($dir,0777)){
				return false;
			}
		}
		return true;
	}
}

?>

