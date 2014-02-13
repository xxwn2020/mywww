<?php
class Blogs_model extends CI_Model {

    private $_table="ab_blogs";
    function __construct()
    {
        parent::__construct();
    }

    public function insert_blog($newBlog)
    {
    	$this->db->insert($this->_table, $newBlog); 
    }
    public function get_blogs($offset,$limit)
    {
        $blogs=$this->db->get($this->_table,$limit,$offset)->result();
        return $blogs;
        
    }
    public function get_blog_by_id($id)
    {
        $data = array();        
        $query = $this->db->get_where($this->_table,array(
                                    'Id' => $id
                                     )
                                );
        if (1 <= $query->num_rows())
        {
            $data = $query->row_array();
        }
        $query->free_result();
        //print_r($data);
        return $data;
    }
}
?>