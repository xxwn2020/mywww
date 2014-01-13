<?php
namespace Test\Model;
/**
 *商城订单表
 */
class OrderTable
{
	private $order_id;		//订单ID
	private $order_sn;		//订单号
	private $type;			//订单类型
	private $extension;		//订单扩展信息
	private $seller_id;		//商家ID
	private $seller_name;		//商家名
	private $buyer_id;		//购买者ID
	private $buyer_name;		//购买者名
	private $buyer_email;		//购买者EMAIL
	private $status;			//订单状态
	private $add_time;		//下单时间
	private $payment_id;		//支付方式
	private $payment_name;	//支付名
	private $payment_code;		//支付编码
	private $out_trade_sn;		//外部支付号
	private $pay_time;		//支付时间
	private $pay_message;		//支付信息
	private $ship_time;		//发货时间
	private $invoice_no;	//发票号
	private $finished_time;	//完成时间
	private $goods_amount;	//合计总金额
	private $discount;	//折扣价
	private $order_amount;	//订单折扣价
	private $evaluation_status;	//评定状态
	private $evaluation_time;	//评定时间
	private $anonymous;	//是否匿名
	private $postscript;	//评定信息
}