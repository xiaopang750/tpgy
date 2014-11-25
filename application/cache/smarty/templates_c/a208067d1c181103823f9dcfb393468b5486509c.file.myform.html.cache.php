<?php /* Smarty version Smarty-3.1.18, created on 2014-10-26 12:14:13
         compiled from "D:\wamp\Apache2.2\www\tpgy\static\views\home\myform.html" */ ?>
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
  ),
  'nocache_hash' => '23607544c7515ce85b0-00406182',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544c7515da6669_75393695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544c7515da6669_75393695')) {function content_544c7515da6669_75393695($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <div class="g_main">
         <<?php ?>?php echo validation_errors(); ?<?php ?>>

        <<?php ?>?php echo form_open('form'); ?<?php ?>>

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
 
<?php echo $_smarty_tpl->getSubTemplate ('../footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
