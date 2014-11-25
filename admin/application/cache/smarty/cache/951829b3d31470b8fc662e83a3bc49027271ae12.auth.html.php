<?php /*%%SmartyHeaderCode:12972546b14aed8abd3-46813585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '951829b3d31470b8fc662e83a3bc49027271ae12' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\user\\auth.html',
      1 => 1416035070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12972546b14aed8abd3-46813585',
  'variables' => 
  array (
    'doAuth' => 0,
    'state' => 0,
    'uid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_546b14aee5b292_07353315',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b14aee5b292_07353315')) {function content_546b14aee5b292_07353315($_smarty_tpl) {?><style type="text/css" media="screen">
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


  function doAuth(){
        var url = "/admin/index.php/post/user/doAuth";
        var uid = $('#uid').val();
        var status = $("input[type=radio]:checked").val();

        $.post(url,{uid:uid,status:status},function(res){
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
    <dt>请选择审核状态:</dt>
    <dd>
        
        <label><input name="state" type="radio" value="-1" >未通过</label>
        <label><input name="state" type="radio" value="0" >正常</label>
        <label><input name="state" type="radio" value="1" >待审核</label>
        <label><input name="state" type="radio" value="2" checked>草稿箱</label>
    
    </dd>
    <dd class="center">
        <input type="hidden" id='uid' value="5">
        <input type="button" class="btn_b mr10" value="确定" onclick="doAuth();">
        <input type="button" class="btn_w" value="取消" onclick="ui.box.close()">
    </dd>
</dl>
 </div>

 <?php }} ?>
