<?php /*%%SmartyHeaderCode:8669544a1d2c9f8969-24023374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a50716e2196e14fdba4b90f444a5b5d244602df' => 
    array (
      0 => 'D:\\Develop\\www\\tpgy\\static\\views\\release\\index.html',
      1 => 1414117335,
      2 => 'file',
    ),
    '2a68792981cf472af2f8343f7259770dce6f1380' => 
    array (
      0 => 'D:\\Develop\\www\\tpgy\\static\\views\\header.html',
      1 => 1414117368,
      2 => 'file',
    ),
    '6fb2efdff00cc3ce0d0032fef8d2f9e72ed440f5' => 
    array (
      0 => 'D:\\Develop\\www\\tpgy\\static\\views\\footer.html',
      1 => 1414069344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8669544a1d2c9f8969-24023374',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544a1d2cb42cd8_39649146',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a1d2cb42cd8_39649146')) {function content_544a1d2cb42cd8_39649146($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>首页 - 太平公益官方网站</title>
<link rel="stylesheet" href="http://www.tpgy.com/static/style/common.css">
<script src="http://www.tpgy.com/static/js/tool.js" type="text/javascript"></script>
<script src="http://www.tpgy.com/static/js/ready.js" type="text/javascript"></script>
<script src="http://www.tpgy.com/static/js/nav.js" type="text/javascript"></script>
<script src="http://www.tpgy.com/static/js/banner.js" type="text/javascript"></script>
<script src="http://www.tpgy.com/static/js/move.js" type="text/javascript"></script>
</head>

<body>
    <div class="header">
        <div class="header_cont">
            <h3>太平公益(原名 红铅笔)，欢迎您</h3>
            <div class="login_reg">
                <a href="javascript:;">登陆</a><span>|</span><a href="#">注册</a>
            </div>
        </div>
    </div>
    <div class="g_logo">
        <div class="logo"><a href="#">太平公益(原红铅笔)</a></div>
    </div>
    <div class="g_nav">
        <ul class="nav">
            <li><a href="/home/index" class="active">首页</a></li>
            <li><a href="/release/index">我来求助</a></li>
            <li><a href="#">我要助人</a></li>
            <li><a href="volunteer.html">志愿报名</a></li>
            <li>
                <a href="#" class="dropLink">公益项目<i class="trian"></i></a>
                <div class="nav_dropdown hide">
                    <i class="triangle"></i>
                    <dl>
                        <dd><a href="#">农村教师培训</a></dd>
                        <dd><a href="#">支教活动</a></dd>
                        <dd><a href="#">捐衣捐物</a></dd>
                        <dd><a href="#">公益宣传</a></dd>
                    </dl>
                </div>
            </li>
            <li><a href="supervision.html">透明监督</a></li>
            <li><a href="#">公益网店</a></li>
            <li><a href="video_photo.html">视频图片</a></li>
            <li><a href="suggestions.html">意见建议</a></li>
            <li>
                <a href="/about/index" class="dropLink">关于我们<i class="trian"></i></a>
                <div class="nav_dropdown hide">
                    <i class="triangle"></i>
                    <dl>
                        <dd><a href="/about/index#gywm">联系我们</a></dd>
                        <dd><a href="/about/index#gyxm">公益项目</a></dd>
                        <dd><a href="/about/index#lsh">理事会成员</a></dd>
                        <dd><a href="/about/index#jlgy">近年来组织的公益活动</a></dd>
                    </dl>
                </div>
            </li>
            <li><a href="#">论坛</a></li>
        </ul>
    </div>
    
    <div class="g_main">
        <div class="leftArea">
            <div class="tabBox">
                <ul class="tab_pills">
                    <li class="active"><a href="javascript:;">发布求助</a></li>
                </ul>
            </div>
            <div class="hr_10"></div>
            <h2 class="select_title">请选择您要申请的类别:</h2>
            <ul class="select_class">
            	<li><a href="#" class="active"><em></em><span>困难学生、<br>特殊儿童求助申请</span><i>已选择</i></a></li>
            	<li><a href="#"><em></em><span>农村学校求助申请</span><i>已选择</i></a></li>
            	<li class="select_last"><a href="#"><em></em><span>其他申请</span><i>已选择</i></a></li>
            </ul>
            <div class="release_info">
            	<h3>求助人基本信息：</h3>
            	<ul class="release_content">
            		<li>
            			<span class="release_name">姓名：</span>
						<div class="release_inputs">
							<input type="text">
						</div>
            		</li>
            		<li>
            			<span class="release_name">性别：</span>
          				<div class="release_sex">
          					<input type="radio" value="男" name="sex" id="release_radio1" checked><label for="release_radio1">男</label><input type="radio" value="女" name="sex" id="release_radio2"><label for="release_radio2">女</label>
          				</div>
            		</li>
            		<li>
           				<span class="release_name">出生年月：</span>
						<div class="release_inputs">
							<input type="text">
						</div>
           				<p>例如：1990-02-12</p>
            		</li>
            		<li>
            			<span class="release_name">父亲或母亲姓名：</span>
						<div class="release_inputs">
							<input type="text">
						</div>
            		</li>
            		<li>
            			<span class="release_name">父母电话号码：</span>
						<div class="release_inputs">
							<input type="text">
						</div>
            		</li>
            		<li>
            			<span class="release_name">邻居电话号码：</span>
						<div class="release_inputs">
							<input type="text">
						</div>
           				<p>父亲或母亲电话已填写的，可不填</p>
            		</li>
            		<li>
            			<span class="release_name">家庭详细地址：</span>
						<div class="release_inputs">
							<input type="text">
						</div>
            		</li>
            		<li>
            			<span class="release_name">邮政编码：</span>
						<div class="release_inputs">
							<input type="text">
						</div>
           				<p><a href="http://waiter.www.so.com/postcode/s?q=&prov=&city=&county=" target="_blank">邮政编码查询</a></p>
            		</li>
            		<li>
            			<span class="release_name">现在所在学校：</span>
						<div class="release_inputs">
							<input type="text">
						</div>
            		</li>
            		<li>
            			<span class="release_name">学校地址：</span>
						<div class="release_inputs">
							<input type="text">
						</div>
            		</li>
            		<li>
            			<span class="release_name">学校邮政编码：</span>
						<div class="release_inputs">
							<input type="text">
						</div>
            		</li>
            		<li>
            			<span class="release_name">现在所在班级：</span>
						<div class="release_inputs">
							<input type="text">
						</div>
            		</li>
            		<li>
            			<span class="release_name">班主任老师电话号码：</span>
						<div class="release_inputs">
							<input type="text">
						</div>
            		</li>
            		<li>
            			<span class="release_name">校长电话：</span>
						<div class="release_inputs">
							<input type="text">
						</div>
            		</li>
					<li>
						<span class="release_name">我属于：</span>
						<select class="rel_select" name="" id="">
							<option>请选择</option>
							<option>农村特困学生</option>
							<option>农村孤儿学生</option>
							<option>农村残疾学生</option>
						</select>
					</li>
					<li>
						<span class="release_name">我想在：</span>
						<select class="rel_select" name="" id="">
							<option>请选择</option>
							<option>学习</option>
							<option>生活</option>
						</select>
						<span class="release_name w_auto">方面向各界爱心人士求助</span>
					</li>
					<li>
						<div class="release_btns">
							<input type="button" value="填写完成，进入下一步">
						</div>
					</li>
            	</ul>
            	<h3>必填项：</h3>
            	<ul class="release_content release_auto">
           			<li>
           				<span class="release_name ">1.上传个人全身照片(1张)</span>
						<div class="release_inputs">
							上传文件<input type="file">
						</div>
           			</li>
           			<li>
           				<span class="release_name">2.上传与家人一起的合照(2张)</span>
						<div class="release_inputs">
							上传文件<input type="file">
						</div>
          				<div class="release_inputs">
							上传文件<input type="file">
						</div>
           			</li>
           			
           			<li>
           				<span class="release_name">3.上传家庭房屋家具等能证明家庭贫困的照片(3张)</span>
						<div class="release_inputs">
							上传文件<input type="file">
						</div>
          				<div class="release_inputs">
							上传文件<input type="file">
						</div>
          				<div class="release_inputs">
							上传文件<input type="file">
						</div>
           			</li>
           			<li>
           				<span class="release_name">4.上传《思想品德》试卷得分(必须是最近一次考试试卷，必须能看清楚姓名)(1张)</span>
						<div class="release_inputs">
							上传文件<input type="file">
						</div>
           			</li>
           			<li>
           				<span class="release_name">5.上传上学期期末班级成绩表(必须能看清楚自己的姓名和成绩排名) (1张)</span>
						<div class="release_inputs">
							上传文件<input type="file">
						</div>
           			</li>
           			<li>
           				<span class="release_name">6.上传班主任老师手写并签字的关于你的评价照片(1张)</span>
						<div class="release_inputs">
							上传文件<input type="file">
						</div>
           			</li>
           			<li>
           				<span class="release_name">7.上传你户口所在地村委会开具并盖章的能证明你情况属实的证明照片 (1张)</span>
						<div class="release_inputs">
							上传文件<input type="file">
						</div>
           			</li>
           			<li>
           				<span class="release_name">8.上传你自己手写的未来的努力方向以及将来如何回报社会等的保证书照片 (1张)</span>
						<div class="release_inputs">
							上传文件<input type="file">
						</div>
           			</li>
            	</ul>
            	<h3>具体困难陈述：</h3>
            	<div class="release_area">
            		<h3>500字以上，介绍清楚具体有那些困难，如何造成的等等，并写明自己未来的努力方向和将来如何回报社会等</h3>
            		<div class="relTextArea">
            			<textarea name="" id=""></textarea>
            		</div>
            	</div>
            </div>
        </div>
        <div class="rightArea">
            <div class="tabBox">
                <ul class="tab_pills">
                    <li class="active"><a href="#">最新捐款事件</a></li>
                </ul>
            </div>
            <div class="eventList">
                <dl class="eventList_cont">
                    <dt><a href="#"><img src="images/1.jpg" alt=""></a></dt>
                    <dd>
                        <h3><a href="#">测试标题文字啊啊啊</a></h3>
                        <p>测试内容啊啊啊啊打发爱上对方爱上对方阿斯顿发爱上对方</p>
                        <div class="eventList_sta">
                            <span>本月<em>12311</em>人支持</span><a href="#">捐款</a>
                        </div>
                    </dd>
                </dl>
                <dl class="eventList_cont">
                    <dt><a href="#"><img src="images/1.jpg" alt=""></a></dt>
                    <dd>
                        <h3><a href="#">测试标题文字啊啊啊</a></h3>
                        <p>测试内容啊啊啊啊打发爱上对方爱上对方阿斯顿发爱上对方</p>
                        <div class="eventList_sta">
                            <span>本月<em>12311</em>人支持</span><a href="#">捐款</a>
                        </div>
                    </dd>
                </dl>
                <dl class="eventList_cont">
                    <dt><a href="#"><img src="images/1.jpg" alt=""></a></dt>
                    <dd>
                        <h3><a href="#">测试标题文字啊啊啊</a></h3>
                        <p>测试内容啊啊啊啊打发爱上对方爱上对方阿斯顿发爱上对方</p>
                        <div class="eventList_sta">
                            <span>本月<em>12311</em>人支持</span><a href="#">捐款</a>
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="g_main">
        <div class="tabBox">
            <ul class="tab_pills">
                <li class="active"><a href="#">特别感谢</a></li>
                <li><a href="#">公益合作伙伴</a></li>
                <li><a href="#">友情链接</a></li>
            </ul>
        </div>
        <div class="thankBox">
            <div class="thank_item">
                <ul class="thank_list">
                    <li><span></span><img src="#" alt=""><a href="#"></a></li>
                    <li><span></span><img src="#" alt=""><a href="#"></a></li>
                    <li><span></span><img src="#" alt=""><a href="#"></a></li>
                </ul>
            </div>
            <div class="thank_item hide">
                <ul class="thank_list">
                    <li><span></span><img src="#" alt=""><a href="#"></a></li>
                    <li><span></span><img src="#" alt=""><a href="#"></a></li>
                    <li><span></span><img src="#" alt=""><a href="#"></a></li>
                </ul>
            </div>
            <div class="thank_item hide">
                <ul class="thank_link">
                    <li><a href="#">百度</a></li>
                    <li><a href="#">百度</a></li>
                    <li><a href="#">百度</a></li>
                    <li><a href="#">百度</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_cont">
            <div class="footer_contLeft">
                <a href="#">首页</a><span>|</span><a href="#">公益事业</a><span>|</span><a href="#">论坛</a><span>|</span><a href="#">捐款方式</a><span>|</span><a href="#">我要助人</a><span>|</span><a href="#">志愿报名</a><span>|</span><a href="#">支教活动</a><span>|</span><a href="#">透明监督</a><span>|</span><a href="#">建议投诉</a>
                <p>Copyright © 2000-2014 TaiPingGongYi Corporation, All Rights Reserved</p>
            </div>
        </div>
    </div>
    <div class="backTop"></div>
    <div class="shadow hide"></div>
    <div class="winBox hide">
        <div class="win_title">
            <h3>登陆</h3>
            <a href="javascript:;" class="winClose" title="关闭"></a>
        </div>
        <div class="winCont">
            <ul class="login_list">
                <li><label for="l1">用户名</label><input type="text" id="l1" class="g-input"></li>
                <li><label for="l2">密码</label><input type="text" id="l2"  class="g-input"><span class="forget_pass"><a href="#">忘记密码?</a></span></li>
                <li><label>&nbsp;</label><span class="userToReg">还没有账号？<a href="#">我要注册</a></span></li>
                <li class="g-sm-btn"><input type="submit" value="注 册" class="btn-y"><input type="button" value="取 消" class="btn-n"></li>
            </ul>
        </div>
    </div>
</body>
</html><?php }} ?>
