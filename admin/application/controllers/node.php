<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Node extends SignUpController {

	public function __construct(){

		parent::__construct();
		$this->seoMes('太平公益','太平公益');
	}

	/**
	 * 首页节点菜单
	 * @author liuguangping
	 * @version 2014/10/24
	 */
	public function fore()
	{
		$_SESSION['admin_preUrl'] = $_SERVER['PHP_SELF'];
		//取得前台节点数据
		loadLib('NavMenu');
        loadLib('Recursive');
        NavMenu::$type = 'fore';
        $recursiveObj = Recursive::getInstance();
        $obj = NavMenu::createObj();
        $newArray = array();
        if( $obj ){
        	$menu = $obj->getMenuList();
            $recursiveObj->tree($menu['result'],0,$newArray);
        }
        $url = C('url','url');
        $array['addForeNode'] = $url['addForeNode'];
        $array['delForeNode'] = $url['delForeNode'];
        $array['editForeNode'] = $url['editForeNode'];
        $array['foreNodeStatus'] = $url['foreNodeStatus'];
        $this->assign($array);
        $this->assign('html','');
        $this->assign('data',$newArray);
        //echo "<pre>";var_dump($newArray);die;
		$this->display('fore');
	}

	//添加,编辑前台菜单显示
	public function editAddForeNode(){
		safeFilter();//防sql注入
		$aid = $this->input->get_post('aid',true);
		$type = 'add';
		if($aid){
			//编辑查取数据
			$where['aid'] = $aid;
			$result = M('t_arctype')->getOne('t_arctype','*',$where);
			$this->assign($result);
			$type = 'edit';
		}
		//取得前台节点数据
		loadLib('NavMenu');
        loadLib('Recursive');
        NavMenu::$type = 'fore';
        $recursiveObj = Recursive::getInstance();
        $obj = NavMenu::createObj();
        $newArray = array();
        if( $obj ){
        	$menu = $obj->getMenuList();
            $recursiveObj->tree($menu['result'],0,$newArray);
        }

		//echo '<pre>';var_dump($result);die;
		$dourl = C('url','url');
		$this->assign('dourl',$dourl['doAddEditNode']);
		$this->assign('data',$newArray);
		$typeCatetory = array(
				'0'=>'个人',
				'1'=>'团体',
				'2'=>'太平公益',
			);
		$this->assign('typeCatetory',$typeCatetory);
		$this->assign('aid',$aid);
		$this->assign('types',$type);
		$this->display('fore_edit_add');
	}

	public function doAddEditNode(){
		
		$where['aid'] = $this->input->post('aid',true);
		$data['pid'] = $this->input->post('pid',true);
		$data['aname'] = $this->input->post('aname',true);
		$data['aenname'] = $this->input->post('aenname',true);
		$data['defaultname'] = $this->input->post('defaultname',true);

		$data['ishidden'] = $this->input->post('ishidden',true);
		$data['target'] = $this->input->post('target',true);
		$data['showtype'] = $this->input->post('showtype',true);
		$data['type'] = $this->input->post('type',true);

		$data['guest'] = $this->input->post('guest',true);
		$data['keywords'] = $this->input->post('keywords',true);
		$data['islink'] = $this->input->post('islink',true);
		$data['link'] = $this->input->post('link',true);
		$data['sx'] = $this->input->post('sx',true);
		$url = C('url','url');
		$successUrl = $url['fore'];
		$errorUrl = $url['editForeNode'];
		if(!$where['aid']){
			$data['ctime'] = date('Y-m-d H:i:s');
		}else{
			$errorUrl = $errorUrl.$where['aid'];
		}
		if(!is_numeric($data['sx'])) $this->error('排序只能为数字!',$newurl);

		$model = M('t_arctype');
		$tablename = 't_arctype';

		if(!$where['aid']){
			$num = $model->addContents($tablename,$data);
		}else{
			$num = $model->editContents($where,$data,$tablename);
		}
		
		if($num){
			$this->success('操作成功!',$successUrl);
		}else{
			$this->error('操作失败!',$errorUrl);
		}
	}

	//后台数据
	public function back(){
		$_SESSION['admin_preUrl'] = $_SERVER['PHP_SELF'];
		//取得后台节点数据
		loadLib('NavMenu');
        loadLib('Recursive');
        NavMenu::$type = 'back';
        $recursiveObj = Recursive::getInstance();
        $obj = NavMenu::createObj();
        $newArray = array();
        if( $obj ){
        	$menu = $obj->getMenuList();
            $recursiveObj->tree($menu['result'],0,$newArray,0,'++++','nid','module_name');
        }
        $url = C('url','url');
        $array['addBackNode'] = $url['addBackNode'];
        $array['delBackNode'] = $url['delBackNode'];
        $array['editBackNode'] = $url['editBackNode'];
        $array['backNodeStatus'] = $url['backNodeStatus'];
        $this->assign($array);
        $this->assign('html','');
        $this->assign('data',$newArray);
        //echo "<pre>";var_dump($newArray);die;
		$this->display('back');
	}

	//添加,编辑后台菜单显示
	public function editAddBackNode(){
		safeFilter();//防sql注入
		$nid = $this->input->get_post('nid',true);
		$type = 'add';
		if($nid){
			//编辑查取数据
			$where['nid'] = $nid;
			$result = M('t_navigationmenu')->getOne('t_navigationmenu','*',$where);
			$this->assign($result);
			$type = 'edit';
		}
		//取得后台节点数据
		loadLib('NavMenu');
        loadLib('Recursive');
        NavMenu::$type = 'back';
        $recursiveObj = Recursive::getInstance();
        $obj = NavMenu::createObj();
        $newArray = array();
        if( $obj ){
        	$menu = $obj->getMenuList();
           $recursiveObj->tree($menu['result'],0,$newArray,0,'++++','nid','module_name');
        }

		//echo '<pre>';var_dump($result);die;
		$dourl = C('url','url');
		$this->assign('dourl',$dourl['doAddEditBackNode']);
		$this->assign('data',$newArray);
		$this->assign('nid',$nid);
		$this->assign('types',$type);
		$this->display('back_edit_add');
	}

	public function doAddEditBackNode(){
		
		$where['nid'] = $this->input->post('nid',true);
		$data['pid'] = $this->input->post('pid',true);
		$data['module_name'] = $this->input->post('module_name',true);
		$data['module'] = $this->input->post('module',true);
		$data['action_name'] = $this->input->post('action_name',true);
		$data['action'] = $this->input->post('action',true);

		$data['ishidden'] = $this->input->post('ishidden',true);
		$data['target'] = $this->input->post('target',true);
		
		$data['ico'] = $this->input->post('ico',true);
		$data['is_app_navi'] = $this->input->post('is_app_navi',true);
		$data['url'] = $this->input->post('url',true);
		$data['sort'] = $this->input->post('sort',true);
		$url = C('url','url');
		if(!$where['nid']){
			$newurl = $url['back'];
			$data['ctime'] = date('Y-m-d H:i:s');
		}else{
			$newurl = $url['editBackNode'].$where['nid'];
		}
		if(!is_numeric($data['sort'])) $this->error('排序只能为数字!',$newurl);

		$model = M('t_navigationmenu');
		$tablename = 't_navigationmenu';

		if(!$where['nid']){
			$num = $model->addContents($tablename,$data);
		}else{
			$num = $model->editContents($where,$data,$tablename);
		}
	
		if($num){
			$this->success('操作成功!',$newurl);
		}else{
			$this->error('操作失败!',$newurl);
		}
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */