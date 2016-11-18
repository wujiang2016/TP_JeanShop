var app=angular.module("myApp",[]);
var receivedPAGE;			//已收到邮件总页数
var sentPAGE;				//已发送邮件总页数

var receivedPage=1;			//已收到邮件当前页
var sentPage=1;				//已发送邮件当前页

var searchReceivedEmail="";	//记录搜索已收到邮件关键字
var searchSentEmail="";		//记录搜索已发送邮件关键字

var user=(getValueFromUrl("user")||getCookie("user"))?(getValueFromUrl("user")||getCookie("user")):"passenger";

$.ajax({		//显示已收到邮件总页数
	type:"GET",
	async:false,
	url:"./ajax-php/email.php?receivedPAGE=1&user="+user,
	success:function(msg) {
		receivedPAGE=msg;
		console.log(receivedPAGE);
	}
});
$.ajax({		//显示已发送邮件总页数
	type:"GET",
	async:false,
	url:"./ajax-php/email.php?sentPAGE=1&user="+user,
	success:function(data) {
		sentPAGE=data;
		console.log(sentPAGE);
	}
});
app.controller("myCtrl", function($scope,$http) {
	$http.get("./ajax-php/email.php?user="+user+"&receivedPage=1").success(function(response) {
		$scope.receivedEmail=response;
	});
	$http.get("./ajax-php/email.php?user="+user+"&sentPage=1").success(function(data) {
		$scope.sentEmail=data;
	});
	$scope.searchReceivedEmail=function(){
		searchReceivedEmail=angular.element("#searchReceivedEmail").val();
		angular.element("#searchReceivedEmail").val("");
		$.ajax({
			type:"GET",
			async:false,
			url:"./ajax-php/email.php?receivedPAGE=1&user="+user+"&searchReceivedEmail="+searchReceivedEmail,
			success:function(msg) {
				receivedPAGE=msg;
			}
		});
		fetchReceivedEmail(1);
		$http.get("./ajax-php/email.php?user="+user+"&searchReceivedEmail="+searchReceivedEmail+"&receivedPage=1").success(function(response) {
			$scope.receivedEmail=response;
		});
	}

	$scope.searchSentEmail=function(){
		searchSentEmail=angular.element("#searchSentEmail").val();
		angular.element("#searchSentEmail").val("");
		$.ajax({
			type:"GET",
			async:false,
			url:"./ajax-php/email.php?sentPAGE=1&user="+user+"&searchSentEmail="+searchSentEmail,
			success:function(msg) {
				sentPAGE=msg;
			}
		});
		fetchSentEmail(1);
		$http.get("./ajax-php/email.php?user="+user+"&searchSentEmail="+searchSentEmail+"&sentPage=1").success(function(response) {
			$scope.sentEmail=response;
		});
	}

	$scope.changeReceivedPage=function(x){
		if (receivedPage==1) {				//若是第一页，点上一页或首页没反应
			if (x==1 || x=="prev1") {
				return;
			};
		};
		if (receivedPage==receivedPAGE){			//若是最后一页，点下一页或尾页没反应
			if (x=="end" || x=="next1") {
				return;
			};
		};
		if (x==1) {
			receivedPage=x;
			fetchReceivedEmail(receivedPage);
		}else if (x=="end") {
			receivedPage=receivedPAGE;
			fetchReceivedEmail(receivedPage);
		}else if (x.slice(0,4)=="prev") {
			receivedPage-=parseInt(x.slice(4));
			fetchReceivedEmail(receivedPage);
		} else if(x.slice(0,4)=="next"){
			receivedPage+=parseInt(x.slice(4));
			fetchReceivedEmail(receivedPage);
		}

		$http.get("./ajax-php/email.php?user="+user+"&searchReceivedEmail="+searchReceivedEmail+"&receivedPage="+receivedPage).success(function(response) {
			$scope.receivedEmail=response;
		});
	}

	$scope.changeSentPage=function(x){
		if (sentPage==1) {				//若是第一页，点上一页或首页没反应
			if (x==1 || x=="prev1") {
				return;
			};
		};
		if (sentPage==sentPAGE){			//若是最后一页，点下一页或尾页没反应
			if (x=="end" || x=="next1") {
				return;
			};
		};
		if (x==1) {
			sentPage=x;
			fetchSentEmail(sentPage);
		}else if (x=="end") {
			sentPage=sentPAGE;
			fetchSentEmail(sentPage);
		}else if (x.slice(0,4)=="prev") {
			sentPage-=parseInt(x.slice(4));
			fetchSentEmail(sentPage);
		} else if(x.slice(0,4)=="next"){
			sentPage+=parseInt(x.slice(4));
			fetchSentEmail(sentPage);
		}

		$http.get("./ajax-php/email.php?user="+user+"&searchSentEmail="+searchSentEmail+"&sentPage="+sentPage).success(function(response) {
			$scope.sentEmail=response;
		});
	}
	$scope.num=200;
	
	
});

