<?php /*%%SmartyHeaderCode:31127547445da93e505-64744495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40115d9bf9c3d98d3bbb0331d1fae04e82ee4248' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\dispatch_jump.html',
      1 => 1416905979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31127547445da93e505-64744495',
  'variables' => 
  array (
    'waitSecond' => 0,
    'jumpUrl' => 0,
    'status' => 0,
    'msgTitle' => 0,
    'message' => 0,
    'error' => 0,
    'closeWin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_547445daaf5ec4_95310736',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547445daaf5ec4_95310736')) {function content_547445daaf5ec4_95310736($_smarty_tpl) {?><!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html>
<head>
<title>页面提示</title>
<meta http-equiv="Content-Type" cont
ent="text/html; charset=utf-8">
<meta http-equiv='Refresh' content='3;URL=/admin/index.php/admin/index'>
<style>
html, body{margin:0; padding:0; border:0 none;font:14px Tahoma,Verdana;line-height:150%;background:white}
a{text-decoration:none; color:#174B73; border-bottom:1px dashed gray}
a:hover{color:#F60; border-bottom:1px dashed gray}
div.message{margin:10% auto 0px auto;clear:both;padding:5px;border:1px solid silver; text-align:center; width:45%}
span.wait{color:blue;font-weight:bold}
span.error{color:red;font-weight:bold}
span.success{color:blue;font-weight:bold}
div.msg{margin:20px 0px}

</style>
<body>
<div class="message">
	<div class="msg">
			<!-- <present name="message" > -->
		<span class="success">操作成功！登录成功！</span>
		</div>
	<div class="tip">
			页面将在 <span class="wait">3</span> 秒后自动跳转，如果不想等待请点击 <a href="/admin/index.php/admin/index">这里</a> 跳转
	<!-- </present> -->
		</div>
</div>

</body>
</html><?php }} ?>
