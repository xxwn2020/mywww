<?php
namespace Test\Model;
/**
 *用户权限表
 */
class PrivilegeTable
{
	private $priv_code;		//权限标识
	private $priv_name;		//权限名
	private $parent_code;	//上级关联标识
	private $owner;			//所拥有者
}


