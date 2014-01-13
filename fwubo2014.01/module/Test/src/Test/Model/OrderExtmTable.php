<?php
namespace Test\Model;
/**
 *单信//订息扩展表
 */
class OrderExtmTable
{
	private $order_id;		//订单ID
	private $consignee;		//收件人
	private $region_id;		//地区ID标识
	private $region_name;	//地区名
	private $address;		//送货地址
	private $zipcode;		//邮编
	private $phone_tel;		//座机电话
	private $phone_mob;		//手机电话
	private $shipping_id;   //送货方式所属ID
	private $shipping_name;	//送货方式
	private $shipping_fee;	//送货费用
}
