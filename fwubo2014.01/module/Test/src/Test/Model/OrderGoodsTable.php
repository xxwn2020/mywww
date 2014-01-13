<?php
namespace Test\Model;
/**
 *订单商品表
 */
class OrderGoodsTable
{
	private $rec_id;		//自增ID
	private $order_id;		//订单ID
	private $goods_id;		//服务ID
	private $goods_name;	//服务名
	private $spec_id;		//规格ID
	private $specification;	//规格说明
	private $price;			//价格
	private $quantity;		//数量
	private $goods_image;	//服务图片地址
	private $evaluation;   	//是否评定
	private $comment;		//评论
	private $credit_value;	//是否用积分值
	private $is_valid;		//是否有效
}
