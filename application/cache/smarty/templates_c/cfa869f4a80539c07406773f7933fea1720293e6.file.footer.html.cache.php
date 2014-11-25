<?php /* Smarty version Smarty-3.1.18, created on 2014-11-25 17:02:00
         compiled from "D:\wamp\Apache2.2\www\tpgy\static\views\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:2999254744588883ad4-20441798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfa869f4a80539c07406773f7933fea1720293e6' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\static\\views\\footer.html',
      1 => 1416905983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2999254744588883ad4-20441798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'bootMenu' => 0,
    'bootKey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5474458890aae5_49177795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5474458890aae5_49177795')) {function content_5474458890aae5_49177795($_smarty_tpl) {?>
    <div class="footer">
        <div class="footer_cont">
            <div class="footer_contLeft">
                <?php  $_smarty_tpl->tpl_vars['bootMenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bootMenu']->_loop = false;
 $_smarty_tpl->tpl_vars['bootKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['bottomMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bootMenu']->key => $_smarty_tpl->tpl_vars['bootMenu']->value) {
$_smarty_tpl->tpl_vars['bootMenu']->_loop = true;
 $_smarty_tpl->tpl_vars['bootKey']->value = $_smarty_tpl->tpl_vars['bootMenu']->key;
?>

                    <?php if (isset($_smarty_tpl->tpl_vars['bootMenu']->value['islink'])) {?>
                        <?php if ($_smarty_tpl->tpl_vars['bootMenu']->value['islink']==0) {?>
                            <a href="/<?php echo $_smarty_tpl->tpl_vars['bootMenu']->value['aenname'];?>
/<?php echo $_smarty_tpl->tpl_vars['bootMenu']->value['defaultname'];?>
"><?php echo $_smarty_tpl->tpl_vars['bootMenu']->value['aname'];?>
</a>
                            <?php if ($_smarty_tpl->tpl_vars['menu']->value['bottomCount']!=$_smarty_tpl->tpl_vars['bootKey']->value) {?>
                                <span>|</span>
                            <?php }?>
                        <?php } else { ?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['bootMenu']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['bootMenu']->value['aname'];?>
</a>
                            <?php if ($_smarty_tpl->tpl_vars['menu']->value['bottomCount']!=$_smarty_tpl->tpl_vars['bootKey']->value) {?>
                                <span>|</span>
                            <?php }?>

                        <?php }?>
                    <?php }?>
                    
                <?php } ?>
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
