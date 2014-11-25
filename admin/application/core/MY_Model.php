<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    /**
     * 获取内容
     * @param string $table_name
     * @param array  $where
     * @param array  $order
     * @param array  $select
     * @param int    $limit
     * @param array  $not_in_id
     * **/
    function getContents( $table_name = '',$where = '',$order = '',$select = '',$limit = 0,$not_in_id = 0){
    	$result = '';
    	if( $table_name ){
    		if( is_array($where)){
    			$this->db->where( $where );
    		}
    		if( is_array($order) ){
    			foreach ($order as $key=>$val){
    				$this->db->order_by("`".$key."`",$val);
    			}
    		}
    		if( is_array($select)){
    			$this->db->select($select);
    		}
    		if( $limit ){
    			$this->db->limit($limit);
    		}
    		if( is_array($not_in_id) ){
    			$this->db->where_not_in($not_in_id['0']['field_name'],$not_in_id['0']['value']);
    		}
    		try {
		    	$query = $this->db->get($table_name);
		    	$result = $query->result_array();
	    	}catch ( PDOException $e ) {
				echo 'Connection failed: ' . $e->getMessage ();
			}
    	}
    	return $result;
    }

    /**
     * 添加内容
     * @param string $table_name
     * @param array  $data
     * @return int 
     * **/
    function addContents($table_name = '',$data = ''){
    	$num = 0;
    	if( is_array( $data ) && $table_name ) {
	    	try {
	    		$this->db->insert($table_name, $data);
	    		$num = $this->db->insert_id();
	    		//$num = $this->db->affected_rows();
	    	}catch ( PDOException $e ) {
	    		$num = 0;
				//echo 'Connection failed: ' . $e->getMessage ();
			}
    	}
    	return $num;
    }

    /**
     * 批量添加内容
     * @param string $table_name
     * @param array  $data
     * @return int 
     * **/
    function batchAddContents($table_name = '',$data = ''){
    	$num = 0;
    	if( is_array( $data ) && $table_name ) {
	    	try {
	    		$this->db->insert_batch($table_name, $data);
	    		$num = $this->db->insert_id();
	    		//$num = $this->db->affected_rows();
	    	}catch ( PDOException $e ) {
				echo 'Connection failed: ' . $e->getMessage ();
			}
    	}
    	return $num;
    }


    /**
     * 修改一条数据
     * @param array $where  条件
     * @param array $data   更改的内容
     * @param string $table_name	表名
     * @return int
     */
    function editContents( $where = '', $data = '',$table_name = '' )
    {
    	$num = 0;
    	if( $table_name && is_array($data) ){
    		try {
    			if( is_array($where) ){
    				$this->db->where($where);
    			}
		    	$this->db->update($table_name, $data);
		    	$num = $this->db->affected_rows();
	    	}catch ( PDOException $e ) {
				echo 'Connection failed: ' . $e->getMessage ();
			}
    	}
		return $num;
    }

   /**
     * 批量修改数据
     * @param string $field_name 字段名
     * @param array $where 数组数组 如 $field_name 为 id $where为array(1,2,3,4)之类
     * @param array $data  更改的数据数组  如 array('state'=>1)
     * @param string $table_name表名
     * @return bool
     */
    function batchEditContents( $field_name = '',$where = '', $data = '',$table_name = '' )
    {
    	$num = 0;
    	if( $table_name && $field_name && is_array($where) && is_array($data) ){
    		try {
		    	$this->db->where_in($field_name, $where);
		    	$this->db->update($table_name, $data);
		    	$num = $this->db->affected_rows();
	    	}catch ( PDOException $e ) {
				echo 'Connection failed: ' . $e->getMessage ();
			}
    	}
		return $num;
    }

    /**
     * 批量获取数据
     * @param string $field_name 字段名
     * @param array $where 数组数组 如 $field_name 为 id $where为array(1,2,3,4)之类
     * @param string $table_name表名
     * @return bool
     */
    function batchGetContents( $field_name = '',$where = '', $table_name = '',$select = '' )
    {
    	$result = 0;
    	if( $table_name && $field_name && is_array($where) ){
    		try {
    			if(is_array($select)){
    				$this->db->select($select);
    			}
		    	$this->db->where_in($field_name, $where);
	    		$query = $this->db->get($table_name);
	    		$result = $query->result_array();
	    	}catch ( PDOException $e ) {
				echo 'Connection failed: ' . $e->getMessage ();
			}
    	}
		return $result;
    }

    /**
     * 删除数据
     * @param array $where
     * @param string $table_name
     * @param array  $data
     * @param int $is_del
     * @return int
     */
    function delContents( $where = '',$table_name = '',$data = '',$is_del = 0 )
    {
    	$num = 0;
    	if( $table_name && is_array($where)  ){
    		try {
    			if( $is_del == 1 ){
	    			$this->db->where($where);
		            $this->db->delete($table_name);
		            $num = $this->db->affected_rows();
    			}else{
	    			$this->db->where($where);
			    	$this->db->update($table_name, $data);
			    	$num = $this->db->affected_rows();
    			}

	    	}catch ( PDOException $e ) {
				echo 'Connection failed: ' . $e->getMessage ();
			}
    	}
		return $num;
    }

    /**
     * 获取一条数据
     * @param array $where
     * @param string $table_name
     * @param string $field
     * @return int
     */
    public function getOne($table_name,$field='id',$where){
        try{
           $result = $this->db->select($field)->get_where($table_name, $where)->row_array(); 
        }catch(EXCEPTION $e){
           $result = false;
        }
        return $result;
    }
    /**
	 * 根据条件得到数据集合
	 *
	 * @Exception			Exception
	 *
	 * @return				return $this->db->getAll()
	 */
	public function getAll($table_name,$field='*',$where){
        try{
		    $result = $this->db->select($field)->get_where($table_name, $where)->result_array();
        }catch(EXCEPTION $e){
            $result = false;
        }
        return $result;
	}

    /**
     * 是否唯一
     * @param string $table_name 字段名
     * @param array $where 数组数组
     * @param string $type 如果 判断是否修改 比如说uid type如果有值 
     * @return int
     */
    public function isOnly($table_name,$where,$field_name='',$field_value=''){

       if(is_array($where)){
            $map = '';
            foreach ($where as $key => $value) {
                $map .= " $key = '".$value."'";
            }
        }else{
            $map = $where;
        }

        if($field_name && $field_value){

            $map .= " AND $field_name != $field_value";
        }

        $sql = "SELECT * FROM ".$table_name." WHERE".$map;
        
        return $this->db->query($sql)->row_array();
       

    }

    /**
     * 批量删除数据
     * @param string $field_name 字段名
     * @param array $where 数组数组 如 $field_name 为 id $where为array(1,2,3,4)之类
     * @param string $table_name表名
     * @return int
     */
    function batchDelContents( $field_name = '',$where = '',$table_name = '' )
    {
    	$num = 0;
    	if( $table_name && $field_name && is_array($where) ){
    		try {
		    	$this->db->where_in($field_name, $where);
		    	$this->db->delete($table_name);
		    	$num = $this->db->affected_rows();
	    	}catch ( PDOException $e ) {
				echo 'Connection failed: ' . $e->getMessage ();
			}
    	}
		return $num;
    }

   /**
     * 查询数据
     * @param array $where
     * @param int $offset 起始位
     * @param int $limit
     *
     * @return array
     */
    function get_limit($where = '', $offset = 1, $limit=5,$table_name = '',$order = '',$select = '',$likes = '',$is_total = 1)
    {
    	//起始位置处理
    	$offset = (($offset>0 ? $offset : 1) - 1) * $limit;
    	if($where){
    		$this->db->where( $where );
    	}
    	if(is_array($likes)){
			$this->db->like( $likes );
    	}
    	//在order、group或limit前查询总数
    	$db = clone($this->db);
    	$total = $is_total ? $this->db->count_all_results($table_name) : 0;

		$this->db = $db;
		if( is_array($select)){
    			$this->db->select($select);
    	}
    	if( is_array($order) ){
    			foreach ($order as $key=>$val){
    				$this->db->order_by("`".$key."`",$val);
    			}
    	}

	    try {
	    	if($is_total){
	    		$this->db->limit($limit, $offset);
	    	}
			$query = $this->db->get($table_name);
	    	$data = $query->result_array();
    	}catch ( PDOException $e ) {
    		$data = '';
			//echo 'Connection failed: ' . $e->getMessage ();
		}
    	//return 数据和总数
    	return array('data'=>$data, 'total'=>$total);
    }


    /**
     * 更新数据 (数据累加)
     * @author liuguangping
     * @param string    $table_name
     * @param array     $where
     * @param string    $field_name
     * @param int       $num
     * @param string    $type
     * @return boolean
     * **/
    public function updateAdd($table_name,$field_name,$num,$where,$type='+'){
        if(is_array($where)){
            $map = '';
            foreach ($where as $key => $value) {
                $map .= " $key=$value";
            }
        }else{
            $map = $where;
        }
       
        $sql = "update ".$table_name." set ".$field_name." = ".$field_name.$type.$num." where".$map;
        
        return $this->db->query($sql);
        
    }

    /**
     * 统计总数
     * @param string	$table_name
     * @param array		$where
     * @return int
     * **/
    function _getCountNums( $table_name = '',$where = ''){
    	$total = 0;
    	if( $table_name ){
	    	if(is_array($where)){
	    		$this->db->where( $where );
	    	}
    		$total = $this->db->count_all_results($table_name);
    	}
		return $total;
    }
    
    /**
     * 执行SQL返回结果集
     * @param string	$sql
     * @return int
     * **/
    function _systemExecSql( $sql = ''){
    	$result = '';
		if($sql){
			try {
	    		$query = $this->db->query( $sql );
				return $query->result_array();
	    	}catch ( PDOException $e ) {
				echo 'Connection failed: ' . $e->getMessage ();
			}
		}
		return $result;
    }
    
    /**
     * 执行SQL 返回影响的行数
     * @param string $sql
     * @return bool
     */
    function _exec_sql( $sql = '' )
    {
    	if( $sql ){
    		try {
		    	$this->db->query($sql);
		        return $this->db->affected_rows();
	    	}catch ( PDOException $e ) {
				echo 'Connection failed: ' . $e->getMessage ();
			}
    	}else{
    		return 0;
    	}
    }
    

    
}
