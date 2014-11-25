<?php /* Smarty version Smarty-3.1.18, created on 2014-11-25 08:39:35
         compiled from "D:\wamp\Apache2.2\www\tpgy\admin\static\views\admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:140605473cfc793bf72-50958235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10b38617026999520482a8f590bd0dfc9e93df7c' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\admin\\index.html',
      1 => 1416374009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140605473cfc793bf72-50958235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'details' => 0,
    'backMenu' => 0,
    'i' => 0,
    'vo' => 0,
    'j' => 0,
    'vvo' => 0,
    'voo' => 0,
    'kes' => 0,
    'username' => 0,
    'currentdate' => 0,
    'currenttime' => 0,
    'panel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5473cfc7c37644_92842463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473cfc7c37644_92842463')) {function content_5473cfc7c37644_92842463($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['details']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['details']->value;?>
"/>
<meta name="publisher" content="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
<meta name="copyright" content="Copyright (c) 2013 jia178.com All Rights Reserved." />
<meta name ="robots" content ="all">
<meta name="renderer" content="webkit">   

<link rel="stylesheet" type="text/css" href="<?php echo @constant('STATIC_ROOT');?>
css/Common.css"/>     <!-- 公共样式表 -->
<link rel="stylesheet" type="text/css" href="<?php echo @constant('STATIC_ROOT');?>
css/mobile-template.css"/>     <!-- 页面样式表 -->
<script type='text/javascript'>
	
	
var SITE_URL ='http://new.www.sns.com';
var APPNAME   = 'admin';
/* 按下F5时仅刷新iframe页面 */
function inactiveF5(e) {
	e=window.event||e;
	var key = e.keyCode;
	if (key == 116){
		parent.MainIframe.location.reload();
		if(document.all) {
			e.keyCode = 0;
			e.returnValue = false;
		}else {
			e.cancelBubble = true;
			e.preventDefault();
		}
	}
}

function nof5() {
    return ;
	if(window.frames&&window.frames[0]) {
		window.frames[0].focus();
		for (var i_tem = 0; i_tem < window.frames.length; i_tem++) {
			if (document.all) {
				window.frames[i_tem].document.onkeydown = new Function("var e=window.frames[" + i_tem + "].event; if(e.keyCode==116){parent.MainIframe.location.reload();e.keyCode = 0;e.returnValue = false;};");
			}else {
				window.frames[i_tem].onkeypress = new Function("e", "if(e.keyCode==116){parent.MainIframe.location.reload();e.cancelBubble = true;e.preventDefault();}");
			}
		} //END for()
	} //END if()
}
//模拟ts U函数 需要预先定义JS全局变量 SITE_URL 和 APPNAME

var U =function(url,params){
	var website = SITE_URL+'/index.php';
	url = url.split('/');
	if(url[0]=='' || url[0]=='@')
		url[0] = APPNAME;
	if (!url[1])
		url[1] = 'Index';
	if (!url[2])
		url[2] = 'index';
	website = website+'?app='+url[0]+'&mod='+url[1]+'&act='+url[2];
	if(params){
		params = params.join('&');
		website = website + '&' + params;
	}
	return website;
};

function refresh() {
	parent.MainIframe.location.reload();
}

function addTonav(name,url){
	var appname = url.split('/');
	$('.main_nav').append('<a href="#" onclick="gotoApp(this,\''+url+'\')" appname="'+appname[0]+'">'+name+'</a>');
	$.post(U('admin/Home/addNav'),{appname:appname[0],url:url},function(){});}

function removeFromNav(app){
	$('.main_nav').find('a').each(function(){
		if($(this).attr('appname') == app){
			$(this).remove();
			$.post(U('admin/Home/removeNav'),{appname:app},function(){});}
	});
}

function gotoApp(obj,url){
	
	switchChannel('apps');

	$('.main_nav').find('a').removeClass('on');

	$(obj).addClass('on');

	obj.className = 'on';

	parent.MainIframe.location = U(url);

}

document.onkeydown=inactiveF5;

</script>

<link rel="stylesheet" type="text/css" href="<?php echo @constant('STATIC_ROOT');?>
css/iconfont.css"/>     <!-- 图标字体样式表 -->
</head>

<body onload="nof5()">

