<?php /* Smarty version Smarty-3.1.18, created on 2014-11-23 17:20:42
         compiled from "D:\wamp\Apache2.2\www\tpgy\admin\static\views\user\group.html" */ ?>
<?php /*%%SmartyHeaderCode:4425471a6ea1df128-28171561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7ada6a68e1600c34d210489214f9e1f891c61d0' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\user\\group.html',
      1 => 1416301209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4425471a6ea1df128-28171561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'addGroup' => 0,
    'data' => 0,
    'vo' => 0,
    'delGroup' => 0,
    'authUrl' => 0,
    'authRole' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5471a6ea2f4470_83848801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5471a6ea2f4470_83848801')) {function content_5471a6ea2f4470_83848801($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<div class="so_main">
  <div class="page_tit">用户组管理</div>
  <!-------- 搜索用户 -------->
 <!--  <div id="searchUser_div" <neq name="type" value="searchUser">style="display:none;"</neq>>
  	<div class="page_tit">搜索用户 [ <a href="javascript:void(0);" onclick="searchUser();">隐藏</a> ]</div>
	
	<div class="form2">
	<form method="post" action="{:U('admin/User/doSearchUser')}">
    <dl class="lineD">
      <dt>Email：</dt>
      <dd>
        <input name="email" id="email" type="text" value="{$email}">
        <p>用户进行登录的帐号,多个时使用英文的","分割</p>
      </dd>
    </dl>
	
	<php>if($type != 'searchUser') $uid = '';</php>
    <dl class="lineD">
      <dt>用户ID：</dt>
      <dd>
        <input name="uid" id="uid" type="text" value="{$uid}">
        <p>用户ID,多个时使用英文的","分割</p>
      </dd>
    </dl>
	
    <dl class="lineD">
      <dt>昵称：</dt>
      <dd>
        <input name="uname" id="uname" type="text" value="{$uname}">
        <p>多个时使用英文的","分割</p>
      </dd>
    </dl>
	 
	<dl>
      <dt>用户组：</dt>
      <dd>
      	<a href="javascript:void(0);" onclick="folder('user_group', this);"><php>echo empty($user_group_id) ? '展开' : '收起';</php></a>
        <div id="search_user_group" <php>if(empty($user_group_id)){</php>style="display:none;"<php>}</php>>
			{:W('SelectUserGroup', array('user_group_id'=>$user_group_id))}
		</div>
      </dd>
    </dl>
    
    <dl class="lineD">
      <dt>性别：</dt>
      <dd>
      	<input name="sex" type="radio" value="" <eq name="sex" value="">checked</eq>>全部
        <input name="sex" type="radio" value="1" <eq name="sex" value="1">checked</eq>>男
        <input name="sex" type="radio" value="0" <eq name="sex" value="0">checked</eq>>女
      </dd>
    </dl>
	
	<dl class="lineD">
      <dt>是否激活：</dt>
      <dd>
      	<input name="is_active" type="radio" value="" <eq name="is_active" value="">checked</eq>>全部
        <input name="is_active" type="radio" value="1" <eq name="is_active" value="1">checked</eq>>是
        <input name="is_active" type="radio" value="0" <eq name="is_active" value="0">checked</eq>>否
      </dd>
    </dl>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
	</form>
  </div>
  </div> -->
  
  <!-- ------ 用户列表 ------ -->
  <div class="Toolbar_inbox">
  	<div class="page right"><?php echo $_smarty_tpl->tpl_vars['html']->value;?>
</div>
	<a href="<?php echo $_smarty_tpl->tpl_vars['addGroup']->value;?>
" class="btn_a"><span>添加用户组</span></a>
	<!-- <a href="javascript:void(0);" class="btn_a" onclick="searchUser();">
		<span class="searchUser_action"><neq name="type" value="searchUser">搜索用户<else/>搜索完毕</neq></span>
	</a>
  	<a href="javascript:void(0);" class="btn_a" onclick="changeUserGroup();"><span>转移用户组</span></a>
	<a href="javascript:void(0);" class="btn_a" onclick="deleteUser();"><span>删除用户</span></a> -->
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<!-- <input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label> -->
	</th>
    <th class="line_l" style="80px">ID</th>
    <th class="line_l" style="300px">用户组名称</th>
    <!-- <php>/*<th class="line_l">部门信息</th>*/</php> -->
    <th class="line_l">用户组英文名称</th>
    <th class="line_l">注册时间</th>
    <th class="line_l">状态</th>
    <th class="line_l">操作</th>
  </tr>
<!--   <volist id="vo" name="data"> -->
  <?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?><?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['vo']->key;
?>
	  <tr overstyle='on' id="user_<?php echo $_smarty_tpl->tpl_vars['vo']->value['gid'];?>
">
	  
	    <td><input type="checkbox" name="checkbox" id="checkbox2" onclick="checkon(this)" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['gid'];?>
"></td>
	    <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['gid'];?>
</td>
	    <td>
			<!-- <div style="float:left;margin-right:10px;border:1px solid #8098A8;height:30px;padding:1px;width:30px;"><img src="{$vo.uid|getUserFace='s'}>" width="30"></div> -->
			<div style="float:left"><space uid="<?php echo $_smarty_tpl->tpl_vars['vo']->value['gid'];?>
