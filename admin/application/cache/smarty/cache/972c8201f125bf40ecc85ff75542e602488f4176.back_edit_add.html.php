<?php /*%%SmartyHeaderCode:150245471a638815114-78873466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '972c8201f125bf40ecc85ff75542e602488f4176' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\node\\back_edit_add.html',
      1 => 1415201419,
      2 => 'file',
    ),
    '0d25d6519787234b13246213cf95ae5d70439335' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\header.html',
      1 => 1415008244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150245471a638815114-78873466',
  'variables' => 
  array (
    'types' => 0,
    'dourl' => 0,
    'data' => 0,
    'vo' => 0,
    'pid' => 0,
    'module_name' => 0,
    'module' => 0,
    'action_name' => 0,
    'action' => 0,
    'ico' => 0,
    'ishidden' => 0,
    'target' => 0,
    'is_app_navi' => 0,
    'url' => 0,
    'sort' => 0,
    'nid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5471a638ad7d97_38358130',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5471a638ad7d97_38358130')) {function content_5471a638ad7d97_38358130($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理后台</title>
<link href="http://www.tpgy.com/admin/static/css/style.css" rel="stylesheet" type="text/css">
<link href="http://www.tpgy.com/admin/static/css/ui.code.css" rel="stylesheet">
<script src="http://www.tpgy.com/admin/static/js/ui.code.js" type="text/javascript"></script>
</head>

</head>
<body>
<div class="so_main">
  <div class="page_tit">添加节点</div>
  
  <form method="post" action="/admin/index.php/node/doAddEditBackNode">
  
  <div class="form2">

    <dl class="lineD">
      <dt>所属节点：</dt>
      <dd>
        <select name="pid">
            <option value="0"> - </option>
                          <option value="1" >首页</option>
                          <option value="5" >++++桌面</option>
                          <option value="2" >全局</option>
                          <option value="3" >内容</option>
                          <option value="4" >用户</option>
                          <option value="6" >++++后台用户</option>
                          <option value="7" >++++后台用户组</option>
                          <option value="8" >++++后台角色</option>
                          <option value="9" >++++前台节点</option>
                          <option value="10" >++++后台节点</option>
                    </select>
      </dd>
    </dl>

    <dl class="lineD">
      <dt>应用名：</dt>
      <dd>
        <input name="module_name" type="text" value=""> *
        <p>如: “博客”或“首页”</p>
	  </dd>
    </dl>
	
    <dl class="lineD">
      <dt>模块名：</dt>
      <dd>
        <input name="module" type="text" value=""> *
        <p>即Action名，如: “System”或“User”或“*”，“*”表示当前应用的所有模块</p>
	  </dd>
    </dl>

    <dl class="lineD">
      <dt>方法名：</dt>
      <dd>
        <input name="action_name" type="text" value="">
        <p>
        	即Action类中的方法名，如: “deleteBlog”或“*”，“*”表示所有方法<br/>
			注：当模块名为“*”时，方法名将被忽略；其它时必填
		</p>
	  </dd>
    </dl>

     <dl class="lineD">
      <dt>方法：</dt>
      <dd>
        <input name="action" type="text" value="">
        <p>
          即Action类中的方法名，如: “deleteBlog”或“*”，“*”表示所有方法<br/>
      注：当模块名为“*”时，方法名将被忽略；其它时必填
    </p>
    </dd>
    </dl>

     <dl class="lineD">
      <dt>ico图标：</dt>
      <dd>
        <input name="ico" type="text" value="">
        <p>
    </p>
    </dd>
    </dl>

    <dl class="lineD">
      <dt>是否隐藏：</dt>
      <dd>
        <label><input name="ishidden" type="radio" value="1" checked>隐藏</label>
        <label><input name="ishidden" type="radio" value="0" >显示</label>
      </dd>
    </dl>

    <dl class="lineD">
      <dt>打开发式：</dt>
      <dd>
         <input name="target" type="text" value=""> *
        <p>
          _blank -- 在新窗口中打开链接</br>
          _parent -- 在父窗体中打开链接 </br>
          _self -- 在当前窗体打开链接,此为默认值 
        </p>
      </dd>
    </dl>

    <dl class="lineD">
      <dt>是否应用内部导航：</dt>
      <dd>
        <label><input name="is_app_navi" type="radio" value="1" >外链</label>
        <label><input name="is_app_navi" type="radio" value="0" checked>内链</label>
    </dd>
    </dl>
    
    <dl class="lineD" id='link' style="display:none;">
      <dt>外链地址：</dt>
      <dd>
        <input name="url" type="text" value="http://">
        <p></p>
    </dd>
    </dl>

    <dl class="lineD">
      <dt>排序：</dt>
      <dd>
        <input name="sort" type="text" value="">
        <p>
          即菜单显示的先后顺序
        </p>
    </dd>
    </dl>
	
    <div class="page_btm">
      <input type="hidden" name='nid' value="">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  </form>
</div>

<script type="text/javascript">
	var subNodeHtml = '<br/><input name="subAction[]" type="text" value="" style="margin-bottom:5px">&nbsp; ';
	function addSubNode() {

		$('#addSubNode').before(subNodeHtml);
    
	}

  $("input[name='is_app_navi']").click(function(){
     var is_app_navi = $(this).val();
     if(is_app_navi == 1){
        $("#link").show();
     }else{
        $("#link").hide();
     }
  });
</script>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理后台</title>
<link href="http://www.tpgy.com/admin/static/css/style.css" rel="stylesheet" type="text/css">
<link href="http://www.tpgy.com/admin/static/css/ui.code.css" rel="stylesheet">
<script src="http://www.tpgy.com/admin/static/js/ui.code.js" type="text/javascript"></script>
</head>

</head>
<body><?php }} ?>
