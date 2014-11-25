<?php /* Smarty version Smarty-3.1.18, created on 2014-11-18 17:51:03
         compiled from "D:\wamp\Apache2.2\www\tpgy\admin\static\views\user\role_add_edit.html" */ ?>
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
  ),
  'nocache_hash' => '32242546b1687032685-05404477',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_546b1687177b31_26143921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b1687177b31_26143921')) {function content_546b1687177b31_26143921($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<div class="so_main">
  <div class="page_tit"><?php if (isset($_smarty_tpl->tpl_vars['type']->value)&&$_smarty_tpl->tpl_vars['type']->value=='edit') {?>编辑用户<?php } else { ?>添加用户<?php }?></div>
  <form method="post" action="<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value) {?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php }?>">
  <div class="form2">
    <dl class="lineD">
      <dt>角色名：</dt>
      <dd>
        <input name="title" id="title" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?>"><span>*</span>
        <p>角色中文名</p>
    </dl>
	
    <dl class="lineD">
      <dt>角色英文名：</dt>
      <dd>
         <input name="entitle" id="entitle" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['entitle']->value)) {?><?php echo $_smarty_tpl->tpl_vars['entitle']->value;?>
<?php }?>"><span>*</span>
        <p>角色英文名</p>
    </dl>

  	<dl class="lineD">
        <dt>用户状态：</dt>
        <dd>
          <label><input name="state" type="radio" value="-1" <?php if (!isset($_smarty_tpl->tpl_vars['state']->value)||$_smarty_tpl->tpl_vars['state']->value==-1||!$_smarty_tpl->tpl_vars['state']->value) {?>checked<?php }?>>未通过</label>
          <label><input name="state" type="radio" value="0" <?php if (isset($_smarty_tpl->tpl_vars['state']->value)&&$_smarty_tpl->tpl_vars['state']->value==0) {?>checked<?php }?>>正常</label>
          <label><input name="state" type="radio" value="1" <?php if (isset($_smarty_tpl->tpl_vars['state']->value)&&$_smarty_tpl->tpl_vars['state']->value==1) {?>checked<?php }?>>待审核</label>
          <label><input name="state" type="radio" value="2" <?php if (isset($_smarty_tpl->tpl_vars['state']->value)&&$_smarty_tpl->tpl_vars['state']->value==2) {?>checked<?php }?>>草稿箱</label>
      </dl>
	 
  	 <dl>
        <dt>所属权限：</dt>
        <dd>&nbsp;
        </dd>

      </dl>


      <?php if (isset($_smarty_tpl->tpl_vars['nodeback']->value)&&$_smarty_tpl->tpl_vars['nodeback']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nodeback']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['vo']->key;
?>
        <dl>
            <dt><?php echo $_smarty_tpl->tpl_vars['vo']->value['module_name'];?>
</dt>
            <dd>
                <?php if (isset($_smarty_tpl->tpl_vars['vo']->value['children'])&&$_smarty_tpl->tpl_vars['vo']->value['children']) {?>
                    <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vo']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                        <label><input name="nid[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['nid'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['vv']->value['active'])&&$_smarty_tpl->tpl_vars['vv']->value['active']==1) {?>checked<?php }?>><?php echo $_smarty_tpl->tpl_vars['vv']->value['module_name'];?>
</label>
                    <?php } ?>
                 <?php } else { ?>
                  &nbsp;
                 <?php }?>
            </dd>
          </dl>
        <?php } ?>
      <?php }?>

     


	
    <div class="page_btm">
      <input type='hidden' name='rid' value='<?php if (isset($_smarty_tpl->tpl_vars['rid']->value)) {?><?php echo $_smarty_tpl->tpl_vars['rid']->value;?>
<?php }?>'>
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  </form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('../footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
