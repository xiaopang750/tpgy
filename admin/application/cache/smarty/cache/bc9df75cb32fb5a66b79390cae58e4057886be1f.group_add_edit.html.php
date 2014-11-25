<?php /*%%SmartyHeaderCode:14077546b5843cfad46-45695079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc9df75cb32fb5a66b79390cae58e4057886be1f' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\user\\group_add_edit.html',
      1 => 1416032340,
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
  'nocache_hash' => '14077546b5843cfad46-45695079',
  'variables' => 
  array (
    'type' => 0,
    'action' => 0,
    'title' => 0,
    'entitle' => 0,
    'role' => 0,
    'vo' => 0,
    'state' => 0,
    'gid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_546b58440a6658_91318697',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b58440a6658_91318697')) {function content_546b58440a6658_91318697($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
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
  <form method="post" action="/admin/index.php/user/doSystemGroupAddEdit">
  <div class="form2">
    <dl class="lineD">
      <dt>用户组名：</dt>
      <dd>
        <input name="title" id="title" type="text" value="首席执行官"><span>*</span>
        <p>用户组中文名</p>
    </dl>
	
    <dl class="lineD">
      <dt>用户组英文名：</dt>
      <dd>
         <input name="entitle" id="entitle" type="text" value="CEO"><span>*</span>
        <p>用户组英文名</p>
    </dl>

    <dl class="lineD">
      <dt>所属角色：</dt>
      <dd>
                              <label><input name="rid[]" type="checkbox" value="1" checked>超级管理</label>
        
                      <label><input name="rid[]" type="checkbox" value="5" >数据管理</label>
        
                      <label><input name="rid[]" type="checkbox" value="7" >用户管理</label>
        
                      <label><input name="rid[]" type="checkbox" value="6" >内容管理</label>
        
                           <p>所属角色：</p>
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
      <input type='hidden' name='gid' value='9'>
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  </form>
</div>
</body>
</html><?php }} ?>
