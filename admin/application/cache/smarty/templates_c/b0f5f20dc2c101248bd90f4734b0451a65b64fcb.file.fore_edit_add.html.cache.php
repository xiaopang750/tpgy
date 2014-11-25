<?php /* Smarty version Smarty-3.1.18, created on 2014-11-20 09:29:07
         compiled from "D:\wamp\Apache2.2\www\tpgy\admin\static\views\node\fore_edit_add.html" */ ?>
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
  ),
  'nocache_hash' => '8073546d43e32d8547-67600106',
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
  'unifunc' => 'content_546d43e3517865_49636625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546d43e3517865_49636625')) {function content_546d43e3517865_49636625($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
              <option value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['aid'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['pid']->value)&&$_smarty_tpl->tpl_vars['vo']->value['aid']==$_smarty_tpl->tpl_vars['pid']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['vo']->value['aname'];?>
</option>
            <?php } ?>
        </select>
      </dd>
    </dl>

    <dl class="lineD">
      <dt>应用名：</dt>
      <dd>
        <input name="aname" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['aname']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aname']->value;?>
<?php }?>"> *
        <p>如: “博客”或“首页”</p>
	  </dd>
    </dl>
	
    <dl class="lineD">
      <dt>模块名：</dt>
      <dd>
        <input name="aenname" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['aenname']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aenname']->value;?>
<?php }?>"> *
        <p>即Action名，如: “System”或“User”或“*”，“*”表示当前应用的所有模块</p>
	  </dd>
    </dl>

    <dl class="lineD">
      <dt>方法名：</dt>
      <dd>
        <input name="defaultname" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['defaultname']->value)) {?><?php echo $_smarty_tpl->tpl_vars['defaultname']->value;?>
<?php }?>">
        <p>
        	即Action类中的方法名，如: “deleteBlog”或“*”，“*”表示所有方法<br/>
			注：当模块名为“*”时，方法名将被忽略；其它时必填
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
      <dt>显示位置：</dt>
      <dd>
        <label><input name="showtype" type="radio" value="1" <?php if (!isset($_smarty_tpl->tpl_vars['showtype']->value)||$_smarty_tpl->tpl_vars['showtype']->value==1) {?>checked<?php }?>>top</label>

        <label><input name="showtype" type="radio" value="2" <?php if (isset($_smarty_tpl->tpl_vars['showtype']->value)&&$_smarty_tpl->tpl_vars['showtype']->value==2) {?>checked<?php }?>>butoom</label>

         <label><input name="showtype" type="radio" value="3" <?php if (isset($_smarty_tpl->tpl_vars['showtype']->value)&&$_smarty_tpl->tpl_vars['showtype']->value==3) {?>checked<?php }?>>both</label>
      </dd>
    </dl>

    <dl class="lineD">
      <dt>类型：</dt>
      <dd>
        <select name="type">
            <?php  $_smarty_tpl->tpl_vars['vos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vos']->_loop = false;
 $_smarty_tpl->tpl_vars['keys'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['typeCatetory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vos']->key => $_smarty_tpl->tpl_vars['vos']->value) {
$_smarty_tpl->tpl_vars['vos']->_loop = true;
 $_smarty_tpl->tpl_vars['keys']->value = $_smarty_tpl->tpl_vars['vos']->key;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['type']->value)&&$_smarty_tpl->tpl_vars['keys']->value==$_smarty_tpl->tpl_vars['type']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['vos']->value;?>
</option>
            <?php } ?>
        </select>
      </dd>
    </dl>

    <dl class="lineD">
      <dt>是否游客可见：</dt>
      <dd>
         <label><input name="guest" type="radio" value="1" <?php if (!isset($_smarty_tpl->tpl_vars['guest']->value)||$_smarty_tpl->tpl_vars['guest']->value==1) {?>checked<?php }?>>可见</label>
        <label><input name="guest" type="radio" value="0" <?php if (isset($_smarty_tpl->tpl_vars['guest']->value)&&$_smarty_tpl->tpl_vars['guest']->value==0) {?>checked<?php }?>>不可见</label>
      </dd>
    </dl>
	
    <dl class="lineD">
      <dt>关键词：</dt>
      <dd>
        <input name="keywords" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['keywords']->value)) {?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php }?>">
        <p></p>
	  </dd>
    </dl>

    <dl class="lineD">
      <dt>是否应用内部导航：</dt>
      <dd>
        <label><input name="islink" type="radio" value="1" <?php if (isset($_smarty_tpl->tpl_vars['islink']->value)&&$_smarty_tpl->tpl_vars['islink']->value==1) {?>checked<?php }?>>外链</label>
        <label><input name="islink" type="radio" value="0" <?php if (!isset($_smarty_tpl->tpl_vars['islink']->value)||$_smarty_tpl->tpl_vars['islink']->value==0) {?>checked<?php }?>>内链</label>
    </dd>
    </dl>
    
    <dl class="lineD" id='link' <?php if (!isset($_smarty_tpl->tpl_vars['islink']->value)||$_smarty_tpl->tpl_vars['islink']->value==0) {?>style="display:none;"<?php }?>>
      <dt>外链地址：</dt>
      <dd>
        <input name="link" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['link']->value)) {?><?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php } else { ?>http://<?php }?>">
        <p></p>
    </dd>
    </dl>

    <dl class="lineD">
      <dt>排序：</dt>
      <dd>
        <input name="sx" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['sx']->value)) {?><?php echo $_smarty_tpl->tpl_vars['sx']->value;?>
<?php }?>">
        <p>
          即菜单显示的先后顺序
        </p>
    </dd>
    </dl>
	
    <div class="page_btm">
      <input type="hidden" name='aid' value="<?php if ($_smarty_tpl->tpl_vars['aid']->value) {?><?php echo $_smarty_tpl->tpl_vars['aid']->value;?>
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

  $("input[name='islink']").click(function(){
     var islink = $(this).val();
     if(islink == 1){
        $("#link").show();
     }else{
        $("#link").hide();
     }
  });
</script>

<?php echo $_smarty_tpl->getSubTemplate ('../header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
