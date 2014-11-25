<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller{
	
	function __construct()
	{

		session_start();
		parent::__construct();
        header('Content-type:text/html;charset=utf8');
		$this->load->library('sm');

	}



	public function assign($key,$data=array()){
		if($key&&$data){
		
			$this->sm->assign($key,$data);
		}
		if($key && !$data){
			$this->sm->assign($key);
		}
		if(!$key&&!$data){
			$this->sm->assign();
		}
	}

	/**
     * view的调用
     * @author liuguangping
     *
     * @return  void
     * **/
	public function display($template,$data=array()){
		$view = $this->C('view','tpgy');
		if($template&&$data){
			$this->sm->assign($data);
			if(substr($view[$template],0,1) == '/'){
				$view[$template] = substr($view[$template], strpos($view[$template], '/')+1);
			}
			$this->sm->display($view[$template] . '.html');  //模板后缀名
		}else{

			$this->sm->display($view[$template] . '.html');  //模板后缀名
		}
	}

	 /**
     * model的调用
     * @author liuguangping
     *
     * @param  string $tablename
     *
     * @return object $model
     * **/
    public function M($tableName)
    {
        if(!$tableName){
            exit('请求的表名不能为空');
        }
        $modelName = $tableName.'_model';
        $this->load->model($modelName);
        $model = $this->$modelName;
        return $model;
    }

     /**
     * Config的调用
     * @author liuguangping
     *
     * @param  string $configName 配置文件名
     * @param  string $item 配置元素
     * @param  string $pamrsOne 
     * @param  string $pamrsTwo
     *
     * @return array $config 
     * **/
    public function C( $configName='',$item='',$pamrsOne=FALSE,$pamrsTwo=TRUE )
    {

        if(!isset($configName)){
            exit('配制文件名不能空！');
        }
        $this->config->load($configName,$pamrsOne,$pamrsTwo);
        if($item){
            $config = $this->config->item($item);
        }else{
            exit('配置元素不能空！');
        }

        return $config;
    }

    /**
     * libraries的调用
     * @author liuguangping
     *
     * @param  string $class_name 类文件
     *
     * @return object $lib
     * **/
    public function loadLib( $class_name )
    {
        if(!$class_name){
            exit('类文件不能空！');
        }
        $this->load->library( $class_name );
        $lib = $this->$class_name;

        return $lib;
    }

    /**
     * view的调用
     * @author liuguangping
     *
     * @param  string $viewName 视图文件
     *
     * @return  void
     * **/
    public function V( $viewName,$data=null )
    {
        if(!$viewName){
            exit('视图文件不能空！');
        }
        $viewName = $viewName.'.html';
        if($data){
            $this->load->view ( $viewName, $data );
         }else{
            $this->load->view ( $viewName );
         }
    }

     /**
     +----------------------------------------------------------
     * 操作错误跳转的快捷方法
     +----------------------------------------------------------
     * @access protected
     +----------------------------------------------------------
     * @param string $message 错误信息
     * @param string $jumpUrl 页面跳转地址
     * @param Boolean $ajax 是否为Ajax方式
     +----------------------------------------------------------
     * @return void
     +----------------------------------------------------------
     */
    protected function error($message,$jumpUrl='',$ajax=false) {
        $this->dispatchJump($message,0,$jumpUrl,$ajax);exit;
    }

    /**
     +----------------------------------------------------------
     * 操作成功跳转的快捷方法
     +----------------------------------------------------------
     * @access protected
     +----------------------------------------------------------
     * @param string $message 提示信息
     * @param string $jumpUrl 页面跳转地址
     * @param Boolean $ajax 是否为Ajax方式
     +----------------------------------------------------------
     * @return void
     +----------------------------------------------------------
     */
    protected function success($message,$jumpUrl='',$ajax=false) {
        $this->dispatchJump($message,1,$jumpUrl,$ajax);exit;
    }

    /**
     +----------------------------------------------------------
     * Ajax方式返回数据到客户端
     +----------------------------------------------------------
     * @access protected
     +----------------------------------------------------------
     * @param mixed $data 要返回的数据
     * @param String $info 提示信息
     * @param boolean $status 返回状态
     * @param String $status ajax返回类型 JSON XML
     +----------------------------------------------------------
     * @return void
     +----------------------------------------------------------
     */
    protected function ajaxReturn($data,$info='',$status=1,$type='') {
        $result  =  array();
        $result['status']  =  $status;
        $result['info'] =  $info;
        $result['data'] = $data;
        $C = C('common','convention');
        //扩展ajax返回数据, 在Action中定义function ajaxAssign(&$result){} 方法 扩展ajax返回数据。
        if(method_exists($this,'ajaxAssign')) 
            $this->ajaxAssign($result);
        if(empty($type)) $type  =   $C['DEFAULT_AJAX_RETURN'];
        if(strtoupper($type)=='JSON') {
            // 返回JSON数据格式到客户端 包含状态信息
            header('Content-Type:text/html; charset=utf-8');
            exit(json_encode($result));
        }elseif(strtoupper($type)=='XML'){
            // 返回xml格式数据
            header('Content-Type:text/xml; charset=utf-8');
            exit(xml_encode($result));
        }elseif(strtoupper($type)=='EVAL'){
            // 返回可执行的js脚本
            header('Content-Type:text/html; charset=utf-8');
            exit($data);
        }else{
            // TODO 增加其它格式
        }
    }

    /**
     +----------------------------------------------------------
     * Action跳转(URL重定向） 支持指定模块和延时跳转
     +----------------------------------------------------------
     * @access protected
     +----------------------------------------------------------
     * @param string $url 跳转的URL表达式
     * @param array $params 其它URL参数
     * @param integer $delay 延时跳转的时间 单位为秒
     * @param string $msg 跳转提示信息
     +----------------------------------------------------------
     * @return void
     +----------------------------------------------------------
     */
    protected function redirect($url,$params=array(),$delay=0,$msg='') {
        $url    =   U($url,$params);
        redirect($url,$delay,$msg);
    }

    /**
     +----------------------------------------------------------
     * 默认跳转操作 支持错误导向和正确跳转
     * 调用模板显示 默认为public目录下面的success页面
     * 提示页面为可配置 支持模板标签
     +----------------------------------------------------------
     * @param string $message 提示信息
     * @param Boolean $status 状态
     * @param string $jumpUrl 页面跳转地址
     * @param Boolean $ajax 是否为Ajax方式
     +----------------------------------------------------------
     * @access private
     +----------------------------------------------------------
     * @return void
     +----------------------------------------------------------
     */
    private function dispatchJump($message,$status=1,$jumpUrl='',$ajax=false,$closeWin=false) {

        $C = C('common','convention');
        // 判断是否为AJAX返回
        if($ajax) $this->ajaxReturn($ajax,$message,$status);
        if(!empty($jumpUrl)) $this->assign('jumpUrl',$jumpUrl);
        // 提示标题
        $this->assign('msgTitle',$status? L('zh-en','_OPERATION_SUCCESS_') : L('zh-en','_OPERATION_FAIL_'));
        //如果设置了关闭窗口，则提示完毕后自动关闭窗口
       /* if($this->view->get('closeWin'))    $this->assign('jumpUrl','javascript:window.close();');*/
        if($closeWin){
            $this->assign('jumpUrl','javascript:window.close();');
        }

        $this->assign('closeWin',$closeWin);
        $this->assign('status',$status);   // 状态
        //保证输出不受静态缓存影响
        /*C('HTML_CACHE_ON',false);*/
        if($status) { //发送成功信息
            $this->assign('message',$message);// 提示信息
            // 成功操作后默认停留1秒
           /* if(!$C('waitSecond'))    $this->assign('waitSecond','1');*/
            $this->assign('waitSecond',$C['waitSecond']);
            // 默认操作成功自动返回操作前页面
            /*if(!$this->view->get('jumpUrl')) $this->assign("jumpUrl",$_SERVER["HTTP_REFERER"]);*/
           // echo "<pre>";var_dump($_SERVER["HTTP_REFERER"]);die;
            if(!$jumpUrl) $this->assign("jumpUrl",$_SERVER["HTTP_REFERER"]);
            $this->display($C['TMPL_ACTION_SUCCESS']);
        }else{
            $this->assign('error',$message);// 提示信息
            //发生错误时候默认停留3秒
           /* if(!$this->view->get('waitSecond'))    $this->assign('waitSecond','3');*/
            $this->assign('waitSecond',$C['waitSecond']);
            // 默认发生错误的话自动返回上页
           /* if(!$this->view->get('jumpUrl')) $this->assign('jumpUrl',"javascript:history.back(-1);");*/
            if(!$jumpUrl) $this->assign("jumpUrl","javascript:history.back(-1);");
            $this->display($C['TMPL_ACTION_ERROR']);
            // 中止执行  避免出错后继续执行
            exit ;
        }
    }

}

