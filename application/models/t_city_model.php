<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Generator By "Auto Codeigniter" At 2014/10/27 12:21:36 
 * liuguangpingAuthor: 刘广平
 * Email: liuguangpingtest@163.com
 */
class T_city_model extends MY_Model
{
	/**
	 * @COLUMN_KEY		PRI
	 * @DATA_TYPE		int
	 * @IS_NULLABLE		NO
	 * @COLUMN_DEFAULT	
	 * @COLUMN_TYPE		int(11)
	 * @EXTRA			auto_increment
	 * @COLUMN_COMMENT	
	 */
	public $id;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		varchar
	 * @IS_NULLABLE		NO
	 * @COLUMN_DEFAULT	
	 * @COLUMN_TYPE		varchar(20)
	 * @EXTRA			
	 * @COLUMN_COMMENT	
	 */
	public $name;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		int
	 * @IS_NULLABLE		NO
	 * @COLUMN_DEFAULT	
	 * @COLUMN_TYPE		int(11)
	 * @EXTRA			
	 * @COLUMN_COMMENT	
	 */
	public $cid;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		int
	 * @IS_NULLABLE		NO
	 * @COLUMN_DEFAULT	
	 * @COLUMN_TYPE		int(11)
	 * @EXTRA			
	 * @COLUMN_COMMENT	
	 */
	public $pid;

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	/**
	 * 根据主键获取单条记录
	 *
	 * @PRIMARY KEY id
	 *
	 * @return 对象
	*/
	public function get($id)
	{
		return $this->db->get_where('t_city',array('id' => $id))->row();
	}
	

	

	/**
	 * 获取表中所有记录的行数，用于分页 
	 */
	public function count_all()
	{
		return $this->db->count_all('t_city');
	}

	

	/**
	 * 确认数据库表中的不能为空的列是否存在于$post数组中
	 */
	private function validation_db_is_not_nullable_rules_by_insert($_POST)
	{
		if(!isset($post['name']) || empty($post['name'])) return false;
		if(!isset($post['cid']) || empty($post['cid'])) return false;
		if(!isset($post['pid']) || empty($post['pid'])) return false;

		return true;
	}

	/**
	 * 确认数据库表中的不能为空的列是否存在于$post数组中
	 */
	private function validation_db_is_not_nullable_rules_by_update($_POST)
	{
		if(!isset($post['id']) || empty($post['id'])) return false;
		if(!isset($post['name']) || empty($post['name'])) return false;
		if(!isset($post['cid']) || empty($post['cid'])) return false;
		if(!isset($post['pid']) || empty($post['pid'])) return false;

		return true;
	}

	/**
	 * 根据主键删除单条记录
	 *
	 * @PRIMARY KEY id
	*/
	public function delete($id)
	{
		return $this->db->delete('t_city',array('id' => $id));
	}
	
}
