<?php
namespace Test\Model;
/**
 *站内信息表
 */
class MessageTable
{
	private $msg_id;		//站内信息自增ID
	private $from_id;		//发送者ID
	private $to_id;			//接受者ID
	private $title;			//信息标题
	private $content;		//信息内容
	private $add_time;		//信息发送时间
	private $last_update;	//最后更新时间
	private $new;			//是否已读
	private $parent_id;   	//上级关联ID
	private $status;		//状态
}