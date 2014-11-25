<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Common Functions
 *
 * Loads the base classes and executes the request.
 *
 * @package		CodeIgniter
 * @subpackage	codeigniter
 * @category	Common Functions
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/
 */

// ------------------------------------------------------------------------

/**
* Determines if the current version of PHP is greater then the supplied value
*
* Since there are a few places where we conditionally test for PHP > 5
* we'll set a static variable.
*
* @access	public
* @param	string
* @return	bool	TRUE if the current version is $version or higher
*/
if ( ! function_exists('is_php'))
{
	function is_php($version = '5.0.0')
	{
		static $_is_php;
		$version = (string)$version;

		if ( ! isset($_is_php[$version]))
		{
			$_is_php[$version] = (version_compare(PHP_VERSION, $version) < 0) ? FALSE : TRUE;
		}

		return $_is_php[$version];
	}
}

// ------------------------------------------------------------------------

/**
 * Tests for file writability
 *
 * is_writable() returns TRUE on Windows servers when you really can't write to
 * the file, based on the read-only attribute.  is_writable() is also unreliable
 * on Unix servers if safe_mode is on.
 *
 * @access	private
 * @return	void
 */
if ( ! function_exists('is_really_writable'))
{
	function is_really_writable($file)
	{
		// If we're on a Unix server with safe_mode off we call is_writable
		if (DIRECTORY_SEPARATOR == '/' AND @ini_get("safe_mode") == FALSE)
		{
			return is_writable($file);
		}

		// For windows servers and safe_mode "on" installations we'll actually
		// write a file then read it.  Bah...
		if (is_dir($file))
		{
			$file = rtrim($file, '/').'/'.md5(mt_rand(1,100).mt_rand(1,100));

			if (($fp = @fopen($file, FOPEN_WRITE_CREATE)) === FALSE)
			{
				return FALSE;
			}

			fclose($fp);
			@chmod($file, DIR_WRITE_MODE);
			@unlink($file);
			return TRUE;
		}
		elseif ( ! is_file($file) OR ($fp = @fopen($file, FOPEN_WRITE_CREATE)) === FALSE)
		{
			return FALSE;
		}

		fclose($fp);
		return TRUE;
	}
}

// ------------------------------------------------------------------------

/**
* Class registry
*
* This function acts as a singleton.  If the requested class does not
* exist it is instantiated and set to a static variable.  If it has
* previously been instantiated the variable is returned.
*
* @access	public
* @param	string	the class name being requested
* @param	string	the directory where the class should be found
* @param	string	the class name prefix
* @return	object
*/
if ( ! function_exists('load_class'))
{
	function &load_class($class, $directory = 'libraries', $prefix = 'CI_')
	{
		static $_classes = array();

		// Does the class exist?  If so, we're done...
		if (isset($_classes[$class]))
		{
			return $_classes[$class];
		}

		$name = FALSE;

		// Look for the class first in the local application/libraries folder
		// then in the native system/libraries folder
		foreach (array(APPPATH, BASEPATH) as $path)
		{
			if (file_exists($path.$directory.'/'.$class.'.php'))
			{
				$name = $prefix.$class;

				if (class_exists($name) === FALSE)
				{
					require($path.$directory.'/'.$class.'.php');
				}

				break;
			}
		}

		// Is the request a class extension?  If so we load it too
		if (file_exists(APPPATH.$directory.'/'.config_item('subclass_prefix').$class.'.php'))
		{
			$name = config_item('subclass_prefix').$class;

			if (class_exists($name) === FALSE)
			{
				require(APPPATH.$directory.'/'.config_item('subclass_prefix').$class.'.php');
			}
		}

		// Did we find the class?
		if ($name === FALSE)
		{
			// Note: We use exit() rather then show_error() in order to avoid a
			// self-referencing loop with the Excptions class
			exit('Unable to locate the specified class: '.$class.'.php');
		}

		// Keep track of what we just loaded
		is_loaded($class);

		$_classes[$class] = new $name();
		return $_classes[$class];
	}
}

// --------------------------------------------------------------------

/**
* Keeps track of which libraries have been loaded.  This function is
* called by the load_class() function above
*
* @access	public
* @return	array
*/
if ( ! function_exists('is_loaded'))
{
	function &is_loaded($class = '')
	{
		static $_is_loaded = array();

		if ($class != '')
		{
			$_is_loaded[strtolower($class)] = $class;
		}

		return $_is_loaded;
	}
}

