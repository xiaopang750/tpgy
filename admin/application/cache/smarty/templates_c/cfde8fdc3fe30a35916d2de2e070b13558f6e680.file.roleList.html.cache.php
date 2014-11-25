<?php /* Smarty version Smarty-3.1.18, created on 2014-11-20 10:05:21
         compiled from "D:\wamp\Apache2.2\www\tpgy\admin\static\views\user\roleList.html" */ ?>
<?php /*%%SmartyHeaderCode:27378546d4c619a1ea8-94086554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfde8fdc3fe30a35916d2de2e070b13558f6e680' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\user\\roleList.html',
      1 => 1416301511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27378546d4c619a1ea8-94086554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'doAutoRoleList' => 0,
    'nodeback' => 0,
    'vo' => 0,
    'vv' => 0,
    'rid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_546d4c61a5ce79_85357736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546d4c61a5ce79_85357736')) {function content_546d4c61a5ce79_85357736($_smarty_tpl) {?><style type="text/css" media="screen">
    .pop-movegroup {
        width: 400px;
        color: #535353;
        padding: 15px;
        }

    .pop-movegroup dd {
        line-height: 18px;
        padding: 10px 20px;
        overflow: hidden;
        }
    .center {
        text-align: center;
        }
</style>


<script type="text/javascript">


  function doAuthRoleListsh(){
        var url = "<?php if (isset($_smarty_tpl->tpl_vars['doAutoRoleList']->value)) {?><?php echo $_smarty_tpl->tpl_vars['doAutoRoleList']->value;?>
<?php }?>";
        var rid = $('#rid').val();
        var status = $("input[type=checkbox]:checked");
		var len = status.length;
		var expl = new Array();
		for( var i=0;i<len;i++ ){
			expl.push($(status[i]).val());
		}
		nid = expl.join(',');  
        $.post(url,{rid:rid,nid:nid},function(res){
            if(res.state == '20000'){
                ui.success('角色权限分配成功！');
                ui.box.close();
                window.location.reload(true);
                
            }else{
                ui.error('角色权限分配失败！');
                ui.box.close();
               window.location.reload(true);
            }
        },'json');
    }
 </script>

<div  id='movegroup' class="pop-movegroup">
<dl>

    <?php if (isset($_smarty_tpl->tpl_vars['nodeback']->value)&&$_smarty_tpl->tpl_vars['nodeback']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nodeback']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['vo']->key;
?>
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
                 <?php }?>
            </dd>
        <?php } ?>
    <?php }?>
    <dd class="center">
        <input type="hidden" id='rid' value="<?php echo $_smarty_tpl->tpl_vars['rid']->value;?>
">
        <input type="button" class="btn_b mr10" value="确定" onclick="doAuthRoleListsh();">
        <input type="button" class="btn_w" value="取消" onclick="ui.box.close()">
    </dd>
</dl>
 </div>

 <?php }} ?>
