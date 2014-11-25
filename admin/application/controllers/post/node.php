<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *description:节点post提交控制器
 *author:liuguangping
 *date:2014/10/29
 */
class Node extends SignUpAjaxController {

	public function __construct(){
		parent::__construct();
	}
	
	//节点状态修改 1是否隐藏 2是否可见
	public function foreNodeStatus()
	{
		//测试数据
		$aid = $this->input->post('aid',true);
		$type = $this->input->post('type',true);

		if(!$aid || !$type){

			echojson('50005','请正确传参数！','请正确传参数！');
		}

		loadLib('Status');
		Status::$type = 'arctype';
		$obj = Status::createObj();
		$obj->type = $type;
		$obj->aid = $aid;
		if($obj){
			$obj->status();
		}else{
			echojson('50000','获取登录对象失败！','获取登录对象失败！');
		}

	}

	public function delForeNode(){

	    //测试数据
		$ids = $this->input->post('ids',true);
		$model = M('t_arctype');
		if($ids){
			$result = $model->getOne('t_arctype','aid',array('pid'=>$ids));
			if($result){
				echojson('50005','该项下有子集，不能删除！','该项下有子集，不能删除！');
			}else{

				if($model->delete($ids)){
					echojson('20000','删除成功！','删除成功！');
				}else{
					echojson('50005','删除失败！','删除失败！');
				}
			}
		}else{
			echojson('50005','获取节点id失败！','获取节点id失败！');
		}

	}

	//节点状态修改 1是否隐藏 2是否可见
	public function backNodeStatus()
	{
		//测试数据
		$nid = $this->input->post('nid',true);
		$type = $this->input->post('type',true);

		if(!$nid || !$type){

			echojson('50005','请正确传参数！','请正确传参数！');
		}

		loadLib('Status');
		Status::$type = 'arctype';
		$obj = Status::createObj();
		$obj->type = $type;
		$obj->aid = $nid;
		if($obj){
			$obj->backIsHiden();
		}else{
			echojson('50000','获取登录对象失败！','获取登录对象失败！');
		}

	}

	public function delBackNode(){

	    //测试数据
		$ids = $this->input->post('ids',true);
		$model = M('t_navigationmenu');
		if($ids){
			$result = $model->getOne('t_navigationmenu','nid',array('pid'=>$ids));
			if($result){
				echojson('50005','该项下有子集，不能删除！','该项下有子集，不能删除！');
			}else{

				if($model->delete($ids)){
					echojson('20000','删除成功！','删除成功！');
				}else{
					echojson('50005','删除失败！','删除失败！');
				}
			}
		}else{
			echojson('50005','获取节点id失败！','获取节点id失败！');
		}

	}

	
}

