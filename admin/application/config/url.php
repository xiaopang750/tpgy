<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//全局url地址配置
/*----------------太平公益-------------------*/

//登录页
$config['url']['login'] = '/admin/index.php/admin/login';//登录页
//首页
$config['url']['admin'] = '/admin/index.php/admin/index';//首页
//主页
$config['url']['panel'] = '/admin/index.php/admin/panel';//主页

//前台节点

$config['url']['fore'] = '/admin/index.php/node/fore';//添加前台节点
$config['url']['addForeNode'] = '/admin/index.php/node/editAddForeNode';//添加前台节点
$config['url']['editForeNode'] = '/admin/index.php/node/editAddForeNode?aid=';//编辑前台节点
$config['url']['delForeNode'] = '/admin/index.php/post/node/delForeNode';//删除前台节点
$config['url']['foreNodeStatus'] = '/admin/index.php/post/node/foreNodeStatus';//前台节点状态提交地址
$config['url']['doAddEditNode'] = '/admin/index.php/node/doAddEditNode';//添加编译节点

//后台节点
$config['url']['back'] = '/admin/index.php/node/back';//添加后台节点
$config['url']['addBackNode'] = '/admin/index.php/node/editAddBackNode';//添加后台节点
$config['url']['editBackNode'] = '/admin/index.php/node/editAddBackNode?nid=';//编辑后台节点
$config['url']['delBackNode'] = '/admin/index.php/post/node/delBackNode';//删除后台节点
$config['url']['backNodeStatus'] = '/admin/index.php/post/node/backNodeStatus';//前台节点状态提交地址
$config['url']['doAddEditBackNode'] = '/admin/index.php/node/doAddEditBackNode';//添加编译节点

//后台用户
$config['url']['backUser'] = '/admin/index.php/user/backUser';//后天用户列表
$config['url']['system_user_add_edit'] = '/admin/index.php/user/systemUserAddEdit?uid';//后天用户管理编辑添加
$config['url']['do_system_user_add_edit'] = '/admin/index.php/user/doSystemUserAddEdit';//后天用户提交
$config['url']['authUrl'] = '/admin/index.php/post/user/doAuth';//后天用户审核

$config['url']['authViewUrl'] = '/admin/index.php/user/auth?uid=';//后天用户审核
$config['url']['authUserGroupViewUrl'] = '/admin/index.php/user/authUserGroup?uid=';//后台用户分组编辑添加
$config['url']['delUser'] = '/admin/index.php/post/user/delUser';//后天用户审核

//用户组
$config['url']['group'] = '/admin/index.php/user/group';//后天用户列表
$config['url']['addGroup'] = '/admin/index.php/user/systemGroupAddEdit?gid=';//用户组添加
$config['url']['delGroup'] = '/admin/index.php/post/user/delGroup';//用户组删除
$config['url']['authGroupUrl'] = '/admin/index.php/post/user/doAuthGroup';//用户组认证

$config['url']['doAddEditGroup'] = '/admin/index.php/user/doSystemGroupAddEdit';//用户组添加编译提交页面
$config['url']['authGroupViewUrl'] = '/admin/index.php/user/authGroup?gid=';//后天用户审核

$config['url']['authUrl'] = '/admin/index.php/post/user/doAuth';//后天用户审核
$config['url']['authUserGroupUrl'] = '/admin/index.php/post/user/doAuthUserGroup';//后台用户组审核
$config['url']['authRoleGroupViewUrl'] = '/admin/index.php/user/authRoleGroup?gid=';//后台角色分组编辑添加

//角色
$config['url']['role'] = '/admin/index.php/user/role';//后台角色列表
$config['url']['addRole'] = '/admin/index.php/user/systemRoleAddEdit?rid=';//角色添加
$config['url']['delRole'] = '/admin/index.php/post/user/delRole';//角色删除
$config['url']['authRoleUrl'] = '/admin/index.php/post/user/doAuthRole';//角色认证
$config['url']['authRoleGroupUrl'] = '/admin/index.php/post/user/doAuthRoleGroup';//后台用户组角色分组审核roleUrl
$config['url']['roleUrl'] = '/admin/index.php/user/roleList?rid=';//后台用户角色分配权限

$config['url']['doAddEditRole'] = '/admin/index.php/user/doSystemRoleAddEdit';//角色添加编译提交页面
$config['url']['authRoleViewUrl'] = '/admin/index.php/user/authRole?rid=';//后天用户审核
$config['url']['authRoleUrl'] = '/admin/index.php/post/user/doAuthRole';//后天角色审核提交
$config['url']['autoRoleList'] = '/admin/index.php/post/user/doAuthRoleList';//后台角色分配权限审核提交