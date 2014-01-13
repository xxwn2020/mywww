<?php
namespace Test\Model;
/**
 *“服务”团购活动表
 */
class GroupbuyTable
{
	private $group_id;		//团购自增ID
	private $group_name;	//团购名
	private $group_desc;	//团购简介
	private $start_time;	//团购开始时间
	private $end_time;		//团购结束时间
	private $services_id;	//团购服务ID
	private $store_id;		//团购商家ID
	private $spec_price;	//规格价格
	private $min_quantity;	//完成团购期望订购件数
	private $max_pre_user;	//每人限制的购买数
	private $state;			//团购状态
	private $recommended;	//是否推荐团购
	private $views;			//查看数

}