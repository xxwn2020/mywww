// JavaScript Document	
	$(document).ready(function(){
			//改变新闻内容字体
			$(".news_as").click(function(){
					obj = $(".newscon_content")
					if(!obj.hasClass("fonts12")){
							if(obj.hasClass("fonts14")){
									obj.removeClass("fonts14");
									obj.addClass("fonts12");
								}else{
									obj.removeClass("fonts16");
									obj.addClass("fonts14");	
									}
						}
				})
			$(".news_ab").click(function(){
					var obj = $(".newscon_content")
					if(!obj.hasClass("fonts16")){
							if(obj.hasClass("fonts12")){
									obj.removeClass("fonts12");
									obj.addClass("fonts14");
								}else{
									obj.removeClass("fonts14");
									obj.addClass("fonts16");	
									}
						}
				})	
		})
		
		function custom_close(){
			window.opener=null;
			window.open('','_self');
			window.close();
		}
		function printme()
		{
		//document.body.innerHTML=  "<div class='newscontent'>"+document.getElementById('printinfo').innerHTML+"</div>";
		window.print();
		}
	-->