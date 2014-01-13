<?php
namespace Test\Model;
/**
 *支付方式表
 */
class PaymentTable
{
	private $payment_id;	//支付自增ID
	private $store_id;		//商铺ID
	private $payment_code;	//支付代码
	private $payment_name;	//支付名称
	private $payment_desc;	//支付简介
	private $config;		//配置
	private $is_online;		//是否为在线支付
	private $enabled;		//是否启用
	private $sort_order	;	//排序
}
