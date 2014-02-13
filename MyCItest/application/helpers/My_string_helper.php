<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
// ------------------------------------------------------------------------

/**
 * 中英文字符串裁剪函数
 *
 * @access public
 * @param string $string 要处理的字符串。
 * @param int    $start  规定在字符串的何处开始。
 * @param int    $length 规定要返回的字符串长度。
 * @return string 处理后的字符串
 */
if ( ! function_exists('CHsubstr'))
{
	function CHsubstr($string, $start, $length)
	{
		if(strlen($string)>$length)
		{
			$str='';
			$len=$start+$length;
			$i = $start;
			while($i<$len)
			{
				if(ord(substr($string, $i, 1))>=128)
				{
					$str.=substr($string, $i, 3);
					$i = $i+ 3;
				}
				else
				{
					$str.=substr($string, $i, 1);
					$i ++;
				}
			}
			return $str."...";
		}
		else
		{
			return $string;
		}
	}
}