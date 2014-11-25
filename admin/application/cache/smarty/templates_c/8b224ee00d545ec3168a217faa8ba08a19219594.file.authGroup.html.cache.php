<?php /* Smarty version Smarty-3.1.18, created on 2014-11-18 17:05:24
         compiled from "D:\wamp\Apache2.2\www\tpgy\admin\static\views\user\authGroup.html" */ ?>
<?php /*%%SmartyHeaderCode:12420546b0bd458c1f8-61557448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b224ee00d545ec3168a217faa8ba08a19219594' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\user\\authGroup.html',
      1 => 1416301412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12420546b0bd458c1f8-61557448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'doAuth' => 0,
    'state' => 0,
    'gid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_546b0bd4618de3_72631460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b0bd4618de3_72631460')) {function content_546b0bd4618de3_72631460($_smarty_tpl) {?><style type="text/css" media="screen">
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


  function doAuthGroupsh(){
        var url = "<?php if (isset($_smarty_tpl->tpl_vars['doAuth']->value)) {?><?php echo $_smarty_tpl->tpl_vars['doAuth']->value;?>
<?php }?>";
        var gid = $('#gid').val();
        var status = $("input[type=radio]:checked").val();

        $.post(url,{gid:gid,status:status},function(res){
            if(res.state == '20000'){
                ui.success('审核成功！');
                ui.box.close();
                window.location.reload(true);
                
            }else{
                ui.error('审核失败！');
                ui.box.close();
               window.location.reload(true);
            }
        },'json');
    }
 </script>

<div  id='movegroup' class="pop-movegroup">
<dl>
    <dt>请选择审核状态：</dt>
    <dd>
        
        <label><input name="state" type="radio" value="-1" <?php if (isset($_smarty_tpl->tpl_vars['state']->value)&&$_smarty_tpl->tpl_vars['state']->value==-1) {?>checked<?php }?>>未通过</label>
        <label><input name="state" type="radio" value="0" <?php if ($_smarty_tpl->tpl_vars['state']->value==0) {?>checked<?php }?>>正常</label>
        <label><input name="state" type="radio" value="1" <?php if (isset($_smarty_tpl->tpl_vars['state']->value)&&$_smarty_tpl->tpl_vars['state']->value==1) {?>checked<?php }?>>待审核</label>
        <label><input name="state" type="radio" value="2" <?php if (isset($_smarty_tpl->tpl_vars['state']->value)&&$_smarty_tpl->tpl_vars['state']->value==2) {?>checked<?php }?>>草稿箱</label>
    
    </dd>
    <dd class="center">
        <input type="hidden" id='gid' value="<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
">
        <input type="button" class="btn_b mr10" value="确定" onclick="doAuthGroupsh();">
        <input type="button" class="btn_w" value="取消" onclick="ui.box.close()">
    </dd>
</dl>
 </div>

 <?php }} ?>
