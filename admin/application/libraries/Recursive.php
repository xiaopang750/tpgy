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

	public function arrayController($array,$pid=0,&$newArray,$pidKey = 'pid', $idKey = 'nid' , $sonKey = 'children'){

		foreach ($array as $key => $value) {
			
			if($pid == $value[$pidKey]){

				if($pid == 0){
					
					$newArray[$value[$idKey]] = $value;

				}else{

					$newArray[$value[$pidKey]][$sonKey][] = $value;
					
				}

				$this->arrayController($array,$value[$idKey],$newArray);
			}
		}
		
	}

	public function tree($array,$pid = 0,&$newArray,$leve = 0,$html = '++++',$idKey = 'aid',$idModuleKey = 'aname',$pidKey = 'pid'){

		foreach ($array as $key => $value) {
			$cate = $value;
			if($pid == $value[$pidKey]){

				if($pid == 0){
					$cate[$idModuleKey] = $value[$idModuleKey];
					$newArray[] = $cate;
				}else{
					$cate[$idKey] = $value[$idKey];
					$cate[$idModuleKey] = str_repeat($html,$leve).$value[$idModuleKey];
					$newArray[] = $cate;
				}

				$this->tree($array,$value[$idKey],$newArray,$leve+1,'++++',$idKey,$idModuleKey);
			}
		}
		
	}

	public function __destruct(){
		unset($newArray);
	}


}