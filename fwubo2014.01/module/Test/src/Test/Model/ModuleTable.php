<?php
namespace Test\Model;
/**
 *调用模块表
 */
class ModuleTable
{
	private $module_id;			//模块自增ID
	private $module_name;		//模块名称
	private $module_version;	//模块版本号
	private $module_desc;		//模块内容介绍
	private $module_config;		//模块设置内容
	private $enabled;			//是否可用
}