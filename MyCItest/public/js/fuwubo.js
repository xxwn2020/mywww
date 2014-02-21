// JavaScript Document
$(document).ready(function(){
		//设置搜索框默认
			jQuery.focusblur = function(focusid){
					var focusobj = $(focusid);
					var defaultstr = focusobj.val();
					focusobj.focus(function(){
							var thisval = $(this).val();
							if(defaultstr==thisval){
									focusobj.val("");	
								}else{
									focusobj.select();	
									}
						})
					focusobj.blur(function(){
						var thisval = $(this).val()
						if(thisval == ""){
								focusobj.val(defaultstr)
							}	
							
						})	
				}	
			$.focusblur("#searchbox");
		//页面快捷登录
		$("#page_loginbut").click(function(){
			
			var referer = window.location.href;
			alert(referer)

		})	

	})
//获取验证码
function getcaptcha(obj,url){
	 var num =   new Date().getTime();
            var rand = Math.round(Math.random() * 10000);
            num = num + rand;
            $.ajax({
                url:url,
                type:'get',
                async:true,
                data:{tag:num},
                error:function(){alert("Error loading PHP document");},
                success:function(data){
                	obj.find("img").remove();
                    obj.append(data);
                }

            })
}
function showMsg(info,t){
		alert(info);
	}
function setMsgInfo(obj,t,s){
		if(s == undefined) s="";
		switch(t){
			case 1:
			obj.parent().find(".reg_msg").html('<img src="../images/reg_ok.jpg" />'+s);
			break;
			case 2:
			obj.parent().find(".reg_msg").html('<img src="../images/reg_err.jpg" />'+s);
			break;
			case 3:
			obj.parent().find(".reg_msg").html('');
			break;
		}
	}		
//增加服务项目/实力	
$("#addfuwu").click(function(){
	var fuwuobj = $(".fuwu_fb_form");
	if($(".fuwu_fb_form").is(":hidden")) $(".fuwu_fb_form").removeClass("hide").addClass("show");
})
//编辑服务项目
$("#fwxm").on("click",".bj",function(){
	var obj = $(this).parent().prev();

	var str = $(this).parent().parent().parent("li").find("input[name='content']").val();
	obj.html("<textarea name='update_content'>"+str+"</textarea>");
	$(this).parent().parent().parent("li").addClass("up");
	var parobj = $(this).parent();
	parobj.empty();
	parobj.append("<a href=\"javascript:void(0)\" class=\"fwxgtj\">确认修改</a>")
})
$("#fwxm").on("click",".fwxgtj",function(){
	var obj = $(this).parent().prev();
	var str = obj.find("textarea").val();
	var oldstr = $(this).parent().parent().parent("li").find("input[name='content']").val();
	var ismr = $(this).parent().parent().parent("li").find("input[name='is_def']").val();
	var parobj = $(this).parent();	
	if(str == oldstr){					
		parobj.empty();
		obj.empty().html("<table width=\"356\" style=\"float:left;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td height=\"40\"  align=\"left\" valign=\"middle\">"+oldstr+"</td></tr></table>");
		parobj.append("<a href=\"javascript:void(0)\" class=\"bj\">编辑</a>");
		parobj.append("<a href=\"javascript:void(0)\" class=\"sc\">删除</a>");
		if(ismr != "1") parobj.append("<a href=\"javascript:void(0)\" class=\"mr\">置顶</a>");
		parobj.parent().parent("li").removeClass("up");
	}else{
		/*$.ajax({
			url:"subfuwu.php",
			type:"get",
			async:false,
			data:{fwstr:str,fwid:"15"},
			error:function(){alert("Error loading PHP document");},
			success:function(data){
				if(data == "ok"){
					obj.empty().html(str);
					parobj.empty();
					parobj.parent("li").find(".l1").html("审核中");
					parobj.parent("li").removeClass("up");
				}

			}

		})*/
		if(str == ""){
			showMsg("服务项目不能为空");
			return;
		}
		if(!$.setInputStrCount(obj.find("textarea"),20)){
			showMsg("服务项目字数超出限制，限制输入20个字符");
			return;
		}

		parobj.parent().parent("li").find("form").submit();
	}
})
//编辑服务实力
$("#fwsl").on("click",".bj",function(){
	var obj = $(this).parent().parent("form").find(".l2");
	var str = $(this).parent().parent().parent("li").find("input[name='content']").val();
	obj.html("<textarea name='update_content'>"+str+"</textarea>");
	$(this).parent().parent().parent("li").addClass("up");
	var parobj = $(this).parent();
	parobj.empty();
	parobj.append("<a href=\"javascript:void(0)\" class=\"fwxgtj\">确认修改</a>")
})
$("#fwsl").on("click",".fwxgtj",function(){
	var obj = $(this).parent().parent("form").find(".l2");
	var str = obj.find("textarea").val();
	var oldstr = $(this).parent().parent().parent("li").find("input[name='content']").val();
	var ismr = $(this).parent().parent().parent("li").find("input[name='is_def']").val();
	var parobj = $(this).parent();	
	if(str == oldstr){					
		parobj.empty();
		obj.empty().html("<table width=\"257\" style=\"float:left;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td height=\"40\"  align=\"left\" valign=\"middle\">"+oldstr+"</td></tr></table>");
		parobj.append("<a href=\"javascript:void(0)\" class=\"bj\">编辑</a>");
		parobj.append("<a href=\"javascript:void(0)\" class=\"sc\">删除</a>");
		if(ismr != "1") parobj.append("<a href=\"javascript:void(0)\" class=\"mr\">置顶</a>");
		parobj.parent().parent("li").removeClass("up");
	}else{
		/*$.ajax({
			url:"subfuwu.php",
			type:"get",
			async:false,
			data:{fwstr:str,fwid:"15"},
			error:function(){alert("Error loading PHP document");},
			success:function(data){
				if(data == "ok"){
					obj.empty().html(str);
					parobj.empty();
					parobj.parent("li").find(".l1").html("审核中");
					parobj.parent("li").removeClass("up");
				}

			}

		})*/
		if(str == ""){
			showMsg("服务实力不能为空");
			return;
		}
		if(!$.setInputStrCount(obj.find("textarea"),20)){
			showMsg("服务实力字数超出限制，限制输入20个字符");
			return;
		}

		parobj.parent().parent("li").find("form").submit();
	}
})