//前台
class ForeController extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->loadForeMenu();
    }

    public function loadForeMenu(){
        $this->load->helper('url');
        $uri_string = uri_string();
        loadLib('NavMenu');
        loadLib('Recursive');
        NavMenu::$type = 'fore';
        $recursiveObj = Recursive::getInstance();
        $obj = NavMenu::createObj();
        if( $obj ){
            $menu = $obj->getForeMenu();
            $newArray = array();
            $recursiveObj->arrayController($menu['result'],0,$newArray);
            $newMemu = array();
            foreach($newArray as $key=>$value){

                if( $value['showtype'] == 2 || $value['showtype'] == 3 ){
                    $newMemu['bottomMenu'][] = $value;
                }

                if( $value['showtype'] == 1 || $value['showtype'] == 3 ){
                    $findString = $value['aenname'];
                    if(stripos($uri_string,$findString) === false){
                       $value['active'] = '';
                    }else{
                        $value['active'] = 'active';
                    }
                    $newMemu['topMenu'][] = $value;

                    //这个是加载儿子中的bottomMenu
                    if(isset($value['children']) && $value['children']){
                        foreach ($value['children'] as $childkey => $childvalue) {
                           if( $childvalue['showtype'] == 2 || $childvalue['showtype'] == 3 ){
                                $newMemu['bottomMenu'][] = $childvalue;
                           }
                        }
                    }
                }
            }
            $newMemu['bottomCount'] = count($newMemu['bottomMenu'])-1;
            $this->assign('menu',$newMemu);
        }
        
    }

    public function loadTree(){
        loadLib('NavMenu');
        loadLib('Recursive');
        NavMenu::$type = 'fore';
        $recursiveObj = Recursive::getInstance();
        $obj = NavMenu::createObj();
        if( $obj ){
            $menu = $obj->getForeMenu();
            $newArray = array();
            $recursiveObj->tree($menu['result'],0,$newArray);
            echo "<pre>";
            var_dump($newArray);
        }
    }

    //检查是否登录
    public function checklogin(){

        $user_id = isset($_COOKIE['user_id'])?$_COOKIE['user_id']:'';
        $user_nickname = isset($_COOKIE['user_nickname'])?$_COOKIE['user_nickname']:'';
        $user_email = isset($_COOKIE['user_email'])?$_COOKIE['user_email']:'';
        $remeber = isset($_COOKIE['remeber'])?$_COOKIE['remeber']:'';
        $user_name = isset($_COOKIE['user_name'])?$_COOKIE['user_name']:'';
        $user_email = isset($_COOKIE['user_email'])?$_COOKIE['user_email']:'';
        $user_status = isset($_COOKIE['user_status'])?$_COOKIE['user_status']:'';
        $user_type = isset($_COOKIE['user_type'])?$_COOKIE['user_type']:'';



        $_SESSION['user_id'] = (isset($_SESSION['user_id'])&&$_SESSION['user_id']!='')?$_SESSION['user_id']:$user_id;
        $_SESSION['user_email'] = (isset($_SESSION['user_email'])&&$_SESSION['user_email']!='')?$_SESSION['user_email']:$user_email;
        $_SESSION['user_nickname'] = (isset($_SESSION['user_nickname'])&&$_SESSION['user_nickname']!='')?$_SESSION['user_nickname']:$user_nickname;
        $_SESSION['user_name'] = (isset($_SESSION['user_name'])&&$_SESSION['user_name']!='')?$_SESSION['user_name']:$user_name;
        $_SESSION['user_phone'] = (isset($_SESSION['user_phone'])&&$_SESSION['user_phone']!='')?$_SESSION['user_phone']:$user_phone;
        $_SESSION['user_status'] = (isset($_SESSION['user_status'])&&$_SESSION['user_status']!='')?$_SESSION['user_status']:$user_status;
        $_SESSION['user_type'] = (isset($_SESSION['user_type'])&&$_SESSION['user_type']!='')?$_SESSION['user_type']:$user_type;
        $_SESSION['remeber'] = (isset($_SESSION['remeber'])&&$_SESSION['remeber']!='')?$_SESSION['remeber']:$remeber;

        //$curentUrl = $_SERVER['PHP_SELF'];
        if(!isset($_SESSION['user_id'])||$_SESSION['user_id']==''||!isset($_SESSION['user_email'])||$_SESSION['user_email']==''||!isset($_SESSION['user_phone'])||$_SESSION['user_phone']==''){

            $url = C('url','url');
            $url = $url['login']; //跳入登录页面
            header("Location:$url");exit;
        }
    }
}


//验证登录的控制器
class SignUpController extends ForeController{

    public function __construct(){
        parent::__construct();
        parent::checklogin();
    }

}