<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 /**
 * 公共数据配制
 * @author liuguangping
 * @version 2014/10/22
 *
 * **/

$config['remeber']['lift_time'] = time()+3600*24*7;  //记住密码是生命周期

$config['convention']['DEFAULT_AJAX_RETURN'] = 'JSON';  // 默认AJAX 数据返回格式,可选JSON XML ...
$config['convention']['TMPL_ACTION_ERROR'] = 'dispatch_jump';  // 默认错误跳转对应的模板文件
$config['convention']['TMPL_ACTION_SUCCESS'] = 'dispatch_jump';  // 默认成功跳转对应的模板文件
$config['convention']['waitSecond'] = '3';  //默认停留1秒
$config['convention']['jumpUrl'] = '/admin/index.php/admin/login';  // 自动返回操作前页面


