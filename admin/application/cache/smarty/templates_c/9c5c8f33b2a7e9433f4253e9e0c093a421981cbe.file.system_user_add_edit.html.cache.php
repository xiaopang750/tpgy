<?php /* Smarty version Smarty-3.1.18, created on 2014-11-20 10:04:49
         compiled from "D:\wamp\Apache2.2\www\tpgy\admin\static\views\user\system_user_add_edit.html" */ ?>
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
  ),
  'nocache_hash' => '23535546d4c41e7cd52-09131488',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_546d4c42096935_37982997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546d4c42096935_37982997')) {function content_546d4c42096935_37982997($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<div class="so_main">
  <div class="page_tit"><?php if (isset($_smarty_tpl->tpl_vars['type']->value)&&$_smarty_tpl->tpl_vars['type']->value=='edit') {?>编辑用户<?php } else { ?>添加用户<?php }?></div>
  <form method="post" action="<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value) {?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php }?>">
  <div class="form2">
    <dl class="lineD">
      <dt>用户名：</dt>
      <dd>
        <input name="username" id="username" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php }?>"><span>*</span>
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
        <input name="realname" id="realname" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?><?php echo $_smarty_tpl->tpl_vars['realname']->value;?>
<?php }?>"><span>*</span>
        <p>2-10位个中英文、数字、下划线和中划线组成</p>
    </dl>
    
    <dl class="lineD">
      <dt>是否是超级管理员：</dt>
      <dd>
        <label><input name="isadmin" type="radio" value="1" <?php if (!isset($_smarty_tpl->tpl_vars['isadmin']->value)||$_smarty_tpl->tpl_vars['isadmin']->value==1||!$_smarty_tpl->tpl_vars['isadmin']->value) {?>checked<?php }?>>否</label>
        <label><input name="isadmin" type="radio" value="0" <?php if (isset($_smarty_tpl->tpl_vars['isadmin']->value)&&$_smarty_tpl->tpl_vars['isadmin']->value==0) {?>checked<?php }?>>是</label>
        <p>是否是超级管理员</p>
    </dl>
    
    <dl class="lineD">
      <dt>性别：</dt>
      <dd>
        <label><input name="sex" type="radio" value="1" <?php if (!isset($_smarty_tpl->tpl_vars['isadmin']->value)||$_smarty_tpl->tpl_vars['sex']->value==1||!$_smarty_tpl->tpl_vars['sex']->value) {?>checked<?php }?>>男</label>
        <label><input name="sex" type="radio" value="0" <?php if (isset($_smarty_tpl->tpl_vars['isadmin']->value)&&$_smarty_tpl->tpl_vars['sex']->value==0) {?>checked<?php }?>>女</label>
    </dl>

    <dl class="lineD">
      <dt>用户组：</dt>
      <dd>
        <?php if (isset($_smarty_tpl->tpl_vars['group']->value)&&$_smarty_tpl->tpl_vars['group']->value) {?>
          <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['vo']->key;
?>
            <label><input name="gid[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['gid'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['vo']->value['active'])&&$_smarty_tpl->tpl_vars['vo']->value['active']) {?>checked<?php }?>><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</label>
        
          <?php } ?>
        <?php }?>
         <p>分配用户组</p>
    </dl>
	
	<dl class="lineD">
      <dt>用户状态：</dt>
      <dd>
        <label><input name="state" type="radio" value="-1" <?php if (!isset($_smarty_tpl->tpl_vars['state']->value)||$_smarty_tpl->tpl_vars['state']->value==-1||!$_smarty_tpl->tpl_vars['state']->value) {?>checked<?php }?>>未通过</label>
        <label><input name="state" type="radio" value="0" <?php if (isset($_smarty_tpl->tpl_vars['state']->value)&&$_smarty_tpl->tpl_vars['state']->value==0) {?>checked<?php }?>>正常</label>
        <label><input name="state" type="radio" value="1" <?php if (isset($_smarty_tpl->tpl_vars['state']->value)&&$_smarty_tpl->tpl_vars['state']->value==1) {?>checked<?php }?>>待审核</label>
        <label><input name="state" type="radio" value="2" <?php if (isset($_smarty_tpl->tpl_vars['state']->value)&&$_smarty_tpl->tpl_vars['state']->value==2) {?>checked<?php }?>>草稿箱</label>
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
      <input type='hidden' name='uid' value='<?php if (isset($_smarty_tpl->tpl_vars['uid']->value)) {?><?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
<?php }?>'>
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  </form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('../footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
