<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');   
/*=============================================================================
#     FileName: Recursive.php
#         Desc: 太平公益数据递归处理类
#       Author: 刘广平
#        Email: liuguangpingtest@163.com
#     HomePage: http://blog.lgp2.com
#      Version: 0.0.1
#   LastChange: 2014-10-27 13:34:31
#      History:
=============================================================================*/

class Recursive
{
	
	private static $CI;

	private static $_instance;

	private function __construct() 
	{
		self::$CI = &get_instance();
	}

	public static function getInstance(){

		if(!self::$_instance instanceof self){
			self::$_instance = new self;
		}
		return self::$_instance;
	}

	public function arrayController($array,$pid=0,&$newArray){

		foreach ($array as $key => $value) {
			
			if($pid == $value['pid']){

				if($pid == 0){
					
					$newArray[$value['aid']] = $value;

				}else{

					$newArray[$value['pid']]['children'][] = $value;
					
				}

				$this->arrayController($array,$value['aid'],$newArray);
			}
		}
		
	}

	public function tree($array,$pid=0,&$newArray,$leve=0,$html='--'){

		foreach ($array as $key => $value) {
			$cate['aid'] = $value['aid'];
			$cate['keywords'] = $value['keywords'];
			$cate['aenname'] = $value['aenname'];
			$cate['pid'] = $value['pid'];
			$cate['link'] = $value['link'];
			$cate['islink'] = $value['islink'];
			if($pid == $value['pid']){

				if($pid == 0){
					$cate['aname'] = $value['aname'];
					$newArray[] = $cate;
				}else{
					$cate['aid'] = $value['aid'];
					$cate['aname'] = str_repeat($html,$leve).$value['aname'];
					$newArray[] = $cate;
				}

				$this->tree($array,$value['aid'],$newArray,$leve+1);
			}
		}
		
	}

	public function __destruct(){
		unset($newArray);
	}


}