//获取已收到邮件组（3个一组）数据
function fetchReceivedEmail(page) {
	//设置首页、下一页、上一页、尾页光标
	if (page!=1) {
		$("#receivedPaging li").eq(0).css({'cursor': 'pointer'});
		$("#receivedPaging li").eq(1).css({'cursor': 'pointer'});
	}else{
		$("#receivedPaging li").eq(0).css({'cursor': 'auto'});
		$("#receivedPaging li").eq(1).css({'cursor': 'auto'});
	}
	if (page!=receivedPAGE) {
		$("#receivedPaging li").eq(9).css({'cursor': 'pointer'});
		$("#receivedPaging li").eq(10).css({'cursor': 'pointer'});
	}else{
		$("#receivedPaging li").eq(9).css({'cursor': 'auto'});
		$("#receivedPaging li").eq(10).css({'cursor': 'auto'});
	}
	// 设置页码的隐藏和显示
	if((page-3)>=1){
		$("#receivedPaging li").eq(2).show();
	}else{
		$("#receivedPaging li").eq(2).hide();
	}
	if((page-2)>=1){
		$("#receivedPaging li").eq(3).show().text(page-2).css({'cursor': 'pointer'});
	}else{
		$("#receivedPaging li").eq(3).hide();
	}
	if((page-1)>=1){
		$("#receivedPaging li").eq(4).show().text(page-1).css({'cursor': 'pointer'});
	}else{
		$("#receivedPaging li").eq(4).hide();
	}

	$("#receivedPaging li").eq(5).text(page);

	if((page+1)<=receivedPAGE){
		$("#receivedPaging li").eq(6).show().text(page+1).css({'cursor': 'pointer'});
	}else{
		$("#receivedPaging li").eq(6).hide();
	}
	if((page+2)<=receivedPAGE){
		$("#receivedPaging li").eq(7).show().text(page+2).css({'cursor': 'pointer'});
	}else{
		$("#receivedPaging li").eq(7).hide();
	}
	if((page+3)<=receivedPAGE){
		$("#receivedPaging li").eq(8).show();
	}else{
		$("#receivedPaging li").eq(8).hide();
	}
}

//获取已发邮件组（3个一组）数据
function fetchSentEmail(page) {
	//设置首页、下一页、上一页、尾页光标
	if (page!=1) {
		$("#sentPaging li").eq(0).css({'cursor': 'pointer'});
		$("#sentPaging li").eq(1).css({'cursor': 'pointer'});
	}else{
		$("#sentPaging li").eq(0).css({'cursor': 'auto'});
		$("#sentPaging li").eq(1).css({'cursor': 'auto'});
	}
	if (page!=sentPAGE) {
		$("#sentPaging li").eq(9).css({'cursor': 'pointer'});
		$("#sentPaging li").eq(10).css({'cursor': 'pointer'});
	}else{
		$("#sentPaging li").eq(9).css({'cursor': 'auto'});
		$("#sentPaging li").eq(10).css({'cursor': 'auto'});
	}
	// 设置页码的隐藏和显示
	if((page-3)>=1){
		$("#sentPaging li").eq(2).show();
	}else{
		$("#sentPaging li").eq(2).hide();
	}
	if((page-2)>=1){
		$("#sentPaging li").eq(3).show().text(page-2).css({'cursor': 'pointer'});
	}else{
		$("#sentPaging li").eq(3).hide();
	}
	if((page-1)>=1){
		$("#sentPaging li").eq(4).show().text(page-1).css({'cursor': 'pointer'});
	}else{
		$("#sentPaging li").eq(4).hide();
	}

	$("#sentPaging li").eq(5).text(page);

	if((page+1)<=sentPAGE){
		$("#sentPaging li").eq(6).show().text(page+1).css({'cursor': 'pointer'});
	}else{
		$("#sentPaging li").eq(6).hide();
	}
	if((page+2)<=sentPAGE){
		$("#sentPaging li").eq(7).show().text(page+2).css({'cursor': 'pointer'});
	}else{
		$("#sentPaging li").eq(7).hide();
	}
	if((page+3)<=sentPAGE){
		$("#sentPaging li").eq(8).show();
	}else{
		$("#sentPaging li").eq(8).hide();
	}
}

