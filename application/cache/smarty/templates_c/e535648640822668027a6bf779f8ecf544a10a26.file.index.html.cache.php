<?php /* Smarty version Smarty-3.1.18, created on 2014-11-02 21:07:34
         compiled from "D:\wamp\Apache2.2\www\tpgy\static\views\release\index.html" */ ?>
<?php /*%%SmartyHeaderCode:797254562c96cc4b38-95699430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e535648640822668027a6bf779f8ecf544a10a26' => 
    array (
      0 => 'D:\\wamp\\Apache2.2\\www\\tpgy\\static\\views\\release\\index.html',
      1 => 1414117335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '797254562c96cc4b38-95699430',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54562c96d35003_33315997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54562c96d35003_33315997')) {function content_54562c96d35003_33315997($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
<?php echo $_smarty_tpl->getSubTemplate ('../footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
