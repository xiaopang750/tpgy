<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Generator By "Auto Codeigniter" At 2014/10/27 12:21:36 
 * liuguangpingAuthor: 刘广平
 * Email: liuguangpingtest@163.com
 */
class T_navigationmenu_model extends MY_Model
{
	/**
	 * @COLUMN_KEY		PRI
	 * @DATA_TYPE		int
	 * @IS_NULLABLE		NO
	 * @COLUMN_DEFAULT	
	 * @COLUMN_TYPE		int(11)
	 * @EXTRA			auto_increment
	 * @COLUMN_COMMENT	??id
	 */
	public $nid;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		varchar
	 * @IS_NULLABLE		YES
	 * @COLUMN_DEFAULT	
	 * @COLUMN_TYPE		varchar(30)
	 * @EXTRA			
	 * @COLUMN_COMMENT	??
	 */
	public $module;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		varchar
	 * @IS_NULLABLE		YES
	 * @COLUMN_DEFAULT	
	 * @COLUMN_TYPE		varchar(10)
	 * @EXTRA			
	 * @COLUMN_COMMENT	???
	 */
	public $module_name;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		varchar
	 * @IS_NULLABLE		YES
	 * @COLUMN_DEFAULT	
	 * @COLUMN_TYPE		varchar(30)
	 * @EXTRA			
	 * @COLUMN_COMMENT	??
	 */
	public $action;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		varchar
	 * @IS_NULLABLE		YES
	 * @COLUMN_DEFAULT	
	 * @COLUMN_TYPE		varchar(10)
	 * @EXTRA			
	 * @COLUMN_COMMENT	???
	 */
	public $action_name;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		int
	 * @IS_NULLABLE		YES
	 * @COLUMN_DEFAULT	
	 * @COLUMN_TYPE		int(11)
	 * @EXTRA			
	 * @COLUMN_COMMENT	?id
	 */
	public $pid;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		timestamp
	 * @IS_NULLABLE		NO
	 * @COLUMN_DEFAULT	CURRENT_TIMESTAMP
	 * @COLUMN_TYPE		timestamp
	 * @EXTRA			
	 * @COLUMN_COMMENT	
	 */
	public $ctime;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		smallint
	 * @IS_NULLABLE		NO
	 * @COLUMN_DEFAULT	0
	 * @COLUMN_TYPE		smallint(6)
	 * @EXTRA			
	 * @COLUMN_COMMENT	????:0??1??
	 */
	public $ishidden;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		int
	 * @IS_NULLABLE		YES
	 * @COLUMN_DEFAULT	
	 * @COLUMN_TYPE		int(11)
	 * @EXTRA			
	 * @COLUMN_COMMENT	??
	 */
	public $order;

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	/**
	 * 根据主键获取单条记录
	 *
	 * @PRIMARY KEY nid
	 *
	 * @return 对象
	*/
	public function get($nid)
	{
		return $this->db->get_where('t_navigationmenu',array('nid' => $nid))->row();
	}
	

	

	/**
	 * 获取表中所有记录的行数，用于分页 
	 */
	public function count_all()
	{
		return $this->db->count_all('t_navigationmenu');
	}

	

	/**
	 * 确认数据库表中的不能为空的列是否存在于$post数组中
	 */
	private function validation_db_is_not_nullable_rules_by_insert($_POST)
	{
		if(!isset($post['ctime']) || empty($post['ctime'])) return false;
		if(!isset($post['ishidden']) || empty($post['ishidden'])) return false;

		return true;
	}

	/**
	 * 确认数据库表中的不能为空的列是否存在于$post数组中
	 */
	private function validation_db_is_not_nullable_rules_by_update($_POST)
	{
		if(!isset($post['nid']) || empty($post['nid'])) return false;
		if(!isset($post['ctime']) || empty($post['ctime'])) return false;
		if(!isset($post['ishidden']) || empty($post['ishidden'])) return false;

		return true;
	}

	/**
	 * 根据主键删除单条记录
	 *
	 * @PRIMARY KEY nid
	*/
	public function delete($nid)
	{
		return $this->db->delete('t_navigationmenu',array('nid' => $nid));
	}
	
	/**
	 * 根据条件获取菜单数据
	 *
	 * @PRIMARY KEY aid
	*/
	public function getMenu($where,$field='*',$order='sort ASC', $page=1,$limit=100,$keywords=null){

		$map = '';
		$orderby = '';
		$keylike = '';
		$valueSql = '';
		if(is_array($where) && $where['keysql']){
			$map = $where['keysql'];
		}
		$page = $page ? (int)$page : 1;
        $offset = ( $page - 1 ) * $limit;

        if($order){
        	 $orderby = " ORDER BY ".trim($order);
        }

        $limit = " LIMIT $offset,$limit";
       
       	if($keywords){
       		$keylike = " like '%".$keywords."%'";
       	}

		$sql = "SELECT ".$field." FROM t_navigationmenu WHERE ".$map.$keylike.$orderby.$limit;

		if(is_array($where) && $where['valueSql']){
			$valueSql = $where['valueSql'];
		}
		$sqlcout = "SELECT ".$field." FROM t_navigationmenu WHERE ".$map.$keylike.$orderby;
		$result['result'] =  $this->db->query($sql,$valueSql)->result_array();
		$result['total'] = count($this->db->query($sqlcout,$valueSql)->result_array());
		return $result; 
    }

    //获取父级数据
    public function getPidMenu( $where_in = array(),$where_in_string = 'nid',$group_by = 'pid' ){

    	if($where_in){
    		$this->db->where_in($where_in_string,$where_in);
    	}

    	if($group_by){
    		$this->db->group_by($group_by);
    	}

    	return $this->db->select('nid,pid')->get('t_navigationmenu')->result_array();

    }
}
