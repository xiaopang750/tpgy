<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 /**
 * 视图的调用配制
 * @author liuguangping
 * @version 2014/10/22
 *
 * **/

$config['tpgy']['login'] = 'admin/login';  //登录页
$config['tpgy']['admin'] = 'admin/index';//首页
$config['tpgy']['panel'] = 'admin/panel';//主页

$config['tpgy']['dispatch_jump'] = 'dispatch_jump';//提示页面

$config['tpgy']['fore'] = 'node/fore';//节点前台导航
$config['tpgy']['fore_edit_add'] = 'node/fore_edit_add';//节点前台导航

$config['tpgy']['back'] = 'node/back';//后台导航
$config['tpgy']['back_edit_add'] = 'node/back_edit_add';//后台导航添加编辑

$config['tpgy']['back_user'] = 'user/back_user';//后天用户管理列表
$config['tpgy']['system_user_add_edit'] = 'user/system_user_add_edit';//后天用户管理编辑添加
$config['tpgy']['auth'] = 'user/auth';//后天用户管理编辑添加
$config['tpgy']['authUserGroup'] = 'user/authUserGroup';//后台用户分组

//用户组管理
$config['tpgy']['group'] = 'user/group';//后台用户组管理列表
$config['tpgy']['group_add_edit'] = 'user/group_add_edit';//后台用户组管理编辑添加
$config['tpgy']['authGroup'] = 'user/authGroup';//后天用户管理编辑添加
$config['tpgy']['authRoleGroup'] = 'user/authRoleGroup';//后台角色分组


$config['tpgy']['role'] = 'user/role';//后台角色管理列表
$config['tpgy']['role_add_edit'] = 'user/role_add_edit';//后台用户角色管理编辑添加
$config['tpgy']['authRole'] = 'user/authRole';//后台角色审核
$config['tpgy']['roleList'] = 'user/roleList';//后台角色分配权限审核



