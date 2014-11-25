<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Generator By "Auto Codeigniter" At 2014/10/27 12:21:36 
 * liuguangpingAuthor: 刘广平
 * Email: liuguangpingtest@163.com
 */
class T_arctype_model extends MY_Model
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
	public $aid;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		char
	 * @IS_NULLABLE		YES
	 * @COLUMN_DEFAULT	
	 * @COLUMN_TYPE		char(30)
	 * @EXTRA			
	 * @COLUMN_COMMENT	?????
	 */
	public $aname;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		varchar
	 * @IS_NULLABLE		YES
	 * @COLUMN_DEFAULT	
	 * @COLUMN_TYPE		varchar(60)
	 * @EXTRA			
	 * @COLUMN_COMMENT	?????
	 */
	public $keywords;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		smallint
	 * @IS_NULLABLE		NO
	 * @COLUMN_DEFAULT	0
	 * @COLUMN_TYPE		smallint(6)
	 * @EXTRA			
	 * @COLUMN_COMMENT	0??1??
	 */
	public $ishidden;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		smallint
	 * @IS_NULLABLE		NO
	 * @COLUMN_DEFAULT	0
	 * @COLUMN_TYPE		smallint(6)
	 * @EXTRA			
	 * @COLUMN_COMMENT	0??1??2????
	 */
	public $type;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		int
	 * @IS_NULLABLE		YES
	 * @COLUMN_DEFAULT	
	 * @COLUMN_TYPE		int(11)
	 * @EXTRA			
	 * @COLUMN_COMMENT	????ID
	 */
	public $pid;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		varchar
	 * @IS_NULLABLE		YES
	 * @COLUMN_DEFAULT	
	 * @COLUMN_TYPE		varchar(30)
	 * @EXTRA			
	 * @COLUMN_COMMENT	?????
	 */
	public $aenname;

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

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		varchar
	 * @IS_NULLABLE		YES
	 * @COLUMN_DEFAULT	
	 * @COLUMN_TYPE		varchar(30)
	 * @EXTRA			
	 * @COLUMN_COMMENT	???????
	 */
	public $defaultname;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		smallint
	 * @IS_NULLABLE		NO
	 * @COLUMN_DEFAULT	1
	 * @COLUMN_TYPE		smallint(6)
	 * @EXTRA			
	 * @COLUMN_COMMENT	????:1top 2 butoom 3both
	 */
	public $showtype;

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
	 * @DATA_TYPE		varchar
	 * @IS_NULLABLE		YES
	 * @COLUMN_DEFAULT	?
	 * @COLUMN_TYPE		varchar(100)
	 * @EXTRA			
	 * @COLUMN_COMMENT	?????url
	 */
	public $link;

	/**
	 * @COLUMN_KEY		
	 * @DATA_TYPE		smallint
	 * @IS_NULLABLE		NO
	 * @COLUMN_DEFAULT	0
	 * @COLUMN_TYPE		smallint(6)
	 * @EXTRA			
	 * @COLUMN_COMMENT	????:0???? 1??
	 */
	public $islink;

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	/**
	 * 根据主键获取单条记录
	 *
	 * @PRIMARY KEY aid
	 *
	 * @return 对象
	*/
	public function get($aid)
	{
		return $this->db->get_where('t_arctype',array('aid' => $aid))->row();
	}
	

	

	/**
	 * 获取表中所有记录的行数，用于分页 
	 */
	public function count_all()
	{
		return $this->db->count_all('t_arctype');
	}

	

	/**
	 * 确认数据库表中的不能为空的列是否存在于$post数组中
	 */
	private function validation_db_is_not_nullable_rules_by_insert($_POST)
	{
		if(!isset($post['ishidden']) || empty($post['ishidden'])) return false;
		if(!isset($post['type']) || empty($post['type'])) return false;
		if(!isset($post['showtype']) || empty($post['showtype'])) return false;
		if(!isset($post['ctime']) || empty($post['ctime'])) return false;
		if(!isset($post['islink']) || empty($post['islink'])) return false;

		return true;
	}

	/**
	 * 确认数据库表中的不能为空的列是否存在于$post数组中
	 */
	private function validation_db_is_not_nullable_rules_by_update($_POST)
	{
		if(!isset($post['aid']) || empty($post['aid'])) return false;
		if(!isset($post['ishidden']) || empty($post['ishidden'])) return false;
		if(!isset($post['type']) || empty($post['type'])) return false;
		if(!isset($post['showtype']) || empty($post['showtype'])) return false;
		if(!isset($post['ctime']) || empty($post['ctime'])) return false;
		if(!isset($post['islink']) || empty($post['islink'])) return false;

		return true;
	}

	/**
	 * 根据主键删除单条记录
	 *
	 * @PRIMARY KEY aid
	*/
	public function delete($aid)
	{
		return $this->db->delete('t_arctype',array('aid' => $aid));
	}


	/**
	 * 根据条件获取菜单数据
	 *
	 * @PRIMARY KEY aid
	*/
	/*public function getMenu($where,$page=1,$limit=40,$field='*',$order_field='order', $order_type='ASC',$field_name=null, $keywords=null){

        $page = $page ? (int)$page : 1;
        $offset = ( $page - 1 ) * $limit;

        $this->db->order_by($order_field, $order_type);

        if($field_name){
             $this->db->like($field_name, $keywords);
        }
        
        $result['result'] = $this->db->select($field)->get_where('t_arctype', $where, $limit, $offset)->result_array();
        $result['total'] = count($this->db->select($field)->get_where('t_arctype', $where)->result_array());
        return $result;
    }*/

    /**
	 * 根据条件获取菜单数据
	 *
	 * @PRIMARY KEY aid
	*/
	public function getMenu($where,$field='*',$order='order ASC', $page=1,$limit=40,$keywords=null){

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

		$sql = "SELECT ".$field." FROM t_arctype WHERE ".$map.$keylike.$orderby.$limit;

		if(is_array($where) && $where['valueSql']){
			$valueSql = $where['valueSql'];
		}
		$sqlcout = "SELECT ".$field." FROM t_arctype WHERE ".$map.$keylike.$orderby;
		$result['result'] =  $this->db->query($sql,$valueSql)->result_array();
		$result['total'] = count($this->db->query($sqlcout,$valueSql)->result_array());
		return $result; 
    }

}
