<?php
class Blog extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function insert_blog($newBlog)
    {
    	$this->load->database();
    	
    	$dataTable = array(
               'title' => $newBlog['title'] ,
               'content' => $newBlog['content'] ,
               'creatTime' => time()
            );    	
    	$this->db->insert('ab_blogs', $dataTable); 

    	
    }
}
?>