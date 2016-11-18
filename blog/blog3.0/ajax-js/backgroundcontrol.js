var app=angular.module("myApp",[]);

var PAGE;					//博客总页数
var commentPAGE;			//评论管理总页数
var userPAGE;				//用户管理总页数

var currentPageC=1;			//博客组当前页
var commentPage=1;			//评论管理当前页
var userPage=1;				//用户管理当前页

var searchContent="";		//记录搜索文章关键字
var searchComment="";		//记录搜索评论管理关键字
var searchUser="";			//记录搜索用户管理关键字

var user=(getValueFromUrl("user")||getCookie("user"))?(getValueFromUrl("user")||getCookie("user")):"passenger";
// if (user!="admin") {
// 	window.location.href="index.html";
// };
$.ajax({		//显示博客总页数
	type:"GET",
	async:false,
	url:"./ajax-php/backgroundcontrol.php?PAGE=1",
	success:function(msg) {
		PAGE=msg;
	}
});
$.ajax({		//显示评论管理总页数
	type:"GET",
	async:false,
	url:"./ajax-php/backgroundcontrol.php?commentPAGE=1",
	success:function(msg) {
		commentPAGE=msg;
	}
});
$.ajax({		//显示用户管理总页数
	type:"GET",
	async:false,
	url:"./ajax-php/backgroundcontrol.php?userPAGE=1",
	success:function(data) {
		userPAGE=data;
	}
});

