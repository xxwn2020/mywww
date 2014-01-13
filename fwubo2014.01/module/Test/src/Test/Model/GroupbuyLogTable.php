<?php
namespace Test\Model;
/**
 *“服务”团购日志表
 */
class GroupbuyLogTable
{
	private $group_id;		//团购自增ID
	private $user_id;		//参与团购用户ID
	private $user_name;		//参与团购用户名称
	private $quantity;		//团购商品的数量
	private $spec_quantity;	//规格的数量
	private $likeman;		//团购联系人
	private $tel;			//团购联系电话
	private $order_id;		//订单号
	private $add_time;   	//团购添加时间
}