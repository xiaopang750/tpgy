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
  'unifunc' => 'content_546d4c61ab5b12_95573357',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546d4c61ab5b12_95573357')) {function content_546d4c61ab5b12_95573357($_smarty_tpl) {?><style type="text/css" media="screen">
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
        var url = "/admin/index.php/post/user/doAuthRoleList";
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

                        <dt>首页</dt>
            <dd>
                                                            <label><input name="nid[]" type="checkbox" value="5" checked>桌面</label>
                                                 </dd>
                    <dt>全局</dt>
            <dd>
                            </dd>
                    <dt>内容</dt>
            <dd>
                            </dd>
                    <dt>用户</dt>
            <dd>
                                                            <label><input name="nid[]" type="checkbox" value="6" checked>后台用户</label>
                                            <label><input name="nid[]" type="checkbox" value="7" checked>后台用户组</label>
                                            <label><input name="nid[]" type="checkbox" value="8" checked>后台角色</label>
                                            <label><input name="nid[]" type="checkbox" value="9" checked>前台节点</label>
                                            <label><input name="nid[]" type="checkbox" value="10" checked>后台节点</label>
                                                 </dd>
                <dd class="center">
        <input type="hidden" id='rid' value="1">
        <input type="button" class="btn_b mr10" value="确定" onclick="doAuthRoleListsh();">
        <input type="button" class="btn_w" value="取消" onclick="ui.box.close()">
    </dd>
</dl>
 </div>

 <?php }} ?>