// ------------------------------------------------------------------------

/**
* Loads the main config.php file
*
* This function lets us grab the config file even if the Config class
* hasn't been instantiated yet
*
* @access	private
* @return	array
*/
if ( ! function_exists('get_config'))
{
	function &get_config($replace = array())
	{
		static $_config;

		if (isset($_config))
		{
			return $_config[0];
		}

		// Is the config file in the environment folder?
		if ( ! defined('ENVIRONMENT') OR ! file_exists($file_path = APPPATH.'config/'.ENVIRONMENT.'/config.php'))
		{
			$file_path = APPPATH.'config/config.php';
		}

		// Fetch the config file
		if ( ! file_exists($file_path))
		{
			exit('The configuration file does not exist.');
		}

		require($file_path);

		// Does the $config array exist in the file?
		if ( ! isset($config) OR ! is_array($config))
		{
			exit('Your config file does not appear to be formatted correctly.');
		}

		// Are any values being dynamically replaced?
		if (count($replace) > 0)
		{
			foreach ($replace as $key => $val)
			{
				if (isset($config[$key]))
				{
					$config[$key] = $val;
				}
			}
		}

		return $_config[0] =& $config;
	}
}

// ------------------------------------------------------------------------

/**
* Returns the specified config item
*
* @access	public
* @return	mixed
*/
if ( ! function_exists('config_item'))
{
	function config_item($item)
	{
		static $_config_item = array();

		if ( ! isset($_config_item[$item]))
		{
			$config =& get_config();

			if ( ! isset($config[$item]))
			{
				return FALSE;
			}
			$_config_item[$item] = $config[$item];
		}

		return $_config_item[$item];
	}
}

// ------------------------------------------------------------------------

/**
* Error Handler
*
* This function lets us invoke the exception class and
* display errors using the standard error template located
* in application/errors/errors.php
* This function will send the error page directly to the
* browser and exit.
*
* @access	public
* @return	void
*/
if ( ! function_exists('show_error'))
{
	function show_error($message, $status_code = 500, $heading = 'An Error Was Encountered')
	{
		$_error =& load_class('Exceptions', 'core');
		echo $_error->show_error($heading, $message, 'error_general', $status_code);
		exit;
	}
}

// ------------------------------------------------------------------------

/**
* 404 Page Handler
*
* This function is similar to the show_error() function above
* However, instead of the standard error template it displays
* 404 errors.
*
* @access	public
* @return	void
*/
if ( ! function_exists('show_404'))
{
	function show_404($page = '', $log_error = TRUE)
	{
		$_error =& load_class('Exceptions', 'core');
		$_error->show_404($page, $log_error);
		exit;
	}
}

// ------------------------------------------------------------------------

/**
* Error Logging Interface
*
* We use this as a simple mechanism to access the logging
* class and send messages to be logged.
*
* @access	public
* @return	void
*/
if ( ! function_exists('log_message'))
{
	function log_message($level = 'error', $message, $php_error = FALSE)
	{
		static $_log;

		if (config_item('log_threshold') == 0)
		{
			return;
		}

		$_log =& load_class('Log');
		$_log->write_log($level, $message, $php_error);
	}
}

// ------------------------------------------------------------------------

/**
 * Set HTTP Status Header
 *
 * @access	public
 * @param	int		the status code
 * @param	string
 * @return	void
 */