app.controller("myCtrl", function($scope,$http) {
	$http.get("./ajax-php/backgroundcontrol.php?page=1").success(function(response) {
		$scope.blog=response;
	});
	$http.get("./ajax-php/backgroundcontrol.php?commentPage=1").success(function(response) {
		$scope.comment=response;
	});
	$http.get("./ajax-php/backgroundcontrol.php?userPage=1").success(function(data) {
		$scope.user=data;
	});
	$http.get("./ajax-php/backgroundcontrol.php?passengerCommNo=1").success(function(data) {
		$scope.passengerCommNo=data;
	});
	$scope.searchComment=function(){
		searchComment=angular.element("#searchComment").val();
		angular.element("#searchComment").val("");
		$.ajax({
			type:"GET",
			async:false,
			url:"./ajax-php/backgroundcontrol.php?commentPAGE=1&searchComment="+searchComment,
			success:function(msg) {
				commentPAGE=msg;
			}
		});
		fetchComment(1);
		$http.get("./ajax-php/backgroundcontrol.php?searchComment="+searchComment+"&commentPage=1").success(function(response) {
			$scope.comment=response;
		});
	}

	$scope.searchUser=function(){
		searchUser=angular.element("#searchUser").val();
		angular.element("#searchUser").val("");
		$.ajax({
			type:"GET",
			async:false,
			url:"./ajax-php/backgroundcontrol.php?userPAGE=1&searchUser="+searchUser,
			success:function(msg) {
				userPAGE=msg;
			}
		});
		fetchUser(1);
		$http.get("./ajax-php/backgroundcontrol.php?searchUser="+searchUser+"&userPage=1").success(function(response) {
			$scope.user=response;
		});
	}
	$scope.toggleShutup=function(obj){
		// var name=obj.val();
		// console.log(name);
		// console.log(obj);

		$http.get("./ajax-php/backgroundcontrol.php?searchUser="+searchUser+"&userPage="+userPage).success(function(response) {
			$scope.user=response;
		});
	}
	$scope.changePage=function(x){
		if (currentPageC==1) {				//若是第一页，点上一页或首页没反应
			if (x==1 || x=="prev1") {
				return;
			};
		};
		if (currentPageC==PAGE){			//若是最后一页，点下一页或尾页没反应
			if (x=="end" || x=="next1") {
				return;
			};
		};
		if (x==1) {
			currentPageC=x;
			fetchBlogs(currentPageC);
		}else if (x=="end") {
			currentPageC=PAGE;
			fetchBlogs(currentPageC);
		}else if (x.slice(0,4)=="prev") {
			currentPageC-=parseInt(x.slice(4));
			fetchBlogs(currentPageC);
		} else if(x.slice(0,4)=="next"){
			currentPageC+=parseInt(x.slice(4));
			fetchBlogs(currentPageC);
		}

		$http.get("./ajax-php/backgroundcontrol.php?searchContent="+searchContent+"&page="+currentPageC).success(function(response) {
			$scope.blog=response;
		});
	}
	$scope.changeCommentPage=function(x){
		if (commentPage==1) {				//若是第一页，点上一页或首页没反应
			if (x==1 || x=="prev1") {
				return;
			};
		};
		if (commentPage==commentPAGE){			//若是最后一页，点下一页或尾页没反应
			if (x=="end" || x=="next1") {
				return;
			};
		};
		if (x==1) {
			commentPage=x;
			fetchComment(commentPage);
		}else if (x=="end") {
			commentPage=commentPAGE;
			fetchComment(commentPage);
		}else if (x.slice(0,4)=="prev") {
			commentPage-=parseInt(x.slice(4));
			fetchComment(commentPage);
		} else if(x.slice(0,4)=="next"){
			commentPage+=parseInt(x.slice(4));
			fetchComment(commentPage);
		}
		$http.get("./ajax-php/backgroundcontrol.php?searchComment="+searchComment+"&commentPage="+commentPage).success(function(response) {
			$scope.comment=response;
		});
	}

	$scope.changeUserPage=function(x){
		if (userPage==1) {				//若是第一页，点上一页或首页没反应
			if (x==1 || x=="prev1") {
				return;
			};
		};
		if (userPage==userPAGE){			//若是最后一页，点下一页或尾页没反应
			if (x=="end" || x=="next1") {
				return;
			};
		};
		if (x==1) {
			userPage=x;
			fetchUser(userPage);
		}else if (x=="end") {
			userPage=userPAGE;
			fetchUser(userPage);
		}else if (x.slice(0,4)=="prev") {
			userPage-=parseInt(x.slice(4));
			fetchUser(userPage);
		} else if(x.slice(0,4)=="next"){
			userPage+=parseInt(x.slice(4));
			fetchUser(userPage);
		}

		$http.get("./ajax-php/backgroundcontrol.php?searchUser="+searchUser+"&userPage="+userPage).success(function(response) {
			$scope.user=response;
		});
	}
	$scope.searchArticle=function(){							//搜索博客
		searchContent=angular.element("#searchContent").val();
		$.ajax({
			type:"GET",
			async:false,
			url:"./ajax-php/backgroundcontrol.php?PAGE=1&searchContent="+searchContent,
			success:function(msg) {
				PAGE=msg;
			}
		});
		fetchBlogs(1);
		$http.get("./ajax-php/backgroundcontrol.php?searchContent="+searchContent+"&page=1").success(function(response) {
			$scope.blog=response;
		});
	}
	$scope.deleteArticle=function(){		//删除博客
		$.ajax({
			type:"GET",
			async:false,
			url:"./ajax-php/backgroundcontrol.php?PAGE=1&searchContent="+searchContent,
			success:function(msg) {
				PAGE=msg;
			}
		});
		if (currentPageC>PAGE) {
			currentPageC=PAGE;
		};
		fetchBlogs(currentPageC);
		$http.get("./ajax-php/backgroundcontrol.php?searchContent="+searchContent+"&page="+currentPageC).success(function(response) {
			$scope.blog=response;
		});
	}
	$scope.deleteComm=function(){		//删除评论
		$.ajax({
			type:"GET",
			async:false,
			url:"./ajax-php/backgroundcontrol.php?commentPAGE=1&searchContent="+searchContent,
			success:function(msg) {
				commentPAGE=msg;
			}
		});
		if (commentPage>commentPAGE) {
			commentPage=commentPAGE;
		};
		fetchComment(commentPage);
		$http.get("./ajax-php/backgroundcontrol.php?searchContent="+searchContent+"&commentPage="+commentPage).success(function(response) {
			$scope.comment=response;
		});
	}
	$scope.num=200;
});
//禁言和解禁
function toggleShutup(obj) {
	// var fso, ts;
	// var ForWriting= 2;
	// fso = new ActiveXObject("Scripting.FileSystemObject");
	// ts = fso.OpenTextFile("./log/log.txt", 8);
	// // date_default_timezone_set("Asia/Shanghai");
	// var date=new Date();
	// var str="\n管理员admin于"+date+"注销了登陆。";
	// ts.WriteLine(str) ;
	// ts.close();

	if ($(obj).val()=="禁言") {
		var username=$(obj).attr("name");
		var shutupDay=$("#"+username).val();

		$.ajaxSetup({
			async:false
		});
		$.get("./ajax-php/backgroundcontrol.php", {
				"user":username,
				"shutupDay":shutupDay
			},
		  	function(info){
			  	// $(obj).find("#emailContent").attr("placeholder",info);
		  	}
		);
	} else{
		var username=$(obj).attr("name");

		$.ajaxSetup({
			async:false
		});
		$.get("./ajax-php/backgroundcontrol.php", {
				"user":username,
				"shutupDay":-1
			},
		  	function(info){
			  	// $(obj).find("#emailContent").attr("placeholder",info);
		  	}
		);
	};
	
	// if (window.confirm("你确定是要删除这篇评论吗？")) {
	// 	$.ajaxSetup({
	// 		async : false
	// 	});
	// 	$.get("./ajax-php/backgroundcontrol.php?deleteCommId="+id);
	// };
}
//删除评论
function deleteComm(obj) {
	var id=$(obj).val();
	if (window.confirm("你确定是要删除这篇评论吗？")) {
		$.ajaxSetup({
			async : false
		});
		$.get("./ajax-php/backgroundcontrol.php?deleteCommId="+id);
	};
}
//删除文章
function deleteArticle(obj) {
	var id=$(obj).val();
	if (window.confirm("你确定是要删除这篇文章吗？")) {
		$.ajaxSetup({
			async : false
		});
		$.get("./ajax-php/backgroundcontrol.php?deleteId="+id);
	};
}
//获取博客组（3个一组）数据
function fetchBlogs(page) {
	//设置首页、下一页、上一页、尾页光标
	if (page!=1) {
		$("#paging li").eq(0).css({'cursor': 'pointer'});
		$("#paging li").eq(1).css({'cursor': 'pointer'});
	}else{
		$("#paging li").eq(0).css({'cursor': 'auto'});
		$("#paging li").eq(1).css({'cursor': 'auto'});
	}
	if (page!=PAGE) {
		$("#paging li").eq(9).css({'cursor': 'pointer'});
		$("#paging li").eq(10).css({'cursor': 'pointer'});
	}else{
		$("#paging li").eq(9).css({'cursor': 'auto'});
		$("#paging li").eq(10).css({'cursor': 'auto'});
	}
	// 设置页码的隐藏和显示
	if((page-3)>=1){
		$("#paging li").eq(2).show();
	}else{
		$("#paging li").eq(2).hide();
	}
	if((page-2)>=1){
		$("#paging li").eq(3).show().text(page-2).css({'cursor': 'pointer'});
	}else{
		$("#paging li").eq(3).hide();
	}
	if((page-1)>=1){
		$("#paging li").eq(4).show().text(page-1).css({'cursor': 'pointer'});
	}else{
		$("#paging li").eq(4).hide();
	}

	$("#paging li").eq(5).text(page);

	if((page+1)<=PAGE){
		$("#paging li").eq(6).show().text(page+1).css({'cursor': 'pointer'});
	}else{
		$("#paging li").eq(6).hide();
	}
	if((page+2)<=PAGE){
		$("#paging li").eq(7).show().text(page+2).css({'cursor': 'pointer'});
	}else{
		$("#paging li").eq(7).hide();
	}
	if((page+3)<=PAGE){
		$("#paging li").eq(8).show();
	}else{
		$("#paging li").eq(8).hide();
	}
}
//获取评论管理组（3个一组）数据
function fetchComment(page) {
	//设置首页、下一页、上一页、尾页光标
	if (page!=1) {
		$("#receivedPaging li").eq(0).css({'cursor': 'pointer'});
		$("#receivedPaging li").eq(1).css({'cursor': 'pointer'});
	}else{
		$("#receivedPaging li").eq(0).css({'cursor': 'auto'});
		$("#receivedPaging li").eq(1).css({'cursor': 'auto'});
	}
	if (page!=commentPAGE) {
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

	if((page+1)<=commentPAGE){
		$("#receivedPaging li").eq(6).show().text(page+1).css({'cursor': 'pointer'});
	}else{
		$("#receivedPaging li").eq(6).hide();
	}
	if((page+2)<=commentPAGE){
		$("#receivedPaging li").eq(7).show().text(page+2).css({'cursor': 'pointer'});
	}else{
		$("#receivedPaging li").eq(7).hide();
	}
	if((page+3)<=commentPAGE){
		$("#receivedPaging li").eq(8).show();
	}else{
		$("#receivedPaging li").eq(8).hide();
	}
}

//获取用户管理组（3个一组）数据
function fetchUser(page) {
	//设置首页、下一页、上一页、尾页光标
	if (page!=1) {
		$("#sentPaging li").eq(0).css({'cursor': 'pointer'});
		$("#sentPaging li").eq(1).css({'cursor': 'pointer'});
	}else{
		$("#sentPaging li").eq(0).css({'cursor': 'auto'});
		$("#sentPaging li").eq(1).css({'cursor': 'auto'});
	}
	if (page!=userPAGE) {
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

	if((page+1)<=userPAGE){
		$("#sentPaging li").eq(6).show().text(page+1).css({'cursor': 'pointer'});
	}else{
		$("#sentPaging li").eq(6).hide();
	}
	if((page+2)<=userPAGE){
		$("#sentPaging li").eq(7).show().text(page+2).css({'cursor': 'pointer'});
	}else{
		$("#sentPaging li").eq(7).hide();
	}
	if((page+3)<=userPAGE){
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

fetchBlogs(1);
fetchComment(1);
fetchUser(1);

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
		$.get("./ajax-php/blog.html",{"user":user},function(data){
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
	$.get("./ajax-php/backgroundcontrol.php", {
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