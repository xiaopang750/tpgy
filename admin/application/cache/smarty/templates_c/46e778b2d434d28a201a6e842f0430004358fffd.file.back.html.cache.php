<?php /* Smarty version Smarty-3.1.18, created on 2014-11-23 17:20:34
         compiled from "D:\wamp\Apache2.2\www\tpgy\admin\static\views\node\back.html" */ ?>
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
  ),
  'nocache_hash' => '261915471a6e2d88636-07080718',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_5471a6e2e67f41_88760769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5471a6e2e67f41_88760769')) {function content_5471a6e2e67f41_88760769($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="so_main">
  <!-------- 节点列表 -------->
  <div class="page_tit">后台节点列表</div>
  <div class="Toolbar_inbox">
  	<div class="page right"><?php echo $_smarty_tpl->tpl_vars['html']->value;?>
</div>
	<a href="<?php echo $_smarty_tpl->tpl_vars['addBackNode']->value;?>
" class="btn_a"><span>添加节点</span></a>
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
  <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
  	<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['vo']->key;
?>
	  <tr overstyle='on' id="node_<?php echo $_smarty_tpl->tpl_vars['vo']->value['nid'];?>
">
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['nid'];?>
"></td>
	    <!--<td>{$vo.id}</td>-->
	    <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['module_name'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['module'];?>
</td>
	    <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['action_name'];?>
</td>
	    <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['action'];?>
</td>
	    <td><?php if ($_smarty_tpl->tpl_vars['vo']->value['is_app_navi']==0) {?>内链<?php } else { ?>外链<?php }?></td>
	    <td id="hidden_<?php echo $_smarty_tpl->tpl_vars['vo']->value['nid'];?>
"><?php if ($_smarty_tpl->tpl_vars['vo']->value['ishidden']==0) {?>显示<?php } else { ?>隐藏<?php }?></td>
	    <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['sort'];?>
</td>
	   	<td>
			<a href="<?php echo $_smarty_tpl->tpl_vars['editBackNode']->value;?>
<?php echo $_smarty_tpl->tpl_vars['vo']->value['nid'];?>
">编辑</a>
	    	<a href="javascript:void(0);" onclick="deleteNode(<?php echo $_smarty_tpl->tpl_vars['vo']->value['nid'];?>
);">删除</a>
	    	<a href="javascript:void(0);" onclick="backNodeStauts(<?php echo $_smarty_tpl->tpl_vars['vo']->value['nid'];?>
,1,this);"><?php if ($_smarty_tpl->tpl_vars['vo']->value['ishidden']==0) {?>隐藏<?php } else { ?>显示<?php }?></a>
	    	
		</td>
	  </tr>
  	<?php } ?>
  <?php }?>
  </table>

  </div>
  <div class="list_btm">选择：<a href="javascript:void(0)">全部</a> - <a href="#">反选</a> - <a href="#">不选</a></div>
  <div class="Toolbar_inbox">
	<div class="page right"><?php echo $_smarty_tpl->tpl_vars['html']->value;?>
</div>
    <a href="<?php echo $_smarty_tpl->tpl_vars['addBackNode']->value;?>
" class="btn_a"><span>添加节点</span></a>
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

		var url = "<?php echo $_smarty_tpl->tpl_vars['delBackNode']->value;?>
";
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
		var url = "<?php echo $_smarty_tpl->tpl_vars['backNodeStatus']->value;?>
";
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
<?php echo $_smarty_tpl->getSubTemplate ('../footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
