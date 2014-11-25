<?php /*%%SmartyHeaderCode:15382547445ce588b39-30069891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8deb622c75ce858ef011992da44daa5bbd1a7d7a' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\admin\\static\\views\\admin\\login.html',
      1 => 1416905979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15382547445ce588b39-30069891',
  'variables' => 
  array (
    'title' => 0,
    'state' => 0,
    'meserror' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_547445ce73c081_38655597',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547445ce73c081_38655597')) {function content_547445ce73c081_38655597($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>太平公益——后台管理系统</title>
<link rel="stylesheet" href="http://www.tpgy.com/admin/static/css/style.default.css" type="text/css" />
<script type="text/javascript" src="http://www.tpgy.com/admin/static//js/jquery-1.10.2.min.js"></script>



<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="http://www.tpgy.com/admin/static/css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="http://www.tpgy.com/admin/static/css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="loginpage">

    <div class="loginbox">
        <div class="loginboxinner">
            
            <div class="logo">
                <h1><span>太平公益</span>管理系统</h1>
                <p>登录以进行管理</p>
            </div><!--logo-->
            <form id="loginForm" action="signIn" method="post" >
                <div id="showmsg">

                    <div class="notibar msgerror ">
                        <a class="close"></a>
                        <p>
                            
                                                      用户名或密码错误
                          
                        </p>
                    </div>
                   
                </div>
                <div class="username">
                    <div class="usernameinner">
                        <input type="text" name="username" id="username" />
                    </div>
                </div>
                
                <div class="password">
                    <div class="passwordinner">
                        <input type="password" name="password" id="password" />
                    </div>
                </div>
                
                <button  type="submit" id="loginBtn" >登录</button>
            
            </form>
            
        </div><!--loginboxinner-->
    </div><!--loginbox-->
<script script='text/javascript'>

    var oLgo = {

        checkname:function(){

            var username = $("#username").val();
            if(!username){
                var oMes = $("#showmsg").find('div');
    
                $(oMes[0]).fadeIn("normal");
                var objP = $(oMes[0]).find('p');
                $(objP[0]).html('用户名不能为空');
                return false;
            }
            return true;
        },
        close:function(){
            var oMes = $("#showmsg").find('div');
            $(oMes[0]).fadeOut("normal");
        }
        
    };
    (function(){
        $(document).on('click','.close',function(){
            oLgo.close();
        });
        $(document).on('submit','#loginForm',function(){

            return oLgo.checkname();

        });
    })();
</script>
</body>
</html><?php }} ?>