<!-- head  start -->
<div class="head-box">
	<div class="head-con">
		<div class="logo-b">
			<a href="javascript:;" alt="logo" class="logo_1"><img src="<?php echo @constant('STATIC_ROOT');?>
img/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"></a>
			<a href="javascript:;" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
管理平台" class="logo_2 ml-8 mt-9"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
管理平台</a>
		</div>
		<div class="dot-r">
			<span><a href="../admin/signOut" class="a-tui"><img src="<?php echo @constant('STATIC_ROOT');?>
img/tui.jpg" alt="退出"></a></span>
			<span><a href="javascript:;" class="a-bang"><img src="<?php echo @constant('STATIC_ROOT');?>
img/bang.jpg" alt="帮助"></a></span>
			<span><a href="javascript:;" class="a-si"><img src="<?php echo @constant('STATIC_ROOT');?>
img/si.jpg" alt="系统消息"></a></span>
			<span><a href="" class="a-zhuo"><img src="<?php echo @constant('STATIC_ROOT');?>
img/zhuo.jpg" alt="回桌面"></a></span>
		</div>
	</div>
</div>
<!-- head  finish -->


<!-- tree  start -->
<div class="guide" id="MoGU">展开<br />菜单</div>
<!-- <div class="guide" id="MoGU"></div> -->
<div class="tree-box br" sc="tree-yin">
	<ul class="tree-main mr-1" id="tree-box1">

		<?php if (isset($_smarty_tpl->tpl_vars["i"])) {$_smarty_tpl->tpl_vars["i"] = clone $_smarty_tpl->tpl_vars["i"];
$_smarty_tpl->tpl_vars["i"]->value = 0; $_smarty_tpl->tpl_vars["i"]->nocache = null; $_smarty_tpl->tpl_vars["i"]->scope = 0;
} else $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, 0);?>
		<?php if (isset($_smarty_tpl->tpl_vars['backMenu']->value['parent'])&&$_smarty_tpl->tpl_vars['backMenu']->value['parent']) {?>
		<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backMenu']->value['parent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['vo']->key;
?>
		<li <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>class="cur1"<?php }?>>
			<p>
				<i class="iconfont"><a href="#"><?php echo $_smarty_tpl->tpl_vars['vo']->value['ico'];?>
</a></i>
				<span><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['vo']->value['module_name'];?>
</a></span>
			</p>
		</li>
		<?php if (isset($_smarty_tpl->tpl_vars['i'])) {$_smarty_tpl->tpl_vars['i'] = clone $_smarty_tpl->tpl_vars['i'];
$_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['i']->value+1; $_smarty_tpl->tpl_vars['i']->nocache = null; $_smarty_tpl->tpl_vars['i']->scope = 0;
} else $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
		<?php } ?>
		<?php }?>
	</ul>
	<ul class="tree-list" id="tree-box2" sc="tree-menu">
		<?php if (isset($_smarty_tpl->tpl_vars["j"])) {$_smarty_tpl->tpl_vars["j"] = clone $_smarty_tpl->tpl_vars["j"];
$_smarty_tpl->tpl_vars["j"]->value = 0; $_smarty_tpl->tpl_vars["j"]->nocache = null; $_smarty_tpl->tpl_vars["j"]->scope = 0;
} else $_smarty_tpl->tpl_vars["j"] = new Smarty_variable(0, null, 0);?>
		<?php if (isset($_smarty_tpl->tpl_vars['backMenu']->value['children'])&&$_smarty_tpl->tpl_vars['backMenu']->value['children']) {?>
			<?php  $_smarty_tpl->tpl_vars['vvo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvo']->_loop = false;
 $_smarty_tpl->tpl_vars['keys'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backMenu']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvo']->key => $_smarty_tpl->tpl_vars['vvo']->value) {
$_smarty_tpl->tpl_vars['vvo']->_loop = true;
 $_smarty_tpl->tpl_vars['keys']->value = $_smarty_tpl->tpl_vars['vvo']->key;
?>

				<li  <?php if ($_smarty_tpl->tpl_vars['j']->value==0) {?>class="cur2"<?php }?>>
					
					<?php if (isset($_smarty_tpl->tpl_vars['vvo']->value)&&$_smarty_tpl->tpl_vars['vvo']->value) {?>
						<?php  $_smarty_tpl->tpl_vars['voo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voo']->_loop = false;
 $_smarty_tpl->tpl_vars['kes'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vvo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voo']->key => $_smarty_tpl->tpl_vars['voo']->value) {
$_smarty_tpl->tpl_vars['voo']->_loop = true;
 $_smarty_tpl->tpl_vars['kes']->value = $_smarty_tpl->tpl_vars['voo']->key;
?>
							<span><a href="../<?php echo $_smarty_tpl->tpl_vars['voo']->value['module'];?>
/<?php echo $_smarty_tpl->tpl_vars['voo']->value['action'];?>
" target='main' <?php if ($_smarty_tpl->tpl_vars['kes']->value==0) {?>class="cur4"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['voo']->value['ico'];?>
"><b class="b"></b><?php echo $_smarty_tpl->tpl_vars['voo']->value['module_name'];?>
</a></span>
						
						<?php } ?>
					<?php }?>
				</li>
			<?php if (isset($_smarty_tpl->tpl_vars['j'])) {$_smarty_tpl->tpl_vars['j'] = clone $_smarty_tpl->tpl_vars['j'];
$_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['j']->value+1; $_smarty_tpl->tpl_vars['j']->nocache = null; $_smarty_tpl->tpl_vars['j']->scope = 0;
} else $_smarty_tpl->tpl_vars['j'] = new Smarty_variable($_smarty_tpl->tpl_vars['j']->value+1, null, 0);?>
			<?php } ?>
		<?php }?>
		
	</ul>
