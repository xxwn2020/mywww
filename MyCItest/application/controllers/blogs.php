<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blogs extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function newblog()
	{
		if($newBlog=$this->isPost())
		{
			//print_r($temp);
			//$this->load->view('welcome_message');
			$this->load->model('Blog');
			$this->Blog->insert_blog($newBlog);
			$this->load->view('welcome_message');
		}
		else
			$this->load->view('newblog');

	}
	private function isPost()
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
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */