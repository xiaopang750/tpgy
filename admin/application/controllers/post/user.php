<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *description:节点post提交控制器
 *author:liuguangping
 *date:2014/10/29
 */
class User extends SignUpAjaxController {

	public function __construct(){
		parent::__construct();
	}
	
	//用户审核
	public function doAuth()
	{
		//测试数据
		$uid = $this->input->post('uid',true);
		$state = $this->input->post('status',true);

		if(!isset($state) || !$uid){

			echojson('50005','请正确传参数！','请正确传参数！');
		}

		loadLib('Status');
		Status::$type = 'user';
		$obj = Status::createObj();
		$obj->state = $state;
		$obj->uid = $uid;
		if($obj){
			$obj->status();
		}else{
			echojson('50000','获取登录对象失败！','获取登录对象失败！');
		}

	}

	//用户分组
	public function doAuthUserGroup(){
		//测试数据
		$uid = $this->input->post('uid',true);
		$state = $this->input->post('status',true);

		if(!isset($state) || !$uid){

			echojson('50005','请正确传参数！','请正确传参数！');
		}
		loadLib('Status');
		Status::$type = 'user';
		$obj = Status::createObj();
		$obj->state = $state;
		$obj->uid = $uid;
		if($obj){
			$obj->userGroup();
		}else{
			echojson('50000','获取登录对象失败！','获取登录对象失败！');
		}
	}

	//用户删除
	public function delUser(){
		//测试数据
		$uid = $this->input->post('uid',true);
		$model = M('t_system_user');

		if($model->delete($uid)){
			echojson('20000','删除成功！','删除成功！');
		}else{
			echojson('50005','删除失败！','删除失败！');
		}
	}

	//用户删除
	public function delRole(){
		//测试数据
		$uid = $this->input->post('rid',true);
		$model = M('t_role');

		if($model->delete($uid)){
			echojson('20000','删除成功！','删除成功！');
		}else{
			echojson('50005','删除失败！','删除失败！');
		}
	}


	//用户组删除
	public function delGroup(){
		//测试数据
		$gid = $this->input->post('gid',true);
		$model = M('t_group');
		if($model->delete($gid)){
			echojson('20000','删除成功！','删除成功！');
		}else{
			echojson('50005','删除失败！','删除失败！');
		}
	}

	//用户组审核
	public function doAuthGroup(){
		//测试数据
		$gid = $this->input->post('gid',true);
		$state = $this->input->post('status',true);

		if(!isset($state) || !$gid){

			echojson('50005','请正确传参数！','请正确传参数！');
		}

		loadLib('Status');
		Status::$type = 'user';
		$obj = Status::createObj();
		$obj->state = $state;
		$obj->uid = $gid;
		if($obj){
			$obj->statusGroup();
		}else{
			echojson('50000','获取对象失败！','获取对象失败！');
		}
	}

	//角色审核
	public function doAuthRole(){
		//测试数据
		$rid = $this->input->post('rid',true);
		$state = $this->input->post('status',true);

		if(!isset($state) || !$rid){

			echojson('50005','请正确传参数！','请正确传参数！');
		}

		loadLib('Status');
		Status::$type = 'user';
		$obj = Status::createObj();
		$obj->state = $state;
		$obj->uid = $rid;
		if($obj){
			$obj->statusRole();
		}else{
			echojson('50000','获取对象失败！','获取对象失败！');
		}
	}

	//角色分组
	public function doAuthRoleGroup(){
		//测试数据
		$gid = $this->input->post('gid',true);
		$state = $this->input->post('status',true);

		if(!isset($state) || !$gid){

			echojson('50005','请正确传参数！','请正确传参数！');
		}

		loadLib('Status');
		Status::$type = 'user';
		$obj = Status::createObj();
		$obj->state = $state;
		$obj->uid = $gid;
		if($obj){
			$obj->groupRole();
		}else{
			echojson('50000','获取登录对象失败！','获取登录对象失败！');
		}
	}


	//分配角色权限提交地址
	public function doAuthRoleList(){

		$rid = $this->input->post('rid',true);
		$nid = $this->input->post('nid',true);

		loadLib('Status');
		Status::$type = 'user';
		$obj = Status::createObj();
		$obj->state = $nid;
		$obj->uid = $rid;
		if($obj){
			$obj->authRoleList();
		}else{
			echojson('50000','获取登录对象失败！','获取登录对象失败！');
		}

	}
	
}