//过滤HTML标签和字数
app.filter("trustHtml",function($sce){
	return function(input,num) {
		if (input.length>num) {
			input=input.slice(0,num)+"...";
		}
		return $sce.trustAsHtml(input);
	}
});

//对"阅读全文"和"收起"两个词进行切换
function changeWord(obj){
	if ($(obj).text()=="阅读全文") {
		$(obj).text("收起");
	} else{
		$(obj).text("阅读全文");
	};
}

fetchReceivedEmail(1);
fetchSentEmail(1);

$(document).ready(function() {
	if (getCookie("user")||getValueFromUrl("user")) {
		var user=getCookie("user")||getValueFromUrl("user");
		var imgUrl="headimg/"+user+".jpg";
	// 设置头像
		$("#logo img:first").attr("src",imgUrl);
	// 设置登陆注册
		$("#register li:first").html(user);
		$("#register li:last").html("<a href=\"javascript:void(0);\" onclick=\"logoff()\">注销</a>");
	// 设置Menu
		$("#menu li:eq(1) a:first").attr("href","blog.html?user="+user);
		$.get("./ajax-php/blog.php",{"user":user},function(data){
			if (data==0) {
				$("#menu li:eq(2) a:first").attr("href","email.html?user="+user);
			} else{
				$("#menu li:eq(2) a:first").attr("href","email.html?user="+user).append("<span style='color:red;'>["+data+"]</span>");
			};
		});
		if (user!="admin") {
			$("#menu li:eq(3)").hide();
		};
	} else{
		$("#logo img:first").attr("src","images/logo.png");
		$("#register li:first").html("<a href=\"login.html\">登录</a>");
		$("#register li:last").html("<a href=\"register.html\">注册</a>");
	};
});
//注销
function logoff(){
	$.ajaxSetup({
		async:false
	});
	console.log(user);
	if (user=="admin") {
		$.get("./ajax-php/backgroundcontrol.php?logoff=1");
	};
	setCookie("user","",-1);
	window.location.href="index.html";
}
// 发邮件
function updateEmail(obj) {
	var receiver=$(obj).find("#receiver").val();
	var emailSubject=$(obj).find("#emailSubject").val();
	var emailContent=$(obj).find("#emailContent").val();
	
	var author=(getValueFromUrl("user")||getCookie("user"))?(getValueFromUrl("user")||getCookie("user")):"passenger";
	if (receiver=="") {
		$(obj).find("#receiver").attr("placeholder","请输入收件人邮箱！");
		return;
	} else if (emailSubject=="") {
		$(obj).find("#emailSubject").attr("placeholder","请输入邮件主题！");
		return;
	} else if (emailContent=="") {
		$(obj).find("#emailContent").attr("placeholder","请输入邮件内容！");
		return;
	} else if (author=="passenger") {
		$(obj).find("#receiver").val("");
		$(obj).find("#emailSubject").val("");
		$(obj).find("#emailContent").val("");
		$(obj).find("#emailContent").attr("placeholder","请先登录再发送邮件！");
		return;
	}
	
	$(obj).find("#receiver").val("");
	$(obj).find("#emailSubject").val("");
	$(obj).find("#emailContent").val("");

	$.ajaxSetup({
		async:false
	});
	$.get("./ajax-php/email.php", {
			"receiver":receiver,
			"emailSubject":emailSubject,
			"emailContent":emailContent,
			"user":author
		},
	  	function(info){
		  	$(obj).find("#emailContent").attr("placeholder",info);
	  	}
	);
	return false;
}