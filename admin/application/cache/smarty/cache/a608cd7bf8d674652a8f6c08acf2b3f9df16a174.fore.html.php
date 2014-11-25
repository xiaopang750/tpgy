<?php /*%%SmartyHeaderCode:17655546d4b5a95e0e0-71210781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a608cd7bf8d674652a8f6c08acf2b3f9df16a174' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\node\\fore.html',
      1 => 1415203631,
      2 => 'file',
    ),
    '0d25d6519787234b13246213cf95ae5d70439335' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\header.html',
      1 => 1415008244,
      2 => 'file',
    ),
    '40aea10b4f50ff944cab2792e41cf6f9654db78d' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\footer.html',
      1 => 1415062779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17655546d4b5a95e0e0-71210781',
  'variables' => 
  array (
    'html' => 0,
    'addForeNode' => 0,
    'data' => 0,
    'vo' => 0,
    'editForeNode' => 0,
    'delForeNode' => 0,
    'foreNodeStatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_546d4b5abaf5f6_20535584',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546d4b5abaf5f6_20535584')) {function content_546d4b5abaf5f6_20535584($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
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
  <!-------- 节点列表 -------->
  <div class="page_tit">前台节点列表</div>
  <div class="Toolbar_inbox">
  	<div class="page right"></div>
	<a href="/admin/index.php/node/editAddForeNode" class="btn_a"><span>添加节点</span></a>
	<!-- <a href="javascript:void(0);" class="btn_a" onclick="deleteNode();"><span>删除节点</span></a> -->
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<!-- <input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label> -->
	</th>
    <!--<th class="line_l">ID</th>-->
    <th class="line_l">应用名</th>
    <th class="line_l">模块名</th>
    <th class="line_l">方法名</th>
    <th class="line_l">外链</th>
    <th class="line_l">隐藏</th>
    <th class="line_l">类型</th>
    <th class="line_l">游客可见</th>
    <th class="line_l">排序</th>
    <th class="line_l">操作</th>
  </tr>
    		  <tr overstyle='on' id="node_1">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="1"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>首页</td>
		<td>home</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_1">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_1">可见</td>
	    <td>1</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=1">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(1);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(1,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(1,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_2">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="2"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>我来求助</td>
		<td>release</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_2">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_2">可见</td>
	    <td>2</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=2">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(2);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(2,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(2,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_3">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="3"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>我要助人</td>
		<td>help</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_3">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_3">可见</td>
	    <td>3</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=3">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(3);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(3,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(3,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_4">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="4"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>志愿报名</td>
		<td>volunteer</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_4">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_4">可见</td>
	    <td>4</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=4">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(4);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(4,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(4,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_5">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="5"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>公益项目</td>
		<td>project</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_5">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_5">可见</td>
	    <td>5</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=5">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(5);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(5,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(5,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_12">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="12"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>++++农村教师培训</td>
		<td>training</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_12">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_12">可见</td>
	    <td>1</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=12">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(12);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(12,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(12,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_13">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="13"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>++++支教活动</td>
		<td>activities</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_13">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_13">可见</td>
	    <td>2</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=13">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(13);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(13,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(13,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_14">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="14"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>++++捐衣捐物</td>
		<td>donate</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_14">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_14">可见</td>
	    <td>3</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=14">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(14);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(14,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(14,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_15">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="15"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>++++公益宣传</td>
		<td>propaganda</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_15">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_15">可见</td>
	    <td>4</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=15">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(15);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(15,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(15,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_6">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="6"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>透明监督</td>
		<td>supervision</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_6">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_6">可见</td>
	    <td>6</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=6">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(6);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(6,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(6,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_7">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="7"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>公益网店</td>
		<td>shop</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_7">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_7">可见</td>
	    <td>7</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=7">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(7);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(7,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(7,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_8">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="8"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>视频图片</td>
		<td>video_photo</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_8">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_8">可见</td>
	    <td>8</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=8">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(8);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(8,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(8,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_9">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="9"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>意见建议</td>
		<td>suggestions</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_9">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_9">可见</td>
	    <td>9</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=9">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(9);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(9,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(9,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_10">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="10"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>关于我们</td>
		<td>about</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_10">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_10">可见</td>
	    <td>10</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=10">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(10);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(10,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(10,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_16">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="16"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>++++联系我们</td>
		<td>about</td>
	    <td>index#lxwm</td>
	    <td>内链</td>
	    <td id="hidden_16">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_16">可见</td>
	    <td>1</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=16">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(16);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(16,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(16,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_17">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="17"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>++++公益项目</td>
		<td>about</td>
	    <td>index#gyxm</td>
	    <td>内链</td>
	    <td id="hidden_17">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_17">可见</td>
	    <td>2</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=17">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(17);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(17,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(17,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_18">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="18"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>++++理事会成员</td>
		<td>about</td>
	    <td>index#lsh</td>
	    <td>内链</td>
	    <td id="hidden_18">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_18">可见</td>
	    <td>3</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=18">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(18);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(18,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(18,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_19">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="19"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>++++近年来组织的公益活动</td>
		<td>about</td>
	    <td>index#jlgy</td>
	    <td>内链</td>
	    <td id="hidden_19">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_19">可见</td>
	    <td>4</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=19">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(19);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(19,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(19,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_11">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="11"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>论坛</td>
		<td>bbs</td>
	    <td>index</td>
	    <td>外链</td>
	    <td id="hidden_11">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_11">可见</td>
	    <td>11</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=11">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(11);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(11,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(11,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_20">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="20"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>公益事业</td>
		<td>cause</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_20">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_20">可见</td>
	    <td>12</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=20">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(20);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(20,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(20,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_21">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="21"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>捐赠方式</td>
		<td>donations</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_21">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_21">可见</td>
	    <td>13</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=21">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(21);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(21,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(21,2,this);">不可见</a>
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_22">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="22"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>建议投诉</td>
		<td>complaint</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_22">显示</td>
	    <td>
	    	个人	    </td>
	    <td id="guest_22">可见</td>
	    <td>14</td>
	    <td>
			<a href="/admin/index.php/node/editAddForeNode?aid=22">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(22);">删除</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(22,1,this);">隐藏</a>
	    	<a href="javascript:void(0);" onclick="foreNodeStauts(22,2,this);">不可见</a>
		</td>
	  </tr>
  	    </table>

  </div>
  <div class="list_btm">选择：<a href="javascript:void(0)">全部</a> - <a href="#">反选</a> - <a href="#">不选</a></div>
  <div class="Toolbar_inbox">
	<div class="page right"></div>
    <a href="/admin/index.php/node/editAddForeNode" class="btn_a"><span>添加节点</span></a>
	<!-- <a href="javascript:void(0);" class="btn_a" onclick="deleteNode();"><span>删除节点</span></a> -->
  </div>
</div>

<script>
	//鼠标移动表格效果
	$(document).ready(function(){
		$("tr[overstyle='on']").hover(
		  function () {
		    $(this).addClass("bg_hover");
		  },
		  function () {
		    $(this).removeClass("bg_hover");
		  }
		);
	});
	
	function checkon(o){
		if( o.checked == true ){
			$(o).parents('tr').addClass('bg_on') ;
		}else{
			$(o).parents('tr').removeClass('bg_on') ;
		}
	}
	
	function checkAll(o){
		if( o.checked == true ){
			$('input[name="checkbox"]').attr('checked','true');
			$('tr[overstyle="on"]').addClass("bg_on");
		}else{
			$('input[name="checkbox"]').removeAttr('checked');
			$('tr[overstyle="on"]').removeClass("bg_on");
		}
	}

	//获取已选择的ID数组
	function getChecked() {
		var ids = new Array();
		$.each($('table input:checked'), function(i, n){
			ids.push( $(n).val() );
		});
		return ids;
	}

	//删除节点
	function deleteNode(ids) {

		var url = "/admin/index.php/post/node/delForeNode";
		var length = 0;
		if(ids) {
		    length = 1;         
		}else {
		    ids    = getChecked();
		    length = ids.length;
		    ids    = ids.toString();
		}
		if(ids=='') {
		    ui.error('请先选择一个节点');
		    return ;
		}
		if(ids == '' || !confirm('删除成功后将无法恢复，确认继续？')) return false;
		
		$.post(url, {ids:ids}, function(res){
			if(res.state == '20000') {
				ids = ids.toString().split(',');
				for(i = 0; i < ids.length; i++) {
					$('#node_'+ids[i]).remove();
				}
				ui.success(res.msg);
			}else {
				ui.error(res.msg);
			}
		},'json');
	}
	
	/*//搜索用户
	var isSearchHidden = <neq name="type" value="searchUser">1<else/>0</neq>;
	function searchUser() {
		if(isSearchHidden == 1) {
			$("#searchUser_div").slideDown("fast");
			$(".searchUser_action").html("搜索完毕");
			isSearchHidden = 0;
		}else {
			$("#searchUser_div").slideUp("fast");
			$(".searchUser_action").html("搜索用户");
			isSearchHidden = 1;
		}
	}*/
	/**
	 *@author liuguangping
	 *@parma int aid
	 *@parma int type 1是否隐藏 2是否可见
	 **/
	function foreNodeStauts(aid,type,vb){
		var url = "/admin/index.php/post/node/foreNodeStatus";
		$.post(url,{aid:aid,type:type},function(res){

			if(type == 1){
				$('#hidden_'+aid).html(res.data.mes);
			}else if(type == 2){
          		$('#guest_'+aid).html(res.data.mes);
			}

			if(res.state == 20000){
				$(vb).html(res.data.domes);
				ui.success(res.msg);
			}else{
				ui.error(res.msg);
			}
		},'json');
	}
</script>
</body>
</html><?php }} ?>
