<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Common
{
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
}