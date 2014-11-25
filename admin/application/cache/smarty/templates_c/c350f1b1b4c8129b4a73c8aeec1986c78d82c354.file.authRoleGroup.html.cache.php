<?php /* Smarty version Smarty-3.1.18, created on 2014-11-23 16:17:27
         compiled from "D:\wamp\Apache2.2\www\tpgy\admin\static\views\user\authRoleGroup.html" */ ?>
<?php /*%%SmartyHeaderCode:25645547198177d3859-88702075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c350f1b1b4c8129b4a73c8aeec1986c78d82c354' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\user\\authRoleGroup.html',
      1 => 1416301455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25645547198177d3859-88702075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'doRoleGroup' => 0,
    'role' => 0,
    'vo' => 0,
    'gid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5471981786c717_49384995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5471981786c717_49384995')) {function content_5471981786c717_49384995($_smarty_tpl) {?><style type="text/css" media="screen">
    .pop-movegroup {
        width: 400px;
        color: #535353;
        padding: 15px;
        }

    .pop-movegroup dd {
        line-height: 18px;
        padding: 0 0 10px;
        overflow: hidden;
        }
    .center {
        text-align: center;
        }
</style>


<script type="text/javascript">


  function doAuthRoleGroupsh(){
        var url = "<?php if (isset($_smarty_tpl->tpl_vars['doRoleGroup']->value)) {?><?php echo $_smarty_tpl->tpl_vars['doRoleGroup']->value;?>
<?php }?>";
        var gid = $('#gid').val();
        var status = $("input[type=checkbox]:checked");
		var len = status.length;
		var expl = new Array();
		for( var i=0;i<len;i++ ){
			expl.push($(status[i]).val());
		}
		status = expl.join(',');
        $.post(url,{gid:gid,status:status},function(res){
            if(res.state == '20000'){
                ui.success('角色分组成功！');
                ui.box.close();
                window.location.reload(true);
                
            }else{
                ui.error('角色分组失败！');
                ui.box.close();
               window.location.reload(true);
            }
        },'json');
    }
 </script>

<div  id='movegroup' class="pop-movegroup">
<dl>
    <dt>角色组：</dt>
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
    
    </dd>
    <dd class="center">
        <input type="hidden" id='gid' value="<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
">
        <input type="button" class="btn_b mr10" value="确定" onclick="doAuthRoleGroupsh();">
        <input type="button" class="btn_w" value="取消" onclick="ui.box.close()">
    </dd>
</dl>
 </div>

 <?php }} ?>
