<?php
namespace Test\Model;
/**
 *会员表
 */
class MemberTable
{
	private $user_id;		//会员ID
	private $user_name;		//会员名称
	private $email;			//会员电子邮箱
	private $password;		//会员密码
	private $real_name;		//会员真实姓名
	private $gender;		//性别
	private $birthday;		//生日
	private $photo_tel;		//座机号码
	private $photo_mob;		//手机号码
	private $im_qq;			//QQ号
	private $im_skype;		//SKYPE号
	private $reg_time;		//注册时间
	private $last_login;	//最后登录时间
	private $last_ip;		//最后登录IP
	private $logins;		//登录次数
	private $ugrade;		//是否升级
	private $portrait;		//头像照片地址
	private $outer_id;		//外部ID
	private $activation;	//是否激活
	private $feed_config;	//推送事件配置
		
}