<?php /*%%SmartyHeaderCode:32242546b1687032685-05404477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb9a6eea78a6ff5035809a037d27ceb3af890221' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\user\\role_add_edit.html',
      1 => 1416298343,
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
  'nocache_hash' => '32242546b1687032685-05404477',
  'variables' => 
  array (
    'type' => 0,
    'action' => 0,
    'title' => 0,
    'entitle' => 0,
    'state' => 0,
    'nodeback' => 0,
    'vo' => 0,
    'vv' => 0,
    'rid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_546b1687296563_91712528',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b1687296563_91712528')) {function content_546b1687296563_91712528($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
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
  <div class="page_tit">添加用户</div>
  <form method="post" action="/admin/index.php/user/doSystemRoleAddEdit">
  <div class="form2">
    <dl class="lineD">
      <dt>角色名：</dt>
      <dd>
        <input name="title" id="title" type="text" value=""><span>*</span>
        <p>角色中文名</p>
    </dl>
	
    <dl class="lineD">
      <dt>角色英文名：</dt>
      <dd>
         <input name="entitle" id="entitle" type="text" value=""><span>*</span>
        <p>角色英文名</p>
    </dl>

  	<dl class="lineD">
        <dt>用户状态：</dt>
        <dd>
          <label><input name="state" type="radio" value="-1" checked>未通过</label>
          <label><input name="state" type="radio" value="0" >正常</label>
          <label><input name="state" type="radio" value="1" >待审核</label>
          <label><input name="state" type="radio" value="2" >草稿箱</label>
      </dl>
	 
  	 <dl>
        <dt>所属权限：</dt>
        <dd>&nbsp;
        </dd>

      </dl>


                      <dl>
            <dt>首页</dt>
            <dd>
                                                            <label><input name="nid[]" type="checkbox" value="5" >桌面</label>
                                                 </dd>
          </dl>
                <dl>
            <dt>全局</dt>
            <dd>
                                  &nbsp;
                             </dd>
          </dl>
                <dl>
            <dt>内容</dt>
            <dd>
                                  &nbsp;
                             </dd>
          </dl>
                <dl>
            <dt>用户</dt>
            <dd>
                                                            <label><input name="nid[]" type="checkbox" value="6" >后台用户</label>
                                            <label><input name="nid[]" type="checkbox" value="7" >后台用户组</label>
                                            <label><input name="nid[]" type="checkbox" value="8" >后台角色</label>
                                            <label><input name="nid[]" type="checkbox" value="9" >前台节点</label>
                                            <label><input name="nid[]" type="checkbox" value="10" >后台节点</label>
                                                 </dd>
          </dl>
              
     


	
    <div class="page_btm">
      <input type='hidden' name='rid' value=''>
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  </form>
</div>
</body>
</html><?php }} ?>
