<?php /* Smarty version Smarty-3.1.18, created on 2014-11-20 09:29:25
         compiled from "D:\wamp\Apache2.2\www\tpgy\static\views\header.html" */ ?>
<?php /*%%SmartyHeaderCode:8611546d43f5489d18-66997846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67fbf40a51459d0a5c56e0d65bebb68e1352f608' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\static\\views\\header.html',
      1 => 1414495568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8611546d43f5489d18-66997846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'topMenu' => 0,
    'childTopMenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_546d43f5562fa8_13002681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546d43f5562fa8_13002681')) {function content_546d43f5562fa8_13002681($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
            <?php  $_smarty_tpl->tpl_vars['topMenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topMenu']->_loop = false;
 $_smarty_tpl->tpl_vars['topKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['topMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topMenu']->key => $_smarty_tpl->tpl_vars['topMenu']->value) {
$_smarty_tpl->tpl_vars['topMenu']->_loop = true;
 $_smarty_tpl->tpl_vars['topKey']->value = $_smarty_tpl->tpl_vars['topMenu']->key;
?>
                <?php if (isset($_smarty_tpl->tpl_vars['topMenu']->value['children'])&&$_smarty_tpl->tpl_vars['topMenu']->value['children']) {?>
                    <li>
                        <a href="#" class="dropLink"><?php echo $_smarty_tpl->tpl_vars['topMenu']->value['aname'];?>
<i class="trian"></i></a>
                        <div class="nav_dropdown hide">
                            <i class="triangle"></i>
                            <dl>
                                 <?php  $_smarty_tpl->tpl_vars['childTopMenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['childTopMenu']->_loop = false;
 $_smarty_tpl->tpl_vars['chiildTopKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['topMenu']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['childTopMenu']->key => $_smarty_tpl->tpl_vars['childTopMenu']->value) {
$_smarty_tpl->tpl_vars['childTopMenu']->_loop = true;
 $_smarty_tpl->tpl_vars['chiildTopKey']->value = $_smarty_tpl->tpl_vars['childTopMenu']->key;
?>
                                    <dd>
                                        <?php if (isset($_smarty_tpl->tpl_vars['topMenu']->value['islink'])) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['topMenu']->value['islink']==0) {?>
                                                <a href="/<?php echo $_smarty_tpl->tpl_vars['childTopMenu']->value['aenname'];?>
/<?php echo $_smarty_tpl->tpl_vars['childTopMenu']->value['defaultname'];?>
"><?php echo $_smarty_tpl->tpl_vars['childTopMenu']->value['aname'];?>
</a>
                                            <?php } else { ?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['childTopMenu']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['childTopMenu']->value['aname'];?>
</a>
                                            <?php }?>
                                        <?php }?>
                                    </dd>
                                 <?php } ?>
                            </dl>
                        </div>
                    </li>
                <?php } else { ?>
                     <li>
                        <?php if (isset($_smarty_tpl->tpl_vars['topMenu']->value['islink'])) {?>
                            <?php if ($_smarty_tpl->tpl_vars['topMenu']->value['islink']==0) {?>
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['topMenu']->value['aenname'];?>
/<?php echo $_smarty_tpl->tpl_vars['topMenu']->value['defaultname'];?>
" <?php if ($_smarty_tpl->tpl_vars['topMenu']->value['active']) {?>class="active" <?php }?>><?php echo $_smarty_tpl->tpl_vars['topMenu']->value['aname'];?>
</a>
                            <?php } else { ?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['topMenu']->value['link'];?>
" <?php if ($_smarty_tpl->tpl_vars['topMenu']->value['active']) {?>class="active" <?php }?>><?php echo $_smarty_tpl->tpl_vars['topMenu']->value['aname'];?>
</a>
                            <?php }?>
                        <?php }?>
                    </li>
                <?php }?>
            <?php } ?>
                

        </ul>
    </div>
    <?php }} ?>
