<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Blogs Controller
 *
 *博客控制器
 *
 * @author ab <ab396887725@gmail.com>
 */

class Blogs extends CI_Controller {

	private $_uid;

	public function __construct()
    {
        parent::__construct();
        $this->_uid=2;
        $this->load->helper('form');//引入CI框架 form辅助函数
        $this->load->library('form_validation');
        $this->load->model('Blogs_model','blogs');
        //$this->output->enable_profiler(TRUE);
    }

	public function index()
	{
		$this->load->helper('My_string_helper');
		$bloglists=$this->blogs->get_blogs(0,10);
		$date['bloglists']=$bloglists;
		$this->load->view('index',$date);
	}

	public function newblog()
	{
		$this->form_validation->set_rules('title', '标题', 'required|trim|strip_tags|max_length[100]|min_length[1]');
		$this->form_validation->set_rules('content', '内容', 'required|trim|max_length[5000]|min_length[1]');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('newblog');
        }
        else
        {
        	$this->blogs->insert_blog(
        		array(
                    'uid'=> $this->_uid,
                    'title'       	=> $this->input->post('title',TRUE),
                    'content'       => $this->input->post('content',TRUE),
                    'createdTime'   => time()
                    )
        		);
			//echo $this->input->post('content',TRUE);
        	$this->load->view('welcome_message');
        }

		/*if($newBlog=$this->isPost())
		{
			$this->load->model('Blog');
			$this->Blog->insert_blog($newBlog);
			$this->load->view('welcome_message');
		}
		else
			$this->load->view('newblog');*/
	}

	public function show_blog()
	{
		//$id=20;
		$id=intval($this->input->get('id',TRUE));
		$data['blog']=$this->blogs->get_blog_by_id($id);
		$this->load->view('blog_info',$data);
	}
	/*private function isPost()
	{
		if(!empty($_POST))
		{
			$arrTemp=array();

			foreach($_POST as $key => $value)
			{
				$arrTemp[$key]=$value;
			}
			return $arrTemp;
		}
		else
		{
			return 0;
		}
	}*/
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */