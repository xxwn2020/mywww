// JavaScript Document
	///用户名输入设置 邮箱手机
		jQuery.inputUser = function(uID,t,s,defaultstr){
				var UserObj = $(uID);				
				if(UserObj.length == 0) return false;				
						UserObj.keyup(function(e){
							var kewNum = window.event ? e.keyCode : e.which;
							if(kewNum == 38 || kewNum == 40 || kewNum == 13) return;
							var str = UserObj.val();	
							switch(t){
								case "p":
									var re = /^1{1}[358]{1}[0-9]{0,9}$/;
									
									if(!re.test(str)){
										 setMsgInfo(UserObj,2,'手机格式不正确');
										}else{
											if(str.length < 11){		
												if(s) setMsgInfo(UserObj,3); 
											}else{
												if(s) setMsgInfo(UserObj,1);	
												}
										}
										break;
								case "e":
									if(str.length < 3) 
									{
										if(!$("#fullmail").is(":hidden")) $("#fullmail").hide();
										return;
									}
									
									var str = $(this).val();
									if(str != ""){
										divobj = $("#fullmail");
										getFullEmail(divobj,str);
										
									}else{
										if(!$("#fullmail").is(":hidden")) $("#fullmail").hide();
									}
									break;
								
								default:
									if(str.length < 3) 
									{
										if(!$("#fullmail").is(":hidden")) $("#fullmail").hide();
										return;
									}
									
									var re = /^1{1}[358]{1}[0-9]{1,9}$/;
									if(!re.test(str))
									{
										var str = $(this).val();
										if(str != ""){
											divobj = $("#fullmail");
											getFullEmail(divobj,str);
											
										}else{
											if(!$("#fullmail").is(":hidden")) $("#fullmail").hide();
										}
									}else{
										if(!$("#fullmail").is(":hidden")) $("#fullmail").hide();
										}
										break;
							}
						})
						
						
						UserObj.focus(function(){
								var thisval = $(this).val();								
								
								
								if(defaultstr==thisval)
								{
									$(this).val("");
									setMsgInfo($(this),3); 
								}
							})
						UserObj.blur(function(){
							var thisval = $(this).val();
							var re = /^1{1}[358]{1}[0-9]{9}$/;
							var re1 = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
							switch(t){
									case "p":
										
										if(thisval == ""||thisval ==defaultstr){								
										$(this).val(defaultstr);
										setMsgInfo($(this),2,"请输入注册账号"); 									
										}else{
										if($("#checkUser").val()) checkUserName($(this))

										}
										break;
									case "e":
										if(thisval == ""||thisval ==defaultstr){								
										$(this).val(defaultstr);
										setMsgInfo($(this),2,"请输入注册账号"); 
										return;									
										}
										if(re1.test(thisval)){											
											setMsgInfo($(this),1);	
											if($("#checkUser").val()) checkUserName($(this))
											}else{
											setMsgInfo($(this),2,"邮箱格式不正确");	
											}

										break;
									default:
										if(thisval == ""||thisval ==defaultstr){								
										$(this).val(defaultstr);																		
										}
										break;		
									}


								if(re.test(thisval)||re1.test(thisval)){
									if(!$("#fullmail").is(":hidden")) $("#fullmail").hide();	
									}	
							})	
						

			}
			
			


function getFullEmail(e,s){
		e.show();
		var emai = ['qq.com', '163.com', 'sohu.com', 'yahoo.com.cn',
                   'sina.com', 'yahoo.com', '126.com', 'yeah.net',
                   'hotmail.com', 'sina.com.cn', 'msn.com', '163.net',
                   'gmail.com', 'live.cn', 'live.com', '36.net',
                   'ask.com', '0355.net', 'aol.com'
                   ];
		e.empty();
		var tempstr = getend(s,"@");
		var j = 0;
		for(var i = 0;i<emai.length;i++){
				if(tempstr != "#no#"){
					var temail = emai[i].toLowerCase();	
					if(temail.indexOf(tempstr.toLowerCase()) == -1) continue;
					str = "<li><a href='javascript:void(0)'>"+getfront(s,"@")+"@"+emai[i]+"</a></li>";
					}else{
					str = "<li><a href='javascript:void(0)'>"+s+"@"+emai[i]+"</a></li>";
					}
				e.html(e.html()+str)	
				j++;
				if(j > 5) break;
			}
		if($("#fullmail").html() == "")$("#fullmail").hide();	
		$("#fullmail li").css("width",$("#fullmail ol").css("width"));
		$("#fullmail li:first").addClass("up");
	}	

	
function getend(mainstr,searchstr){
	 foundoffset=mainstr.indexOf(searchstr);
	  if(foundoffset == -1){
			return "#no#";
		  }
	return mainstr.substring(foundoffset+searchstr.length,mainstr.length); 
}
function getfront(mainstr,searchstr){
	 foundoffset=mainstr.indexOf(searchstr);
	 if(foundoffset==-1){
	 return null;
	 }
	return mainstr.substring(0,foundoffset);
}