if ( ! function_exists('set_status_header'))
{
	function set_status_header($code = 200, $text = '')
	{
		$stati = array(
							200	=> 'OK',
							201	=> 'Created',
							202	=> 'Accepted',
							203	=> 'Non-Authoritative Information',
							204	=> 'No Content',
							205	=> 'Reset Content',
							206	=> 'Partial Content',

							300	=> 'Multiple Choices',
							301	=> 'Moved Permanently',
							302	=> 'Found',
							304	=> 'Not Modified',
							305	=> 'Use Proxy',
							307	=> 'Temporary Redirect',

							400	=> 'Bad Request',
							401	=> 'Unauthorized',
							403	=> 'Forbidden',
							404	=> 'Not Found',
							405	=> 'Method Not Allowed',
							406	=> 'Not Acceptable',
							407	=> 'Proxy Authentication Required',
							408	=> 'Request Timeout',
							409	=> 'Conflict',
							410	=> 'Gone',
							411	=> 'Length Required',
							412	=> 'Precondition Failed',
							413	=> 'Request Entity Too Large',
							414	=> 'Request-URI Too Long',
							415	=> 'Unsupported Media Type',
							416	=> 'Requested Range Not Satisfiable',
							417	=> 'Expectation Failed',

							500	=> 'Internal Server Error',
							501	=> 'Not Implemented',
							502	=> 'Bad Gateway',
							503	=> 'Service Unavailable',
							504	=> 'Gateway Timeout',
							505	=> 'HTTP Version Not Supported'
						);

		if ($code == '' OR ! is_numeric($code))
		{
			show_error('Status codes must be numeric', 500);
		}

		if (isset($stati[$code]) AND $text == '')
		{
			$text = $stati[$code];
		}

		if ($text == '')
		{
			show_error('No status text available.  Please check your status code number or supply your own message text.', 500);
		}

		$server_protocol = (isset($_SERVER['SERVER_PROTOCOL'])) ? $_SERVER['SERVER_PROTOCOL'] : FALSE;

		if (substr(php_sapi_name(), 0, 3) == 'cgi')
		{
			header("Status: {$code} {$text}", TRUE);
		}
		elseif ($server_protocol == 'HTTP/1.1' OR $server_protocol == 'HTTP/1.0')
		{
			header($server_protocol." {$code} {$text}", TRUE, $code);
		}
		else
		{
			header("HTTP/1.1 {$code} {$text}", TRUE, $code);
		}
	}
}

// --------------------------------------------------------------------

/**
* Exception Handler
*
* This is the custom exception handler that is declaired at the top
* of Codeigniter.php.  The main reason we use this is to permit
* PHP errors to be logged in our own log files since the user may
* not have access to server logs. Since this function
* effectively intercepts PHP errors, however, we also need
* to display errors based on the current error_reporting level.
* We do that with the use of a PHP error template.
*
* @access	private
* @return	void
*/
if ( ! function_exists('_exception_handler'))
{
	function _exception_handler($severity, $message, $filepath, $line)
	{
		 // We don't bother with "strict" notices since they tend to fill up
		 // the log file with excess information that isn't normally very helpful.
		 // For example, if you are running PHP 5 and you use version 4 style
		 // class functions (without prefixes like "public", "private", etc.)
		 // you'll get notices telling you that these have been deprecated.
		if ($severity == E_STRICT)
		{
			return;
		}

		$_error =& load_class('Exceptions', 'core');

		// Should we display the error? We'll get the current error_reporting
		// level and add its bits with the severity bits to find out.
		if (($severity & error_reporting()) == $severity)
		{
			$_error->show_php_error($severity, $message, $filepath, $line);
		}

		// Should we log the error?  No?  We're done...
		if (config_item('log_threshold') == 0)
		{
			return;
		}

		$_error->log_exception($severity, $message, $filepath, $line);
	}
}

// --------------------------------------------------------------------

/**
 * Remove Invisible Characters
 *
 * This prevents sandwiching null characters
 * between ascii characters, like Java\0script.
 *
 * @access	public
 * @param	string
 * @return	string
 */
if ( ! function_exists('remove_invisible_characters'))
{
	function remove_invisible_characters($str, $url_encoded = TRUE)
	{
		$non_displayables = array();
		
		// every control character except newline (dec 10)
		// carriage return (dec 13), and horizontal tab (dec 09)
		
		if ($url_encoded)
		{
			$non_displayables[] = '/%0[0-8bcef]/';	// url encoded 00-08, 11, 12, 14, 15
			$non_displayables[] = '/%1[0-9a-f]/';	// url encoded 16-31
		}
		
		$non_displayables[] = '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]+/S';	// 00-08, 11, 12, 14-31, 127

		do
		{
			$str = preg_replace($non_displayables, '', $str, -1, $count);
		}
		while ($count);

		return $str;
	}
}

// ------------------------------------------------------------------------

/**
* Returns HTML escaped variable
*
* @access	public
* @param	mixed
* @return	mixed
*/
if ( ! function_exists('html_escape'))
{
	function html_escape($var)
	{
		if (is_array($var))
		{
			return array_map('html_escape', $var);
		}
		else
		{
			return htmlspecialchars($var, ENT_QUOTES, config_item('charset'));
		}
	}
}

//----------------------以下是本人扩展常用公共函数----------------------------

/**
 *description:获取客户端IP
 *author:liuguangping
 *date:2014/06/21
 */
