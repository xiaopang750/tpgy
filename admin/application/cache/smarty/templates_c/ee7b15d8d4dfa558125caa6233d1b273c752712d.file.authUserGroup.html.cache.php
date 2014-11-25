<?php /* Smarty version Smarty-3.1.18, created on 2014-11-19 00:36:09
         compiled from "D:\wamp\Apache2.2\www\tpgy\admin\static\views\user\authUserGroup.html" */ ?>
<?php /*%%SmartyHeaderCode:6346546b75790386b5-90322782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee7b15d8d4dfa558125caa6233d1b273c752712d' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\user\\authUserGroup.html',
      1 => 1416301476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6346546b75790386b5-90322782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'doUserGroup' => 0,
    'group' => 0,
    'vo' => 0,
    'uid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_546b75790cb901_41242595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b75790cb901_41242595')) {function content_546b75790cb901_41242595($_smarty_tpl) {?><style type="text/css" media="screen">
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


  function doAuthUserGroupsh(){
        var url = "<?php if (isset($_smarty_tpl->tpl_vars['doUserGroup']->value)) {?><?php echo $_smarty_tpl->tpl_vars['doUserGroup']->value;?>
<?php }?>";
        var uid = $('#uid').val();
        var status = $("input[type=checkbox]:checked");
		var len = status.length;
		var expl = new Array();
		for( var i=0;i<len;i++ ){
			expl.push($(status[i]).val());
		}
		status = expl.join(',');
        $.post(url,{uid:uid,status:status},function(res){
            if(res.state == '20000'){
                ui.success('分组成功！');
                ui.box.close();
                window.location.reload(true);
                
            }else{
                ui.error('分组失败！');
                ui.box.close();
               window.location.reload(true);
            }
        },'json');
    }
 </script>

<div  id='movegroup' class="pop-movegroup">
<dl>
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
    
    </dd>
    <dd class="center">
        <input type="hidden" id='uid' value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
        <input type="button" class="btn_b mr10" value="确定" onclick="doAuthUserGroupsh();">
        <input type="button" class="btn_w" value="取消" onclick="ui.box.close()">
    </dd>
</dl>
 </div>

 <?php }} ?>
