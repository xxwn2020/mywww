<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Common
{
    /**
     * CI 句柄
     *
     * @access private
     */
    private $_CI;

    /**
     * 构造函数
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        $this->_CI = &get_instance();   
        log_message('debug', "ab: Common library Class Initialized");
    }

	/**
     * 对字符串进行hash加密
     * 
     * @access public
     * @param string $string 需要hash的字符串
     * @param string $salt 扰码
     * @return string
     */
    public static function do_hash($string, $salt = NULL)
    {
		if(null === $salt)
		{
		    $salt = substr(md5(uniqid(rand(), true)), 0, 9);
		}
		else
		{
		    $salt = substr($salt, 0, 9);
		}

    	return $salt . sha1($salt . $string);
    }
    
    /**
     * 判断hash值是否相等
     * 
     * @access public
     * @param string $source 源字符串
     * @param string $target 目标字符串
     * @return boolean
     */
    public static function hash_Validate($source, $target)
    {
        return (self::do_hash($source, $target) == $target);
    }
    /**
     * 显示页面
     *
     * @access public
     * @return 
     */
    public function get_load($data=NULL)
    {
        $data['navbar']       = $this->load_header();
        $data['sidebar'] = $this->load_sidebar_list();
        $data['footer']       = $this->load_footer();
        return $data;
    }
    /**
     * 导航条的HTML加载
     *
     * @access public
     * @return string HTML
     */
    public function load_header($data=NULL)
    {
        return $this->_CI->load->view('header',$data,true);
    }

    /**
     * 内容的HTML加载
     * 暂时无用
     * @access public
     * @return string HTML
     */
    public function load_content($content,$data=NULL)
    {
        return $this->_CI->load->view($content,$data,true);
    }

    /**
     * 好友列表的HTML加载
     *
     * @access public
     * @return string HTML
     */
    public function load_sidebar_list($data=NULL)
    {
        return $this->_CI->load->view('sidebar',$data,true);
    }

    /**
     * 页脚的HTML加载
     *
     * @access public
     * @return string HTML
     */
    public function load_footer($data=NULL)
    {
        return $this->_CI->load->view('footer',$data,true);
    }

    /**
     * 地区列表HTML加载，默认加载省
     *
     * @access public
     * @return string HTML
     */
    public function load_province($data=NULL)
    {
        $this->_CI->load->model('areas_model','areas');
        $data['area_list']=$this->_CI->areas->get_areas_by_pid(0);
        return $this->_CI->load->view('area_list',$data,true);
    }
}