if ( ! function_exists('getClientIp'))
{
   function getClientIp()
    {
        if (getenv ( "HTTP_CLIENT_IP" ) && strcasecmp ( getenv ( "HTTP_CLIENT_IP" ), "unknown" ))
            $ip = getenv ( "HTTP_CLIENT_IP" );
        else if (getenv ( "HTTP_X_FORWARDED_FOR" ) && strcasecmp ( getenv ( "HTTP_X_FORWARDED_FOR" ), "unknown" ))
            $ip = getenv ( "HTTP_X_FORWARDED_FOR" );
        else if (getenv ( "REMOTE_ADDR" ) && strcasecmp ( getenv ( "REMOTE_ADDR" ), "unknown" ))
            $ip = getenv ( "REMOTE_ADDR" );
        else if (isset ( $_SERVER ['REMOTE_ADDR'] ) && $_SERVER ['REMOTE_ADDR'] && strcasecmp ( $_SERVER ['REMOTE_ADDR'], "unknown" ))
            $ip = $_SERVER ['REMOTE_ADDR'];
        else
            $ip = "unknown";
        return ($ip);
    }
}

/**
 *description:加载防sql注入类库
 *author:liuguangping
 *date:2014/01/07
 */
if ( ! function_exists('safeFilter'))
{
	function safeFilter()
	{
		loadLib("Safe_filter");
	}
}

/**
 * @abstract 生成随机平台编码
 * @author liuguangping
 * @version 2013/12/28
 * @return String
 */

if ( ! function_exists('randcode'))
{
	function randcode($length)
	{
		$hash = '';  
	    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';  
	    $max = strlen($chars) - 1;  
	    PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);  
	    for($i = 0; $i < $length; $i++) {  
	        $hash .= $chars[mt_rand(0, $max)];  
	    }  
  		return $hash;  

	}
}

/**
 * @abstract 生成随机平台编码
 * @author liuguangping
 * @version 2013/3/25
 * @return String
 */

if ( ! function_exists('jumpAjax'))
{
	function jumpAjax($message,$url)
	{
		if($message && $url){
			echo "<script type='text/javascript'>alert('".$message."');window.location.href='".$url."'</script>";exit;
		}elseif(!$message && $url){
			echo "<script type='text/javascript'>window.location.href='".$url."'</script>";exit;
		}elseif($message && !$url){
			echo "<script type='text/javascript'>alert('".$message."');</script>";exit;
		}else{
			return true;
		}

	}
}

/**
 *description:递归删除非空目录
 *author:liuguangping
 *date:2013/12/16
 */
function removeDir($dirName)
{
	if(! is_dir($dirName))
	{
		return false;
	}
	$handle = @opendir($dirName);
	while(($file = @readdir($handle)) !== false)
	{
		if($file != '.' && $file != '..')
		{
			$dir = $dirName . '/' . $file;
			is_dir($dir) ? removeDir($dir) : @unlink($dir);
		}
	}
	closedir($handle);

	return rmdir($dirName) ;
} 


/**
 *description:实例化model
 *author:liuguangping
 *date:2013/08/12
 */
if ( ! function_exists('M'))
{
	function M($tablename)
	{
		$CI = &get_instance();
		$modelname = $tablename."_model";
		$CI->load->model($modelname);
		$model= $CI->$modelname;
		return $model;
	}
}

/**
 *description:获取配置信息内容
 *author:liuguangping
 *date:2014/05/15
 */
if ( ! function_exists('C'))
{
    function C($configName='',$item='')
    {

        if(!$configName) return $config = & get_config();
        // Is the config file in the environment folder?
        if ( ! defined('ENVIRONMENT') OR ! file_exists($file_path = APPPATH.'config/'.ENVIRONMENT."/{$configName}.php"))
        {
            $file_path = APPPATH."config/{$configName}.php";
        }

        // Fetch the config file
        if ( ! file_exists($file_path))
        {
            exit('The configuration file does not exist.');
        }

        require($file_path);

        // Does the $config array exist in the file?
        if ( ! isset($config) OR ! is_array($config))
        {
            exit('Your config file does not appear to be formatted correctly.');
        }

        if($item){
            return $config[$item];
        }else{
             return $config;
        }

        
    }
}

/**
 *description:获取语言配置信息内容
 *author:liuguangping
 *date:2014/05/15
 */
if ( ! function_exists('L'))
{
    function L($filename='',$language_key='',$language='english')
    {

    	$CI = &get_instance();
		$CI->lang->load($filename, $language);
		if(!$language_key){

			exit('请传入值！');
		}
		$lang = $CI->lang->line($language_key);
		return $lang;
        
    }
}

/**
 *description:获取地址信息
 *author:liuguangping
 *date:2014/05/15
 */
if ( ! function_exists('U'))
{
    function U($url='',$array=array())
    {
        $CI = &get_instance();
        $CI->load->helper('url');
       // Does the $config array exist in the file?
        if($url){
            if(empty($array)){
                return site_url($url);
            }else{
                if(is_array($array)){
                    $explode = array();
                    foreach ($array as $key => $value) {
                       $explode[] = $key.'='.$value;
                    }
                    $implode = implode('&', $explode);
                    return site_url($url)."?".$implode;
                }else{
                   return site_url($url);
                }
            }
        }else{
            return site_url();
        }
    }
}

/**
 *description:根据二维数组某个索引值进行排序
 *author:liuguangping
 *date:2013/08/28
 */
if(!function_exists('arraysort'))
{
	function arraysort(&$array, $key_name, $sort_order = 'SORT_ASC', $sort_type = 'SORT_REGULAR') {
		if (!is_array($array)) {
			return $array;
		}
		$arg_count = func_num_args();
		for ($i = 1; $i < $arg_count; $i++) {
			$arg = func_get_arg($i);
			if (!preg_match('/SORT/', $arg)) {
				$key_name_list[] = $arg;
				$sort_rule[] = '$'.$arg;
			} else {
				$sort_rule[] = $arg;
			}
		}
		foreach ($array as $key => $info) {
			foreach ($key_name_list as $key_name) {
				${$key_name}[$key] = $info[$key_name];
			}
		}
		$eval_str = 'array_multisort('.implode(',', $sort_rule).', $array);';
		eval($eval_str);
		return $array;
	}
}


/**
* 对查询结果集进行排序
* @access public
* @param array $list 查询结果
* @param string $field 排序的字段名
* @param array $sortby 排序类型
* asc正向排序 desc逆向排序 nat自然排序
* @return array
*/
if(!function_exists('list_sort_by'))
{
	function list_sort_by($list,$field, $sortby='asc') {
	   if(is_array($list)){
	       $refer = $resultSet = array();
	       foreach ($list as $i => $data)
	           $refer[$i] = &$data[$field];
	       switch ($sortby) {
	           case 'asc': // 正向排序
	                asort($refer);
	                break;
	           case 'desc':// 逆向排序
	                arsort($refer);
	                break;
	           case 'nat': // 自然排序
	                natcasesort($refer);
	                break;
	       }
	       foreach ( $refer as $key=> $val)
	           $resultSet[] = &$list[$key];
	       return $resultSet;
	   }
	   return false;
	}
}


/**
 *description:json返回
 *author:liuguangping
 *param:$flag 0：数据结果为空或执行失败等,1：执行成功或存在相应数据，message:消息说明
 *date:2013/09/16
 */
if(!function_exists('echojson'))
{
	function echojson($state,$data,$msg="") {
		echo "{".'"state":'.intval($state).",".'"data"'.":".json_encode($data).",".'"msg"'.":".json_encode($msg)."}";exit;
	}
}

/**
 *description: 加载类包并实例化
 *author:liuguangping
 *param:libName:类包名
 *date:2013/11/01
 */
if(!function_exists('loadLib'))
{
	function loadLib($libName){
		require_once "application/libraries/$libName.php";
	}
}

/**
 *description:前端加载静态文件
 *author:liuguangping
 *date:2013/11/27
 */
if(!function_exists('loadStatic'))
{
	function loadStatic($url){
		echo "/static".$url;
	}
}

/**
 *description:前端加载静态文件
 *author:liuguangping
 *date:2013/11/27
 */
if(!function_exists('loadInclude'))
{
	function loadInclude($url){
		return require_once $_SERVER['DOCUMENT_ROOT']."/application/views".$url;
	}
}

/**
 *description:生成加密字符串
 *author:liuguangping
 *date:2014/10/29
 */