$(document).keydown(function(e)    
{   
	var obj = $("#fullmail");
			if(!obj.is(":hidden")){
						var eq = obj.find("li").index(obj.find(".up"));
						var maxeq = $("#fullmail li").length;
						var kewNum = window.event ? e.keyCode : e.which;
						if(!(kewNum == 38 || kewNum == 40 || kewNum == 13)) return;						
						switch(kewNum){
							case 38:
									if(eq>0){
											$("#fullmail li").removeClass("up");
											$("#fullmail li:eq("+(eq-1)+")").addClass("up")
											
										};
									break;
							case 40:
									if(eq < maxeq-1){
											
										$("#fullmail li").removeClass("up");
										$("#fullmail li:eq("+(eq+1)+")").addClass("up")
										}
									break;
							case 13:
									var m = $("#fullmail .up").find("a").html();
									$("#userName").val(m);
									setMsgInfo($("#userName"),1);	
									$("#fullmail").hide();								
									break;		
						}
					}
	})
	
$("#fullmail").on("click","li",function(){	
	var m = $(this).find("a").html();
	$("#userName").val(m);	
	$("#fullmail").hide();				
	setMsgInfo($("#userName"),1);
	if($("#checkUser").val()=="1") checkUserName($("#userName"))	
})	
$("#fullmail").on("mouseover","li",function(){	
$("#fullmail li").removeClass("up")
$(this).addClass("up");	
})	



/////password 输入设置
jQuery.inputPass = function(passid,s){
		var PassObj = $(passid);
		var defaultpass = PassObj.val();
		if(s) var sboj = PassObj.parent().find(".reg_msg");	
			PassObj.focus(function(){
				var thisval = $(this).val();
				if(defaultpass==thisval) $(this).val("");
				$(this).attr("type","password");	
				
			})
			PassObj.blur(function(){
				var thisval = $(this).val();
				if(thisval == ""){
						if(s)setMsgInfo($(this),2,"请输入密码");
						$(this).val(defaultpass);
						$(this).attr("type","text");
						return;
					}else{
						if(s){
							var repass = /[\u4e00-\u9fa5]/;
							if(thisval.length < 6 || thisval.length > 16 ||thisval.search(repass) != -1){
								setMsgInfo($(this),2,"密码格式不正确");
								}else{
								setMsgInfo($(this),1)	
									}	
						
						}
					}
				})
		
		
	}
	
	
//登录检测//	
var checkLogin = function(){
		var userName = $("#userName").val();
		var re = /^1{1}[358]{1}[0-9]{9}$/;
		var re1 = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		/*
		if(!re.test(userName)&&!re1.test(userName)){
			if(!$("#fullmail").is(":hidden")) $("#fullmail").hide();
				showMsg("用户名不正确，请正确输入");
				return false;
			}
		var Pass = $("#userPass").val();
		var repass = /[\u4e00-\u9fa5]/;
		if(Pass.length < 6 || Pass.length > 16 ||Pass.search(repass) != -1){
			showMsg("密码输入不正确，请正确输入");
			return false;
			}	
		var checkCode = $("#checkCode").val();
		var recode = /^[a-zA-Z0-9]{4}$/;
		if(!recode.test(checkCode)){
			showMsg("验证码输入不正确，请正确输入");
			return false;
			}	
			*/				
			$("#LoginFrom").submit();
	}	
/////检测账号是否已被注册
function checkUserName(obj){
	$.ajax({
			url:'checkuser.php',
			type:'get',
			async:true,
			data:{userName:obj.val()},
			dataType:'html',
			timeout:3000,
			error:function(){alert("Error loading PHP document");},
			success:function(data){
				if(data == "1"){
					setMsgInfo(obj,1)
					$("#ischeckUser").val(true);
				}else{
					setMsgInfo(obj,2,"对不起,该账号已被注册")
					$("#ischeckUser").val(false);
				}

			}
	})	

	}
////注册检测
var checkRegUser = function(){
	var regType = $("input[name='regtype']:checked").val();
	var ischeck = true;
	/*

	if(regType == "1"){
		var userNameobj = $("#userName");
		var re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(!re.test(userNameobj.val())){
				setMsgInfo(userNameobj,2,"账号为空或格式不正确");
				ischeck = false;
			}
	}else{
		var userNameobj = $("#regPhone");
		var re = /^1{1}[358]{1}[0-9]{9}$/;
		if(!re.test(userNameobj.val())){
				setMsgInfo(userNameobj,2,"账号为空或格式不正确");
				ischeck = false;
			}
		var phoneCodeObj = $("#phoneCode");		
		if(phoneCodeObj.val() == ""||phoneCodeObj.val()=="请输入您获取的验证码"){			
			setMsgInfo(phoneCodeObj,2,"请输入手机验证码");
			ischeck = false;
			}	

	}

		var unameObj = $("#uname");		
		if(unameObj.val() == ""||unameObj.val()=="请输入真实姓名方便更多朋友找到您"){			
			setMsgInfo(unameObj,2,"请输入您的姓名");
			ischeck = false;
			}	
		var PassObj = $("#passWord");
		var Pass = PassObj.val();
		var repass = /[\u4e00-\u9fa5]/;
		if(Pass.length < 6 || Pass.length > 16 ||Pass.search(repass) != -1){			
			setMsgInfo(PassObj,2,"密码6-16个字符，不可以为9位数以下的纯数字");
			ischeck = false;
			}
		var rePassObj = $("#repassWord");
		if(rePassObj.val() != PassObj.val()){
			setMsgInfo(rePassObj,2,"重复密码输入不正确");
			ischeck = false;
		}

	if (ischeck&&$("#ischeckUser").val()) {
		alert("ok");
	} else{
		alert("no")
	}
	*/
	$("#regFrom").submit();
}		