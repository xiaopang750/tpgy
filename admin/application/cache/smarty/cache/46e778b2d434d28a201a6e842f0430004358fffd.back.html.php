<?php /*%%SmartyHeaderCode:261915471a6e2d88636-07080718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46e778b2d434d28a201a6e842f0430004358fffd' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\node\\back.html',
      1 => 1415203552,
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
  'nocache_hash' => '261915471a6e2d88636-07080718',
  'variables' => 
  array (
    'html' => 0,
    'addBackNode' => 0,
    'data' => 0,
    'vo' => 0,
    'editBackNode' => 0,
    'delBackNode' => 0,
    'backNodeStatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5471a6e3058be6_59755425',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5471a6e3058be6_59755425')) {function content_5471a6e3058be6_59755425($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
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
  <div class="page_tit">后台节点列表</div>
  <div class="Toolbar_inbox">
  	<div class="page right"></div>
	<a href="/admin/index.php/node/editAddBackNode" class="btn_a"><span>添加节点</span></a>
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
    <th class="line_l">方法</th>
    <th class="line_l">外链</th>
    <th class="line_l">隐藏</th>
    <th class="line_l">排序</th>
    <th class="line_l">操作</th>
  </tr>
    		  <tr overstyle='on' id="node_1">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="1"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>首页</td>
		<td>admin</td>
	    <td>首页</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_1">显示</td>
	    <td>1</td>
	   	<td>
			<a href="/admin/index.php/node/editAddBackNode?nid=1">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(1);">删除</a>
	    	<a href="javascript:void(0);" onclick="backNodeStauts(1,1,this);">隐藏</a>
	    	
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_5">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="5"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>++++桌面</td>
		<td>admin</td>
	    <td>首页</td>
	    <td>panel</td>
	    <td>内链</td>
	    <td id="hidden_5">显示</td>
	    <td>1</td>
	   	<td>
			<a href="/admin/index.php/node/editAddBackNode?nid=5">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(5);">删除</a>
	    	<a href="javascript:void(0);" onclick="backNodeStauts(5,1,this);">隐藏</a>
	    	
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_2">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="2"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>全局</td>
		<td>global</td>
	    <td>首页</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_2">显示</td>
	    <td>2</td>
	   	<td>
			<a href="/admin/index.php/node/editAddBackNode?nid=2">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(2);">删除</a>
	    	<a href="javascript:void(0);" onclick="backNodeStauts(2,1,this);">隐藏</a>
	    	
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_3">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="3"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>内容</td>
		<td>content</td>
	    <td>首页</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_3">显示</td>
	    <td>3</td>
	   	<td>
			<a href="/admin/index.php/node/editAddBackNode?nid=3">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(3);">删除</a>
	    	<a href="javascript:void(0);" onclick="backNodeStauts(3,1,this);">隐藏</a>
	    	
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_11">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="11"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>++++前台新闻</td>
		<td>news</td>
	    <td>前台新闻</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_11">显示</td>
	    <td>1</td>
	   	<td>
			<a href="/admin/index.php/node/editAddBackNode?nid=11">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(11);">删除</a>
	    	<a href="javascript:void(0);" onclick="backNodeStauts(11,1,this);">隐藏</a>
	    	
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_4">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="4"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>用户</td>
		<td>user</td>
	    <td>首页</td>
	    <td>index</td>
	    <td>内链</td>
	    <td id="hidden_4">显示</td>
	    <td>4</td>
	   	<td>
			<a href="/admin/index.php/node/editAddBackNode?nid=4">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(4);">删除</a>
	    	<a href="javascript:void(0);" onclick="backNodeStauts(4,1,this);">隐藏</a>
	    	
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_6">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="6"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>++++后台用户</td>
		<td>user</td>
	    <td>后台用户</td>
	    <td>backUser</td>
	    <td>内链</td>
	    <td id="hidden_6">显示</td>
	    <td>1</td>
	   	<td>
			<a href="/admin/index.php/node/editAddBackNode?nid=6">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(6);">删除</a>
	    	<a href="javascript:void(0);" onclick="backNodeStauts(6,1,this);">隐藏</a>
	    	
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_7">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="7"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>++++后台用户组</td>
		<td>user</td>
	    <td>后台用户组</td>
	    <td>group</td>
	    <td>内链</td>
	    <td id="hidden_7">显示</td>
	    <td>2</td>
	   	<td>
			<a href="/admin/index.php/node/editAddBackNode?nid=7">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(7);">删除</a>
	    	<a href="javascript:void(0);" onclick="backNodeStauts(7,1,this);">隐藏</a>
	    	
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_8">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="8"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>++++后台角色</td>
		<td>user</td>
	    <td>后台角色</td>
	    <td>role</td>
	    <td>内链</td>
	    <td id="hidden_8">显示</td>
	    <td>3</td>
	   	<td>
			<a href="/admin/index.php/node/editAddBackNode?nid=8">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(8);">删除</a>
	    	<a href="javascript:void(0);" onclick="backNodeStauts(8,1,this);">隐藏</a>
	    	
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_9">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="9"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>++++前台节点</td>
		<td>node</td>
	    <td>前台节点</td>
	    <td>fore</td>
	    <td>内链</td>
	    <td id="hidden_9">显示</td>
	    <td>4</td>
	   	<td>
			<a href="/admin/index.php/node/editAddBackNode?nid=9">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(9);">删除</a>
	    	<a href="javascript:void(0);" onclick="backNodeStauts(9,1,this);">隐藏</a>
	    	
		</td>
	  </tr>
  		  <tr overstyle='on' id="node_10">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="10"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td>++++后台节点</td>
		<td>node</td>
	    <td>后台节点</td>
	    <td>back</td>
	    <td>内链</td>
	    <td id="hidden_10">显示</td>
	    <td>5</td>
	   	<td>
			<a href="/admin/index.php/node/editAddBackNode?nid=10">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(10);">删除</a>
	    	<a href="javascript:void(0);" onclick="backNodeStauts(10,1,this);">隐藏</a>
	    	
		</td>
	  </tr>
  	    </table>

  </div>
  <div class="list_btm">选择：<a href="javascript:void(0)">全部</a> - <a href="#">反选</a> - <a href="#">不选</a></div>
  <div class="Toolbar_inbox">
	<div class="page right"></div>
    <a href="/admin/index.php/node/editAddBackNode" class="btn_a"><span>添加节点</span></a>
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

		var url = "/admin/index.php/post/node/delBackNode";
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
	 *@parma int nid
	 *@parma int type 1是否隐藏 2是否可见
	 **/
	function backNodeStauts(nid,type,vb){
		var url = "/admin/index.php/post/node/backNodeStatus";
		$.post(url,{nid:nid,type:type},function(res){

			if(type == 1){
				$('#hidden_'+nid).html(res.data.mes);
			}else if(type == 2){
          		$('#guest_'+nid).html(res.data.mes);
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