if(!function_exists('authcode'))
{
	function authcode($string, $operation, $key = '') {
		if($operation == 'DECODE'){	
			$string = str_replace('_','+', $string);
			$string = str_replace('-','/', $string);
		}
	        $key = md5($key ? $key : 'sadiuoiu82893hdjwwsdhjkh72sad3uh');
	        $key_length = strlen($key);

	        $string = $operation == 'DECODE' ? base64_decode($string) : substr(md5($string . $key), 0, 8) . $string;
	        $string_length = strlen($string);

	        $rndkey = $box = array();
	        $result = '';

	        for ($i = 0; $i <= 255; $i++) {
	            $rndkey[$i] = ord($key[$i % $key_length]);
	            $box[$i] = $i;
	        }

	        for ($j = $i = 0; $i < 256; $i++) {
	            $j = ($j + $box[$i] + $rndkey[$i]) % 256;
	            $tmp = $box[$i];
	            $box[$i] = $box[$j];
	            $box[$j] = $tmp;
	        }

	        for ($a = $j = $i = 0; $i < $string_length; $i++) {
	            $a = ($a + 1) % 256;
	            $j = ($j + $box[$a]) % 256;
	            $tmp = $box[$a];
	            $box[$a] = $box[$j];
	            $box[$j] = $tmp;
	            $result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
	        }

	        if ($operation == 'DECODE') {
	            if (substr($result, 0, 8) == substr(md5(substr($result, 8) . $key), 0, 8)) {
	                return substr($result, 8);
	            } else {
	                return '';
	            }
	        } else {
	            return str_replace(array('/','+','='), array('-','_',''), base64_encode($result));
	        }
	}
}

/**
 * 格式化字节大小
 * @param  number $size      字节数
 * @param  string $delimiter 数字和单位分隔符
 * @return string            格式化后的带单位的大小
 * @author 刘广平 <liuguangpingtest@163.com>
 */
if(!function_exists('format_bytes'))
{
	function format_bytes($size, $delimiter = '') {
	    $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
	    for ($i = 0; $size >= 1024 && $i < 5; $i++) $size /= 1024;
	    return round($size, 2) . $delimiter . $units[$i];
	}
}


/**
 * 系统加密方法
 * @param string $data 要加密的字符串
 * @param string $key  加密密钥
 * @param int $expire  过期时间 单位 秒
 * @return string
 * @author 刘广平 <liuguangpingtest@163.com>
 */
if(!function_exists('lgwx_encrypt'))
{
	function lgwx_encrypt($data, $key = '', $expire = 0) {
	    $key  = md5(empty($key) ? C('DATA_AUTH_KEY') : $key);
	    $data = base64_encode($data);
	    $x    = 0;
	    $len  = strlen($data);
	    $l    = strlen($key);
	    $char = '';

	    for ($i = 0; $i < $len; $i++) {
	        if ($x == $l) $x = 0;
	        $char .= substr($key, $x, 1);
	        $x++;
	    }

	    $str = sprintf('%010d', $expire ? $expire + time():0);

	    for ($i = 0; $i < $len; $i++) {
	        $str .= chr(ord(substr($data, $i, 1)) + (ord(substr($char, $i, 1)))%256);
	    }
	    return str_replace('=', '',base64_encode($str));
	}
}

/**
 * 系统解密方法
 * @param  string $data 要解密的字符串 （必须是think_encrypt方法加密的字符串）
 * @param  string $key  加密密钥
 * @return string
 * @author 刘广平 <liuguangpingtest@163.com>
 */
if(!function_exists('lgwx_decrypt'))
{
	function lgwx_decrypt($data, $key = ''){
	    $key    = md5(empty($key) ? C('DATA_AUTH_KEY') : $key);
	    $x      = 0;
	    $data   = base64_decode($data);
	    $expire = substr($data,0,10);
	    $data   = substr($data,10);

	    if($expire > 0 && $expire < time()) {
	        return '';
	    }

	    $len  = strlen($data);
	    $l    = strlen($key);
	    $char = $str = '';

	    for ($i = 0; $i < $len; $i++) {
	        if ($x == $l) $x = 0;
	        $char .= substr($key, $x, 1);
	        $x++;
	    }

	    for ($i = 0; $i < $len; $i++) {
	        if (ord(substr($data, $i, 1))<ord(substr($char, $i, 1))) {
	            $str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
	        }else{
	            $str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
	        }
	    }
	    return base64_decode($str);
	}
}
/**
 * 数据签名认证
 * @param  array  $data 被认证的数据
 * @return string       签名
 * @author 刘广平 <liuguangpingtest@163.com>
 */
