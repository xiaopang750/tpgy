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
  'variables' => 
  array (
    'doRoleGroup' => 0,
    'role' => 0,
    'vo' => 0,
    'gid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_547198178f5753_73906610',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547198178f5753_73906610')) {function content_547198178f5753_73906610($_smarty_tpl) {?><style type="text/css" media="screen">
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
        var url = "/admin/index.php/post/user/doAuthRoleGroup";
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
        
                             <label><input name="rid[]" type="checkbox" value="1" checked>超级管理</label>
        
                      <label><input name="rid[]" type="checkbox" value="5" >数据管理</label>
        
                      <label><input name="rid[]" type="checkbox" value="7" >用户管理</label>
        
                      <label><input name="rid[]" type="checkbox" value="6" >内容管理</label>
        
                      
    </dd>
    <dd class="center">
        <input type="hidden" id='gid' value="9">
        <input type="button" class="btn_b mr10" value="确定" onclick="doAuthRoleGroupsh();">
        <input type="button" class="btn_w" value="取消" onclick="ui.box.close()">
    </dd>
</dl>
 </div>

 <?php }} ?>