" class="fn" target="_blank"><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</space></div></td>
		<!-- <php>/*<td>
			<php>if(empty($vo['department'])){</php>暂无部门信息<php>}</php>
			<volist name="vo['department']" id="dept">
				{$dept['dept_title']}<br />
			</volist>
		</td>*/</php> -->
	    <td>
			<?php echo $_smarty_tpl->tpl_vars['vo']->value['entitle'];?>

		</td>
	    <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['ctime'];?>
</td>
	    <td>
	    	<?php if ($_smarty_tpl->tpl_vars['vo']->value['state']==-1) {?>未通过
	    	<?php } elseif ($_smarty_tpl->tpl_vars['vo']->value['state']==0) {?>正常
	    	<?php } elseif ($_smarty_tpl->tpl_vars['vo']->value['state']==1) {?>待审核
	    	<?php } else { ?>
	    		删除
	    	<?php }?>
	    </td>
	    <td>
			<a href="<?php echo $_smarty_tpl->tpl_vars['addGroup']->value;?>
<?php echo $_smarty_tpl->tpl_vars['vo']->value['gid'];?>
">编辑</a>
		
	    	<!-- <a href="javascript:void(0);" onclick="deleteUser(<?php echo $_smarty_tpl->tpl_vars['vo']->value['gid'];?>
);">删除</a> -->
			
	    	<a href="javascript:void(0);" onclick="doAuth(<?php echo $_smarty_tpl->tpl_vars['vo']->value['gid'];?>
)">审核</a>

	    	<a href="javascript:void(0);" onclick="doRole(<?php echo $_smarty_tpl->tpl_vars['vo']->value['gid'];?>
)">分配角色</a>
		</td>
	  </tr>
  <!-- </volist> -->
 <?php } ?><?php }?>
  </table>
  </div>

  <div class="Toolbar_inbox">
	<div class="page right"><?php echo $_smarty_tpl->tpl_vars['html']->value;?>
</div>
	<a href="<?php echo $_smarty_tpl->tpl_vars['addGroup']->value;?>
" class="btn_a"><span>添加用户组</span></a>
	<!-- <a href="javascript:void(0);" class="btn_a" onclick="searchUser();">
		<span class="searchUser_action"><neq name="type" value="searchUser">搜索用户<else/>搜索完毕</neq></span>
	</a>
  	<a href="javascript:void(0);" class="btn_a" onclick="changeUserGroup();"><span>转移用户组</span></a>
	<a href="javascript:void(0);" class="btn_a" onclick="deleteUser();"><span>删除用户</span></a> -->
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

	//获取已选择用户的ID数组
	function getChecked() {
		var uids = new Array();
		$.each($('table input:checked'), function(i, n){
			uids.push( $(n).val() );
		});
		return uids;
	}

	//转移部门
	function changeDepartment(uids) {
		var uids = uids ? uids : getChecked();
		uids = uids.toString();
		if(!uids) {
			ui.error('请先选择用户');
			return false;
		}

		if(!confirm('转移成功后，已选择用户原来的部门信息将被覆盖，确定继续？')) return false;
		
		ui.box.load("{:U('admin/User/changeDepartment')}&uids="+uids, {title:'转移部门'});
	}
	
	//转移用户组
	function changeUserGroup(uids) {
		var uids = uids ? uids : getChecked();
		uids = uids.toString();
		if(!uids) {
			ui.error('请先选择用户');
			return false;
		}

		if(!confirm('转移成功后，已选择用户原来的用户组信息将被覆盖，确定继续？')) return false;
		
		ui.box.load("{:U('admin/User/changeUserGroup')}&uids="+uids, {title:'转移用户组'});
	}
	
	//删除用户
	function deleteUser(uid) {
		var ulr = "<?php if (isset($_smarty_tpl->tpl_vars['delGroup']->value)) {?><?php echo $_smarty_tpl->tpl_vars['delGroup']->value;?>
<?php }?>";
		var length = 0;
		if(uid) {
		    length = 1;         
		}else {
		    uid    = getChecked();
		    length = uid.length;
		    uid    = uid.toString();
		}
		if(uid=='') {
		    ui.error('请先选择一个用户');
		    return ;
		}
		if(uid == '' || !confirm('删除成功后将无法恢复，确认继续？')) return false;
		
		$.post(ulr, {gid:uid}, function(res){
			if(res.state == '20000') {
				uid = uid.toString().split(',');
				for(i = 0; i < uid.length; i++) {
					$('#user_'+uid[i]).remove();
				}
				ui.success('操作成功');
			}else {
				ui.error('操作失败');
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
	
	function folder(type, _this) {
		$('#search_'+type).slideToggle('fast');
		if ($(_this).html() == '展开') {
			$(_this).html('收起');
		}else {
			$(_this).html('展开');
		}
		
	}

	function doAuth(status){
		var url = "<?php if (isset($_smarty_tpl->tpl_vars['authUrl']->value)) {?><?php echo $_smarty_tpl->tpl_vars['authUrl']->value;?>
"+status+"<?php }?>";
		ui.box.load(url,{title:'用户组审核'});
	}
	function doRole(status){
		var url = "<?php if (isset($_smarty_tpl->tpl_vars['authRole']->value)) {?><?php echo $_smarty_tpl->tpl_vars['authRole']->value;?>
"+status+"<?php }?>";
		ui.box.load(url,{title:'用户组角色分组'});
	}
	
</script>

<?php echo $_smarty_tpl->getSubTemplate ('../header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
