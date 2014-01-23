<?php
class Blog extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_blog($newBlog)
    {
    	
    	
    	$dataTable = array(
               'title' => $newBlog['title'] ,
               'content' => $newBlog['content'] ,
               'createTime' => time()
            );    	
    	$this->db->insert('ab_blogs', $dataTable); 
    }
    public function get_blogs($offset,$limit)
    {
        $blogs=$this->db->get('ab_blogs',$limit,$offset)->result();
        return $blogs;
        
    }
}
?>