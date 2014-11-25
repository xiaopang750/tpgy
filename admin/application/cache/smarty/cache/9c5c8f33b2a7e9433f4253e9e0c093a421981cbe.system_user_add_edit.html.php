<?php /*%%SmartyHeaderCode:23535546d4c41e7cd52-09131488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c5c8f33b2a7e9433f4253e9e0c093a421981cbe' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\user\\system_user_add_edit.html',
      1 => 1416035097,
      2 => 'file',
    ),
    '0d25d6519787234b13246213cf95ae5d70439335' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\header.html',
      1 => 1415008244,
      2 => 'file',
    ),
    '40aea10b4f50ff944cab2792e41cf6f9654db78d' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\footer.html',
      1 => 1415062779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23535546d4c41e7cd52-09131488',
  'variables' => 
  array (
    'type' => 0,
    'action' => 0,
    'username' => 0,
    'realname' => 0,
    'isadmin' => 0,
    'sex' => 0,
    'group' => 0,
    'vo' => 0,
    'state' => 0,
    'uid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_546d4c421a0ae6_57568793',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546d4c421a0ae6_57568793')) {function content_546d4c421a0ae6_57568793($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理后台</title>
<link href="http://www.tpgy.com/admin/static/css/style.css" rel="stylesheet" type="text/css">
<link href="http://www.tpgy.com/admin/static/css/ui.code.css" rel="stylesheet">
<script src="http://www.tpgy.com/admin/static/js/ui.code.js" type="text/javascript"></script>
</head>

</head>
<body>
<div class="so_main">
  <div class="page_tit">编辑用户</div>
  <form method="post" action="/admin/index.php/user/doSystemUserAddEdit">
  <div class="form2">
    <dl class="lineD">
      <dt>用户名：</dt>
      <dd>
        <input name="username" id="username" type="text" value="fanwei"><span>*</span>
        <p>用户进行登录的帐号</p>
    </dl>
	
    <dl class="lineD">
      <dt>密码：</dt>
      <dd>
        <input name="password" id="password" type="text"><span>*</span>
        <p>用户进行登录的密码</p>
    </dl>
	
    <dl class="lineD">
      <dt>真实姓名：</dt>
      <dd>
        <input name="realname" id="realname" type="text" value="范为"><span>*</span>
        <p>2-10位个中英文、数字、下划线和中划线组成</p>
    </dl>
    
    <dl class="lineD">
      <dt>是否是超级管理员：</dt>
      <dd>
        <label><input name="isadmin" type="radio" value="1" checked>否</label>
        <label><input name="isadmin" type="radio" value="0" checked>是</label>
        <p>是否是超级管理员</p>
    </dl>
    
    <dl class="lineD">
      <dt>性别：</dt>
      <dd>
        <label><input name="sex" type="radio" value="1" checked>男</label>
        <label><input name="sex" type="radio" value="0" >女</label>
    </dl>

    <dl class="lineD">
      <dt>用户组：</dt>
      <dd>
                              <label><input name="gid[]" type="checkbox" value="9" >首席执行官</label>
        
                      <label><input name="gid[]" type="checkbox" value="8" >首席运营</label>
        
                      <label><input name="gid[]" type="checkbox" value="11" >首席技术官</label>
        
                      <label><input name="gid[]" type="checkbox" value="12" >首席财务官</label>
        
                           <p>分配用户组</p>
    </dl>
	
	<dl class="lineD">
      <dt>用户状态：</dt>
      <dd>
        <label><input name="state" type="radio" value="-1" checked>未通过</label>
        <label><input name="state" type="radio" value="0" checked>正常</label>
        <label><input name="state" type="radio" value="1" >待审核</label>
        <label><input name="state" type="radio" value="2" >草稿箱</label>
    </dl>
	 
	 <!-- <dl>
      <dt>用户组：</dt>
      <dd>
        <php>if($type=='add'){</php>
        {:W('SelectUserGroup')}
        <php>}else {</php>
        {:W('SelectUserGroup', array('uid'=>$uid))}
        <php>}</php>
      </dd>
    </dl> -->
	
    <div class="page_btm">
      <input type='hidden' name='uid' value='1'>
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  </form>
</div>
</body>
</html><?php }} ?>
