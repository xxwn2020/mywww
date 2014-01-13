<?php
namespace Test\Model;
/**
 *邮件队列表
 */
class MailQueueTable
{
	private $queue_id;		//邮件自增ID
	private $mail_to;		//接受方地址
	private $mail_encoding;	//邮件编码格式
	private $mail_subject;	//邮件标题
	private $mail_body;		//邮件正文
	private $priority;		//优先级
	private $err_num;		//错误数
	private $add_time;		//发送时间
	private $lock_expiry;   //锁定
}