<?php /*%%SmartyHeaderCode:8073546d43e32d8547-67600106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0f5f20dc2c101248bd90f4734b0451a65b64fcb' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\node\\fore_edit_add.html',
      1 => 1415187701,
      2 => 'file',
    ),
    '0d25d6519787234b13246213cf95ae5d70439335' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\header.html',
      1 => 1415008244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8073546d43e32d8547-67600106',
  'variables' => 
  array (
    'types' => 0,
    'dourl' => 0,
    'data' => 0,
    'vo' => 0,
    'pid' => 0,
    'aname' => 0,
    'aenname' => 0,
    'defaultname' => 0,
    'ishidden' => 0,
    'target' => 0,
    'showtype' => 0,
    'typeCatetory' => 0,
    'keys' => 0,
    'type' => 0,
    'vos' => 0,
    'guest' => 0,
    'keywords' => 0,
    'islink' => 0,
    'link' => 0,
    'sx' => 0,
    'aid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_546d43e3796685_06516438',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546d43e3796685_06516438')) {function content_546d43e3796685_06516438($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
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
  <div class="page_tit">编辑节点</div>
  
  <form method="post" action="/admin/index.php/node/doAddEditNode">
  
  <div class="form2">

    <dl class="lineD">
      <dt>所属节点：</dt>
      <dd>
        <select name="pid">
            <option value="0"> - </option>
                          <option value="1" >首页</option>
                          <option value="2" >我来求助</option>
                          <option value="3" >我要助人</option>
                          <option value="4" >志愿报名</option>
                          <option value="5" selected>公益项目</option>
                          <option value="12" >++++农村教师培训</option>
                          <option value="13" >++++支教活动</option>
                          <option value="14" >++++捐衣捐物</option>
                          <option value="15" >++++公益宣传</option>
                          <option value="6" >透明监督</option>
                          <option value="7" >公益网店</option>
                          <option value="8" >视频图片</option>
                          <option value="9" >意见建议</option>
                          <option value="10" >关于我们</option>
                          <option value="16" >++++联系我们</option>
                          <option value="17" >++++公益项目</option>
                          <option value="18" >++++理事会成员</option>
                          <option value="19" >++++近年来组织的公益活动</option>
                          <option value="11" >论坛</option>
                          <option value="20" >公益事业</option>
                          <option value="21" >捐赠方式</option>
                          <option value="22" >建议投诉</option>
                    </select>
      </dd>
    </dl>

    <dl class="lineD">
      <dt>应用名：</dt>
      <dd>
        <input name="aname" type="text" value="农村教师培训"> *
        <p>如: “博客”或“首页”</p>
	  </dd>
    </dl>
	
    <dl class="lineD">
      <dt>模块名：</dt>
      <dd>
        <input name="aenname" type="text" value="training"> *
        <p>即Action名，如: “System”或“User”或“*”，“*”表示当前应用的所有模块</p>
	  </dd>
    </dl>

    <dl class="lineD">
      <dt>方法名：</dt>
      <dd>
        <input name="defaultname" type="text" value="index">
        <p>
        	即Action类中的方法名，如: “deleteBlog”或“*”，“*”表示所有方法<br/>
			注：当模块名为“*”时，方法名将被忽略；其它时必填
		</p>
	  </dd>
    </dl>

    <dl class="lineD">
      <dt>是否隐藏：</dt>
      <dd>
        <label><input name="ishidden" type="radio" value="1" >隐藏</label>
        <label><input name="ishidden" type="radio" value="0" checked>显示</label>
      </dd>
    </dl>

    <dl class="lineD">
      <dt>打开发式：</dt>
      <dd>
         <input name="target" type="text" value="_blank"> *
        <p>
          _blank -- 在新窗口中打开链接</br>
          _parent -- 在父窗体中打开链接 </br>
          _self -- 在当前窗体打开链接,此为默认值 
        </p>
      </dd>
    </dl>

    <dl class="lineD">
      <dt>显示位置：</dt>
      <dd>
        <label><input name="showtype" type="radio" value="1" >top</label>

        <label><input name="showtype" type="radio" value="2" >butoom</label>

         <label><input name="showtype" type="radio" value="3" checked>both</label>
      </dd>
    </dl>

    <dl class="lineD">
      <dt>类型：</dt>
      <dd>
        <select name="type">
                          <option value="0" selected>个人</option>
                          <option value="1" >团体</option>
                          <option value="2" >太平公益</option>
                    </select>
      </dd>
    </dl>

    <dl class="lineD">
      <dt>是否游客可见：</dt>
      <dd>
         <label><input name="guest" type="radio" value="1" checked>可见</label>
        <label><input name="guest" type="radio" value="0" >不可见</label>
      </dd>
    </dl>
	
    <dl class="lineD">
      <dt>关键词：</dt>
      <dd>
        <input name="keywords" type="text" value="农村教师培训-太平公益官方网站">
        <p></p>
	  </dd>
    </dl>

    <dl class="lineD">
      <dt>是否应用内部导航：</dt>
      <dd>
        <label><input name="islink" type="radio" value="1" >外链</label>
        <label><input name="islink" type="radio" value="0" checked>内链</label>
    </dd>
    </dl>
    
    <dl class="lineD" id='link' style="display:none;">
      <dt>外链地址：</dt>
      <dd>
        <input name="link" type="text" value="空">
        <p></p>
    </dd>
    </dl>

    <dl class="lineD">
      <dt>排序：</dt>
      <dd>
        <input name="sx" type="text" value="1">
        <p>
          即菜单显示的先后顺序
        </p>
    </dd>
    </dl>
	
    <div class="page_btm">
      <input type="hidden" name='aid' value="12">
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

  $("input[name='islink']").click(function(){
     var islink = $(this).val();
     if(islink == 1){
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
