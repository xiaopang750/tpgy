<?php /* Smarty version Smarty-3.1.18, created on 2014-11-25 08:39:36
         compiled from "D:\wamp\Apache2.2\www\tpgy\admin\static\views\admin\panel.html" */ ?>
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
  ),
  'nocache_hash' => '34405473cfc8059d35-90481009',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_5473cfc81759a6_81882779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473cfc81759a6_81882779')) {function content_5473cfc81759a6_81882779($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<script>
function fold(index) {
  	$('#app_'+index).slideToggle('fast');
}
</script>
<div id="container" class="so_main">
    <div class="page_tit">欢迎使用<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
    <div class="form2">
        <h4>提示：点击标题可以折叠栏目</h4>
      <?php if (isset($_smarty_tpl->tpl_vars["id"])) {$_smarty_tpl->tpl_vars["id"] = clone $_smarty_tpl->tpl_vars["id"];
$_smarty_tpl->tpl_vars["id"]->value = "0"; $_smarty_tpl->tpl_vars["id"]->nocache = null; $_smarty_tpl->tpl_vars["id"]->scope = 0;
} else $_smarty_tpl->tpl_vars["id"] = new Smarty_variable("0", null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['channel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channel']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channel']->key => $_smarty_tpl->tpl_vars['channel']->value) {
$_smarty_tpl->tpl_vars['channel']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['channel']->key;
?>
            <?php if (isset($_smarty_tpl->tpl_vars["index"])) {$_smarty_tpl->tpl_vars["index"] = clone $_smarty_tpl->tpl_vars["index"];
$_smarty_tpl->tpl_vars["index"]->value = $_smarty_tpl->tpl_vars['id']->value++; $_smarty_tpl->tpl_vars["index"]->nocache = null; $_smarty_tpl->tpl_vars["index"]->scope = 0;
} else $_smarty_tpl->tpl_vars["index"] = new Smarty_variable($_smarty_tpl->tpl_vars['id']->value++, null, 0);?>
         
            <h3 onclick="fold('<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h3>
            <div id="app_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
            <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['channel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['vo']->key;
?>
                <dl><dt><strong><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
：</strong></dt><dd><?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
</dd></dl>
		    <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('../footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
