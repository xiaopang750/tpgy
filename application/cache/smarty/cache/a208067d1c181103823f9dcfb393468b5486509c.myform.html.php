<?php /*%%SmartyHeaderCode:23607544c7515ce85b0-00406182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a208067d1c181103823f9dcfb393468b5486509c' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\static\\views\\home\\myform.html',
      1 => 1414296742,
      2 => 'file',
    ),
    '67fbf40a51459d0a5c56e0d65bebb68e1352f608' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\static\\views\\header.html',
      1 => 1414293576,
      2 => 'file',
    ),
    'cfa869f4a80539c07406773f7933fea1720293e6' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\static\\views\\footer.html',
      1 => 1414069344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23607544c7515ce85b0-00406182',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544c7515e89131_83857735',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544c7515e89131_83857735')) {function content_544c7515e89131_83857735($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页 - 太平公益官方网站</title>
<link rel="stylesheet" href="http://www.tpgy.com/static/style/common.css">
<script src="http://www.tpgy.com/static/js/tool.js" type="text/javascript"></script>
<script src="http://www.tpgy.com/static/js/ready.js" type="text/javascript"></script>
<script src="http://www.tpgy.com/static/js/nav.js" type="text/javascript"></script>
<script src="http://www.tpgy.com/static/js/banner.js" type="text/javascript"></script>
<script src="http://www.tpgy.com/static/js/move.js" type="text/javascript"></script>
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
    
    <div class="g_main">
         <?php echo '<?php'; ?>
 echo validation_errors(); <?php echo '?>'; ?>


        <?php echo '<?php'; ?>
 echo form_open('form'); <?php echo '?>'; ?>


        <h5>Username</h5>
        <input type="text" name="username" value="" size="50" />

        <h5>Password</h5>
        <input type="text" name="password" value="" size="50" />

        <h5>Password Confirm</h5>
        <input type="text" name="passconf" value="" size="50" />

        <h5>Email Address</h5>
        <input type="text" name="email" value="" size="50" />

        <div><input type="submit" value="Submit" /></div>

        </form>
    </div>
 
    <div class="footer">
        <div class="footer_cont">
            <div class="footer_contLeft">
                <a href="#">首页</a><span>|</span><a href="#">公益事业</a><span>|</span><a href="#">论坛</a><span>|</span><a href="#">捐款方式</a><span>|</span><a href="#">我要助人</a><span>|</span><a href="#">志愿报名</a><span>|</span><a href="#">支教活动</a><span>|</span><a href="#">透明监督</a><span>|</span><a href="#">建议投诉</a>
                <p>Copyright © 2000-2014 TaiPingGongYi Corporation, All Rights Reserved</p>
            </div>
        </div>
    </div>
    <div class="backTop"></div>
    <div class="shadow hide"></div>
    <div class="winBox hide">
        <div class="win_title">
            <h3>登陆</h3>
            <a href="javascript:;" class="winClose" title="关闭"></a>
        </div>
        <div class="winCont">
            <ul class="login_list">
                <li><label for="l1">用户名</label><input type="text" id="l1" class="g-input"></li>
                <li><label for="l2">密码</label><input type="text" id="l2"  class="g-input"><span class="forget_pass"><a href="#">忘记密码?</a></span></li>
                <li><label>&nbsp;</label><span class="userToReg">还没有账号？<a href="#">我要注册</a></span></li>
                <li class="g-sm-btn"><input type="submit" value="注 册" class="btn-y"><input type="button" value="取 消" class="btn-n"></li>
            </ul>
        </div>
    </div>
</body>
</html><?php }} ?>
