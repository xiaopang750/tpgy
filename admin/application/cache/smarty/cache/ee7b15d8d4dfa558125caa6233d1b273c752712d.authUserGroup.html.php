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
  'variables' => 
  array (
    'doUserGroup' => 0,
    'group' => 0,
    'vo' => 0,
    'uid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_546b75791232e2_09730961',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b75791232e2_09730961')) {function content_546b75791232e2_09730961($_smarty_tpl) {?><style type="text/css" media="screen">
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
        var url = "/admin/index.php/post/user/doAuthUserGroup";
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
        
                             <label><input name="gid[]" type="checkbox" value="9" >首席执行官</label>
        
                      <label><input name="gid[]" type="checkbox" value="8" >首席运营</label>
        
                      <label><input name="gid[]" type="checkbox" value="11" checked>首席技术官</label>
        
                      <label><input name="gid[]" type="checkbox" value="12" >首席财务官</label>
        
                      
    </dd>
    <dd class="center">
        <input type="hidden" id='uid' value="5">
        <input type="button" class="btn_b mr10" value="确定" onclick="doAuthUserGroupsh();">
        <input type="button" class="btn_w" value="取消" onclick="ui.box.close()">
    </dd>
</dl>
 </div>

 <?php }} ?>