<!-- qqservice   start -->
<!-- <div class="qqservice">
	<div class="kefu"><a href="javascript:;"><img src="<?php echo @constant('STATIC_ROOT');?>
img/kf.jpg" alt="在线客服"></a></div>
	<span>太平公益</span>
	<span>提供平台支持</span>
	<span><?php echo @constant('SERVER_NAME');?>
</span>
</div> -->
<!-- qqservice   finish -->
</div>
<!-- tree  finish -->


<!-- contentRight start -->
<div class="contentRight">
	<div class="con-title">
		<div class="title-inner">
			<p class="p-title" id="p-title"><i class="iconfont">&#xe603;</i><span>用户桌面</span></p>
			<div class="p-data" id="p-data">
				<span>欢迎<b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b>登录</span>
				<span>星期<?php echo $_smarty_tpl->tpl_vars['currentdate']->value;?>
</span>
				<span><?php echo $_smarty_tpl->tpl_vars['currenttime']->value;?>
</span>
			</div>
		</div>
	</div>
	<iframe src="<?php echo $_smarty_tpl->tpl_vars['panel']->value;?>
" id="main" name="main" frameborder="0" scrolling="yes" width="100%" height="100%" onload="nof5()"></iframe>
</div>
<!-- contentRight finish -->
<div class="backTop"></div>
<script language='javascript'>
	
function nof5() {
    return ;
	if(window.frames&&window.frames[0]) {
		window.frames[0].focus();
		for (var i_tem = 0; i_tem < window.frames.length; i_tem++) {
			if (document.all) {
				window.frames[i_tem].document.onkeydown = new Function("var e=window.frames[" + i_tem + "].event; if(e.keyCode==116){parent.main.location.reload();e.keyCode = 0;e.returnValue = false;};");
			}else {
				window.frames[i_tem].onkeypress = new Function("e", "if(e.keyCode==116){parent.main.location.reload();e.cancelBubble = true;e.preventDefault();}");
			}
		} //END for()
	} //END if()
}

</script>
<script type="text/javascript" src="<?php echo @constant('STATIC_ROOT');?>
/js/jquery-1.10.2.min.js"></script>      <!-- jquery库引入 -->
<script type="text/javascript" src="<?php echo @constant('STATIC_ROOT');?>
js/mobile-template.js"></script>      <!-- 页面js1 -->
<script type="text/javascript" src="<?php echo @constant('STATIC_ROOT');?>
js/device.min.js"></script>      <!-- device引入 -->
<script type="text/javascript" src="<?php echo @constant('STATIC_ROOT');?>
js/mobile.js"></script>      <!-- 页面js2 -->
</body>
</html><?php }} ?>