if(!function_exists('data_auth_sign'))
{
	function data_auth_sign($data) {
	    //数据类型检测
	    if(!is_array($data)){
	        $data = (array)$data;
	    }
	    ksort($data); //排序
	    $code = http_build_query($data); //url编码并生成query字符串
	    $sign = sha1($code); //生成签名
	    return $sign;
	}
}

/**
 * 字符串全角半角字符转换 utf-8
 * @author liuguangping
 * @param house_id
 * @return boolean
 */
if(!function_exists('UtfToString'))
{
	function UtfToString($string){

		$string = iconv('UTF-8', 'GB2312//IGNORE', $string);
		$string = iconv('GB2312', 'UTF-8//IGNORE', $string);
		return $string;
	}
}

// ------------------------------------------------------------------------

/**
 * @mes 内容
 * @ulr 地址
 * $ulr = 'http://localhost:8080/curl_ini/upload.php'
 * @author liuguangping
 * @date：2013/10/8 
*/
if(!function_exists('write_dary'))
{
	function write_dary($mes,$ulr=''){
		$CI = &get_instance();
		$CI->config->load('uploads');
		$upload_url = $CI->config->item('upload_file');
		if(empty($ulr)) $ulr = $upload_url['error_url'];
		$sta = 0;
		$maxsta = 100;
	
		$handle = @fopen($ulr,'a+');
	
		do{
			if($sta>0){
				usleep(rand(1000,5000));
			}
			$sta++;
	
		} while(!@flock($handle,LOCK_EX) && $sta<=$maxsta);
		if($sta==$maxsta){
			return false;
		}
		$mesv = $mes."-----".date('Y-m-d H:i:s',time())."\r\n";
		@fwrite($handle,$mesv);
		@flock($handle, LOCK_UN);
		@fclose($handle);
		return true;
	}
}


/**
 * @mes 内容输出
 * @ulr 地址
 * $ulr = 'http://localhost:8080/curl_ini/upload.php'
 * @author liuguangping
 * @date：2013/10/8
 */
if(!function_exists('read_dary'))
{
	function read_dary($url=''){
		$result = array();
		$CI = &get_instance();
		$CI->config->load('uploads');
		$upload_url = $CI->config->item('upload_file');
		if(empty($url)) $url = $upload_url['error_url'];
		$handle = @fopen($url,'r');
		while (!@feof($handle)){
			$result[] = @fgets($handle, 4096);
		}
		@fclose($handle);
		return $result;
	}
}

/**
 *  多目录创建
 *
 */
if(!function_exists('mkdirs'))
{
	function mkdirs($dir)
	{
		if(!is_dir($dir))
		{
			if(!mkdirs(dirname($dir))){
				
				return false;
			}
			if(!mkdir($dir,0777)){
				return false;
			}
		}
		return true;
	}
}

/**
 * 截取URL的文件后缀
 */
if(!function_exists('setExt'))
{
	function setExt($filename) {
		return strtolower(trim(substr(strrchr($filename, '.'), 1)));
	}
}

/**
 * 把gb2312 轮换成utf-8
 */
if(!function_exists('convertUTF8'))
{
	function convertUTF8($str){
		if(empty($str)) return '';
		return  iconv("gb2312","utf-8", $str);
	}
}



/**
 * PHP 截取中文字符
 * @author liuguangping
 * echo cn_substr_utf8($cc,65)
 */
if(!function_exists('cn_substr_utf8')){
	function cn_substr_utf8($str, $start, $len , $flg=false)
	{
		$strlen = $start + $len; // 用$strlen存储字符串的总长度，即从字符串的起始位置到字符串的总长度
		$tmpstr = '';
		for($i = $start; $i < $strlen;) {
			if (ord ( substr ( $str, $i, 1 ) ) > 0xa0) { // 如果字符串中首个字节的ASCII序数值大于0xa0,则表示汉字
				$tmpstr .= substr ( $str, $i, 3 ); // 每次取出三位字符赋给变量$tmpstr，即等于一个汉字
				$i=$i+3; // 变量自加3
			} else{
				$tmpstr .= substr ( $str, $i, 1 ); // 如果不是汉字，则每次取出一位字符赋给变量$tmpstr
				$i++;
			}
		}
		
		if($flg){
			if(strlen($tmpstr)<=strlen($str))
				$tmpstr.="...";
		}
		return $tmpstr; // 返回字符串
		
	}
			
}