//发布服务项目

$("#subAddfuwu").click(function(){
	var formobj = $(this).parent().parent("form");
	var str = formobj.find(".l2_1").find("textarea").val();
	var isstrleng = $.setInputStrCount($(".inputStr"),20);
	if(str == ""){
		showMsg("服务项目不能为空");
		return;
	}
	if(!isstrleng){
		showMsg("服务项目字数超出限制，限制输入20个字符");
		return;
	}
	formobj.submit();
})

//发布服务实力

$("#subAddfuwu_sl").click(function(){
	var formobj = $(this).parent().parent("form");
	var str = formobj.find(".l2").find("textarea").val();
	var isstrleng = $.setInputStrCount($(".inputStr"),20);
	if(str == ""){
		showMsg("服务项目不能为空");
		return false;
	}
	alert("aa")
	if(!isstrleng){
		showMsg("服务项目字数超出限制，限制输入20个字符");
		return false;
	}
	formobj.submit();
})

//取消发布服务项目
$("#qxaddFuwu").click(function(){$(".fuwu_fb_form").removeClass("show").addClass("hide")})
//删除服务项目信息
$("#fwxm").on("click","a[class='sc']",function(){
	if(window.confirm("您确定要删除该服务项目?")){
		var thissid = $(this).parent().parent("form").find("input[name='sid']").val();
		var obj = $(this).parent().parent().parent("li");
		$.ajax({
			url:'del_serv',
			type:'get',
			async:true,
			data:{sid:thissid},
			error:function(){alert("Error loading PHP document");},
			success:function(data){
				if(data == "1"){					
					obj.remove();
				}
			}
		})
	}

})
//删除服务实力信息
$("#fwsl").on("click","a[class='sc']",function(){	
	if(window.confirm("您确定要删除该服务实力?")){
		var thissid = $(this).parent().parent("form").find("input[name='sid']").val();
		var obj = $(this).parent().parent().parent("li");
		$.ajax({
			url:'del_stre',
			type:'get',
			async:true,
			data:{sid:thissid},
			error:function(){alert("Error loading PHP document");},
			success:function(data){
				if(data == "1"){					
					obj.remove();
				}
			}
		})
	}

})
//设置默认服务项目
$("#fwxm").on("click","a[class='mr']",function(){
	if(window.confirm("您确定要设置该服务项目为默认项目？")){
		var thissid = $(this).parent().parent("form").find("input[name='sid']").val();
		var obj = $(this).parent().parent().parent("li");
		$.ajax({
			url:'set_default_serv',
			type:'get',
			async:true,
			data:{sid:thissid},
			error:function(){alert("Error loading PHP document");},
			success:function(data){
				if(data == "1"){					
					 location.reload()
				}
			}
		})
	}
})
//设置默认服务实力
$("#fwsl").on("click","a[class='mr']",function(){
	if(window.confirm("您确定要设置该服务实力为默认实力？")){
		var thissid = $(this).parent().parent("form").find("input[name='sid']").val();
		var obj = $(this).parent().parent().parent("li");
		$.ajax({
			url:'set_default_stre',
			type:'get',
			async:true,
			data:{sid:thissid},
			error:function(){alert("Error loading PHP document");},
			success:function(data){
				if(data == "1"){					
					 location.reload()
				}
			}
		})
	}
})
//输入字符字数检测
jQuery.setInputStrCount = function(obj,strCount,outobj){
	if(obj == undefined) return null;
	if(strCount == undefined && outobj == undefined){
		return obj.val().length;
	}else if(strCount != undefined && outobj == undefined){
		return obj.val().length > strCount ? false : true;
	}
	obj.keyup(function(e){
		var strleng = $(this).val().length;						
		if(strleng > strCount){
			outobj.html("<span>"+strleng+"</span>/"+strCount);
		}else{
			outobj.html(strleng+"/"+strCount);
		}			
	})	
}
