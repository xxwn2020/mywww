<?php
namespace Test\Model;
/**
 *商城导航信息表
 */
class NavigationTable
{
	private $nav_id;		//导航自增ID
	private $type;			//导航类型
	private $title;			//标题
	private $link;			//链接地址
	private $sort_order;	//排序号
	private $open_new;		//是否在新页面打开
}