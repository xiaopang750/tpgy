<?php /* Smarty version Smarty-3.1.18, created on 2014-10-24 18:06:30
         compiled from "D:\Develop\www\tpgy\static\views\header.html" */ ?>
<?php /*%%SmartyHeaderCode:10521544a24a61c14a0-30359570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a68792981cf472af2f8343f7259770dce6f1380' => 
    array (
      0 => 'D:\\Develop\\www\\tpgy\\static\\views\\header.html',
      1 => 1414117368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10521544a24a61c14a0-30359570',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544a24a61e7df8_79586661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a24a61e7df8_79586661')) {function content_544a24a61e7df8_79586661($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>首页 - 太平公益官方网站</title>
<link rel="stylesheet" href="<?php echo @constant('STATIC_ROOT');?>
style/common.css">
<script src="<?php echo @constant('STATIC_ROOT');?>
js/tool.js" type="text/javascript"></script>
<script src="<?php echo @constant('STATIC_ROOT');?>
js/ready.js" type="text/javascript"></script>
<script src="<?php echo @constant('STATIC_ROOT');?>
js/nav.js" type="text/javascript"></script>
<script src="<?php echo @constant('STATIC_ROOT');?>
js/banner.js" type="text/javascript"></script>
<script src="<?php echo @constant('STATIC_ROOT');?>
js/move.js" type="text/javascript"></script>
</head>

<body>
    <div class="header">
        <div class="header_cont">
            <h3>太平公益(原名 红铅笔)，欢迎您</h3>
            <div class="login_reg">
                <a href="javascript:;">登陆</a><span>|</span><a href="#">注册</a>
            </div>
        </div>
    </div>
    <div class="g_logo">
        <div class="logo"><a href="#">太平公益(原红铅笔)</a></div>
    </div>
    <div class="g_nav">
        <ul class="nav">
            <li><a href="/home/index" class="active">首页</a></li>
            <li><a href="/release/index">我来求助</a></li>
            <li><a href="#">我要助人</a></li>
            <li><a href="volunteer.html">志愿报名</a></li>
            <li>
                <a href="#" class="dropLink">公益项目<i class="trian"></i></a>
                <div class="nav_dropdown hide">
                    <i class="triangle"></i>
                    <dl>
                        <dd><a href="#">农村教师培训</a></dd>
                        <dd><a href="#">支教活动</a></dd>
                        <dd><a href="#">捐衣捐物</a></dd>
                        <dd><a href="#">公益宣传</a></dd>
                    </dl>
                </div>
            </li>
            <li><a href="supervision.html">透明监督</a></li>
            <li><a href="#">公益网店</a></li>
            <li><a href="video_photo.html">视频图片</a></li>
            <li><a href="suggestions.html">意见建议</a></li>
            <li>
                <a href="/about/index" class="dropLink">关于我们<i class="trian"></i></a>
                <div class="nav_dropdown hide">
                    <i class="triangle"></i>
                    <dl>
                        <dd><a href="/about/index#gywm">联系我们</a></dd>
                        <dd><a href="/about/index#gyxm">公益项目</a></dd>
                        <dd><a href="/about/index#lsh">理事会成员</a></dd>
                        <dd><a href="/about/index#jlgy">近年来组织的公益活动</a></dd>
                    </dl>
                </div>
            </li>
            <li><a href="#">论坛</a></li>
        </ul>
    </div>
    <?php }} ?>
