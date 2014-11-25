<?php /* Smarty version Smarty-3.1.18, created on 2014-11-18 22:31:31
         compiled from "D:\wamp\Apache2.2\www\tpgy\admin\static\views\user\group_add_edit.html" */ ?>
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
  ),
  'nocache_hash' => '14077546b5843cfad46-45695079',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_546b5843e0f9b5_77359469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b5843e0f9b5_77359469')) {function content_546b5843e0f9b5_77359469($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<div class="so_main">
  <div class="page_tit"><?php if (isset($_smarty_tpl->tpl_vars['type']->value)&&$_smarty_tpl->tpl_vars['type']->value=='edit') {?>编辑用户<?php } else { ?>添加用户<?php }?></div>
  <form method="post" action="<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value) {?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php }?>">
  <div class="form2">
    <dl class="lineD">
      <dt>用户组名：</dt>
      <dd>
        <input name="title" id="title" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?>"><span>*</span>
        <p>用户组中文名</p>
    </dl>
	
    <dl class="lineD">
      <dt>用户组英文名：</dt>
      <dd>
         <input name="entitle" id="entitle" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['entitle']->value)) {?><?php echo $_smarty_tpl->tpl_vars['entitle']->value;?>
<?php }?>"><span>*</span>
        <p>用户组英文名</p>
    </dl>

    <dl class="lineD">
      <dt>所属角色：</dt>
      <dd>
        <?php if (isset($_smarty_tpl->tpl_vars['role']->value)&&$_smarty_tpl->tpl_vars['role']->value) {?>
          <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['role']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['vo']->key;
?>
            <label><input name="rid[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['rid'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['vo']->value['active'])&&$_smarty_tpl->tpl_vars['vo']->value['active']) {?>checked<?php }?>><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</label>
        
          <?php } ?>
        <?php }?>
         <p>所属角色：</p>
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
      <input type='hidden' name='gid' value='<?php if (isset($_smarty_tpl->tpl_vars['gid']->value)) {?><?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
<?php }?>'>
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  </form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('../footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