/**
 * UTF8字符串长度
 * @author liuguangping
 * 一个字符全部按 1 个长度计算
 * $str = "PHP测试";  
 * echo strlen_utf8($str);  
 */
if(!function_exists('strlen_utf8')){
	function strlen_utf8($str) {  
		$i = 0;  
		$count = 0;  
		$len = strlen ($str);  
		while ($i < $len) {  
			$chr = ord ($str[$i]);  
			$count++;  
			$i++;  
			if($i >= $len) break;  
			if($chr & 0x80) {  
				$chr <<= 1;  
				while ($chr & 0x80) {  
					$i++;  
					$chr <<= 1;  
				}  
			}  
		}  
		return $count;  
	}		
}

/**
 * GBK字符串长度 
 * @author liuguangping
 * GBK字符串长度  
 * 中文字符计算为2个字符，英文字符计算为1个，可以统计中文字符串长度的函数
 * $str = "PHP测试";  
 * echo abslength($str);  
 */
if(!function_exists('abslength')){
	function abslength($str){  
		$len=strlen($str);  
		$i=0;  
		while($i<$len){  
	       if(preg_match("/^[".chr(0xa1)."-".chr(0xff)."]+$/",$str[$i])){  
	         $i+=2;  
	       }else{  
	         $i+=1;  
	       }  
		}  
		return $i;  
	}     
}
/**
 * UTF8字符串所占的字节数 
 * @author liuguangping
 * echo stringLen_utf8($str);  
 */
if(!function_exists('stringLen_utf8')){
	function stringLen_utf8($str){
		if(!$str) return '';
		return (strlen($str) + mb_strlen($str,'UTF8')) / 2;
	}
}

/**
 * @参数 arrs 二维数组
 * @键值 keys 要得到的一个字段值做键名一个字段傎做值
 * @return 以键值为建的一维数组
 * @author liuguangping
 * @date：2013/10/8
 */
if(!function_exists('twoToOneBykey'))
{
	function twoToOneBykey($arrs,$keys,$arraykey){
		$ar = array();
		foreach ($arrs as $ke=>$va){
			foreach ($va as $kes=>$vals){
				if($kes == $keys){
					$ar[$va[$arraykey]] = $vals;
				}
			}
		}
		return $ar;
	}
}

/**
 * @参数 arrs 二维数组
 * @键值 keys 要得到的一个字段值做键名一个字段傎做值
 * @return 以键值为建的一维数组
 * @author liuguangping
 * @date：2013/10/8
 */
if(!function_exists('twoToOneBykeyObj'))
{
	function twoToOneBykeyObj($arrs,$keys,$arraykey){
		
		$ar = array();
		foreach ($arrs as $ke=>$va){
			
			foreach ($va as $kes=>$vals){
				if($kes == $keys){
					$ar[$va->$arraykey] = $vals;
				}
			}
		}
		return $ar;
	}
}

// URL重定向
if(!function_exists('redirect'))
{
	function redirect($url, $time=0, $msg='') {
	    //多行URL地址支持
	    $url = str_replace(array("\n", "\r"), '', $url);
	    if (empty($msg))
	        $msg = "系统将在{$time}秒之后自动跳转到{$url}！";
	    if (!headers_sent()) {
	        // redirect
	        if (0 === $time) {
	            header('Location: ' . $url);
	        } else {
	            header("refresh:{$time};url={$url}");
	            echo($msg);
	        }
	        exit();
	    } else {
	        $str = "<meta http-equiv='Refresh' content='{$time};URL={$url}'>";
	        if ($time != 0)
	            $str .= $msg;
	        exit($str);
	    }
	}
}

if(!function_exists('send_http_status'))
{
	function send_http_status($code) {
	    static $_status = array(
	        // Success 2xx
	        200 => 'OK',
	        // Redirection 3xx
	        301 => 'Moved Permanently',
	        302 => 'Moved Temporarily ',  // 1.1
	        // Client Error 4xx
	        400 => 'Bad Request',
	        403 => 'Forbidden',
	        404 => 'Not Found',
	        // Server Error 5xx
	        500 => 'Internal Server Error',
	        503 => 'Service Unavailable',
	    );
	    if(isset($_status[$code])) {
	        header('HTTP/1.1 '.$code.' '.$_status[$code]);
	        // 确保FastCGI模式下正常
	        header('Status:'.$code.' '.$_status[$code]);
	    }
	}
}
/* End of file Common.php */
/* Location: ./system/core/Common.php */