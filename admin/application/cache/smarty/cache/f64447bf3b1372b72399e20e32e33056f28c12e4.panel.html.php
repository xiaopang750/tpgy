<?php /*%%SmartyHeaderCode:34405473cfc8059d35-90481009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f64447bf3b1372b72399e20e32e33056f28c12e4' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\admin\\panel.html',
      1 => 1415062759,
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
  'nocache_hash' => '34405473cfc8059d35-90481009',
  'variables' => 
  array (
    'title' => 0,
    'statistics' => 0,
    'id' => 0,
    'index' => 0,
    'key' => 0,
    'channel' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5473cfc82af311_95273631',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473cfc82af311_95273631')) {function content_5473cfc82af311_95273631($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
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
<script>
function fold(index) {
  	$('#app_'+index).slideToggle('fast');
}
</script>
<div id="container" class="so_main">
    <div class="page_tit">欢迎使用太平公益</div>
    <div class="form2">
        <h4>提示：点击标题可以折叠栏目</h4>
                                   
            <h3 onclick="fold('0');"> 服务器信息</h3>
            <div id="app_0">
                            <dl><dt><strong>核心版本：</strong></dt><dd>1.0 beta</dd></dl>
		                    <dl><dt><strong>服务器系统及PHP版本：</strong></dt><dd>WINNT / PHP v5.3.10</dd></dl>
		                    <dl><dt><strong>服务器软件：</strong></dt><dd>Apache/2.2.22 (Win32) PHP/5.3.10</dd></dl>
		                    <dl><dt><strong>最大上传许可：</strong></dt><dd>2M</dd></dl>
		                    <dl><dt><strong>执行时间限制：</strong></dt><dd>300秒</dd></dl>
		                    <dl><dt><strong>服务器时间：</strong></dt><dd>2014年11月25日 08:39:36</dd></dl>
		                    <dl><dt><strong>北京时间：</strong></dt><dd>2014年11月25日 08:39:36</dd></dl>
		                    <dl><dt><strong>域名/IP：</strong></dt><dd>www.tpgy.com [ 127.0.0.1 ]</dd></dl>
		                    <dl><dt><strong>剩余空间：</strong></dt><dd>22720.48M</dd></dl>
		                </div>
                             
            <h3 onclick="fold('1');"> 用户信息</h3>
            <div id="app_1">
                            <dl><dt><strong>当前在线：</strong></dt><dd>1</dd></dl>
		                    <dl><dt><strong>全部用户：</strong></dt><dd>2</dd></dl>
		                    <dl><dt><strong>有效用户：</strong></dt><dd>3</dd></dl>
		                </div>
                             
            <h3 onclick="fold('2');"> 开发团队</h3>
            <div id="app_2">
                            <dl><dt><strong>版权所有：</strong></dt><dd><a href="http://www.tpgy.com" target="_blank">太平公益</a></dd></dl>
		                    <dl><dt><strong>UI设计：</strong></dt><dd><a href="#" target="_blank">范为</a></dd></dl>
		                    <dl><dt><strong>项目经理：</strong></dt><dd><a href="#" target="_blank">范为</a>、<a href="#" target="_blank">刘广平</a></dd></dl>
		                    <dl><dt><strong>前端设计：</strong></dt><dd><a href="#" target="_blank">范为</a></dd></dl>
		                    <dl><dt><strong>开发团队：</strong></dt><dd><a href="#" target="_blank">范为</a>、<a href="#" target="_blank">刘广平</a></dd></dl>
		                </div>
            </div>
</div>

</body>
</html><?php }} ?>
