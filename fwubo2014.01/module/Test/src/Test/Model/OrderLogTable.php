<?php
namespace Test\Model;
/**
 *订单日志表
 */
class OrderLogTable
{
	private $log_id;		//日志自增ID
	private $order_id;		//订单ID
	private $operator;		//操作人名字
	private $order_status;	//订单状态
	private $changed_status;//修改状态
	private $remark;		//备注
	private $log_time;		//日志产生时间
}
