<?php /* Smarty version Smarty-3.1.18, created on 2014-11-23 17:17:44
         compiled from "D:\wamp\Apache2.2\www\tpgy\admin\static\views\node\back_edit_add.html" */ ?>
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
  ),
  'nocache_hash' => '150245471a638815114-78873466',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_5471a6389852e2_91904672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5471a6389852e2_91904672')) {function content_5471a6389852e2_91904672($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<div class="so_main">
  <div class="page_tit"><?php if ($_smarty_tpl->tpl_vars['types']->value=='edit') {?>编辑节点<?php } else { ?>添加节点<?php }?></div>
  
  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['dourl']->value;?>
">
  
  <div class="form2">

    <dl class="lineD">
      <dt>所属节点：</dt>
      <dd>
        <select name="pid">
            <option value="0"> - </option>
            <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['vo']->key;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['nid'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['pid']->value)&&$_smarty_tpl->tpl_vars['vo']->value['nid']==$_smarty_tpl->tpl_vars['pid']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['vo']->value['module_name'];?>
</option>
            <?php } ?>
        </select>
      </dd>
    </dl>

    <dl class="lineD">
      <dt>应用名：</dt>
      <dd>
        <input name="module_name" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['module_name']->value)) {?><?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
<?php }?>"> *
        <p>如: “博客”或“首页”</p>
	  </dd>
    </dl>
	
    <dl class="lineD">
      <dt>模块名：</dt>
      <dd>
        <input name="module" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['module']->value)) {?><?php echo $_smarty_tpl->tpl_vars['module']->value;?>
<?php }?>"> *
        <p>即Action名，如: “System”或“User”或“*”，“*”表示当前应用的所有模块</p>
	  </dd>
    </dl>

    <dl class="lineD">
      <dt>方法名：</dt>
      <dd>
        <input name="action_name" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['action_name']->value)) {?><?php echo $_smarty_tpl->tpl_vars['action_name']->value;?>
<?php }?>">
        <p>
        	即Action类中的方法名，如: “deleteBlog”或“*”，“*”表示所有方法<br/>
			注：当模块名为“*”时，方法名将被忽略；其它时必填
		</p>
	  </dd>
    </dl>

     <dl class="lineD">
      <dt>方法：</dt>
      <dd>
        <input name="action" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['action']->value)) {?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php }?>">
        <p>
          即Action类中的方法名，如: “deleteBlog”或“*”，“*”表示所有方法<br/>
      注：当模块名为“*”时，方法名将被忽略；其它时必填
    </p>
    </dd>
    </dl>

     <dl class="lineD">
      <dt>ico图标：</dt>
      <dd>
        <input name="ico" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['ico']->value)) {?><?php echo $_smarty_tpl->tpl_vars['ico']->value;?>
<?php }?>">
        <p>
    </p>
    </dd>
    </dl>

    <dl class="lineD">
      <dt>是否隐藏：</dt>
      <dd>
        <label><input name="ishidden" type="radio" value="1" <?php if (!isset($_smarty_tpl->tpl_vars['ishidden']->value)||$_smarty_tpl->tpl_vars['ishidden']->value==1) {?>checked<?php }?>>隐藏</label>
        <label><input name="ishidden" type="radio" value="0" <?php if (isset($_smarty_tpl->tpl_vars['ishidden']->value)&&$_smarty_tpl->tpl_vars['ishidden']->value==0) {?>checked<?php }?>>显示</label>
      </dd>
    </dl>

    <dl class="lineD">
      <dt>打开发式：</dt>
      <dd>
         <input name="target" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['target']->value)) {?><?php echo $_smarty_tpl->tpl_vars['target']->value;?>
<?php }?>"> *
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
        <label><input name="is_app_navi" type="radio" value="1" <?php if (isset($_smarty_tpl->tpl_vars['is_app_navi']->value)&&$_smarty_tpl->tpl_vars['is_app_navi']->value==1) {?>checked<?php }?>>外链</label>
        <label><input name="is_app_navi" type="radio" value="0" <?php if (!isset($_smarty_tpl->tpl_vars['is_app_navi']->value)||$_smarty_tpl->tpl_vars['is_app_navi']->value==0) {?>checked<?php }?>>内链</label>
    </dd>
    </dl>
    
    <dl class="lineD" id='link' <?php if (!isset($_smarty_tpl->tpl_vars['is_app_navi']->value)||$_smarty_tpl->tpl_vars['is_app_navi']->value==0) {?>style="display:none;"<?php }?>>
      <dt>外链地址：</dt>
      <dd>
        <input name="url" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['url']->value)) {?><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php } else { ?>http://<?php }?>">
        <p></p>
    </dd>
    </dl>

    <dl class="lineD">
      <dt>排序：</dt>
      <dd>
        <input name="sort" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['sort']->value)) {?><?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
<?php }?>">
        <p>
          即菜单显示的先后顺序
        </p>
    </dd>
    </dl>
	
    <div class="page_btm">
      <input type="hidden" name='nid' value="<?php if ($_smarty_tpl->tpl_vars['nid']->value) {?><?php echo $_smarty_tpl->tpl_vars['nid']->value;?>
<?php }?>">
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

<?php echo $_smarty_tpl->getSubTemplate ('../header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
