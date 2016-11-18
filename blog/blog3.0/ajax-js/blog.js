var app=angular.module("myApp",[]);
var currentPage=1;	//博客组当前页
var currentPageC=1;	//博客组当前页
var PAGE;			//博客总页数
var user=(getValueFromUrl("user")||getCookie("user"))?(getValueFromUrl("user")||getCookie("user")):"passenger";
var searchContent="";	//记录搜索关键字
$.ajax({
	type:"GET",
	async:false,
	url:"./ajax-php/blog.php?PAGE=1&user="+user,
	success:function(msg) {
		PAGE=msg;
	}
});
app.controller("myCtrl", function($scope,$http) {
	$http.get("./ajax-php/blog.php?user="+user+"&page=1").success(function(response) {
		$scope.blog=response;
	});
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

		$http.get("./ajax-php/blog.php?user="+user+"&page="+currentPageC).success(function(response) {
			$scope.blog=response;
		});
	}
	$scope.num=200;
	$scope.searchArticle=function(){
		searchContent=angular.element("#searchContent").val();
		$.ajax({
			type:"GET",
			async:false,
			url:"./ajax-php/blog.php?PAGE=1&user="+user+"&searchContent="+searchContent,
			success:function(msg) {
				PAGE=msg;
			}
		});
		fetchBlogs(1);
		$http.get("./ajax-php/blog.php?user="+user+"&searchContent="+searchContent+"&page=1").success(function(response) {
			$scope.blog=response;
		});
	}
	$scope.deleteArticle=function(){
		$.ajax({
			type:"GET",
			async:false,
			url:"./ajax-php/blog.php?PAGE=1&user="+user+"&searchContent="+searchContent,
			success:function(msg) {
				PAGE=msg;
			}
		});
		if (currentPageC>PAGE) {
			currentPageC=PAGE;
		};
		fetchBlogs(currentPageC);
		$http.get("./ajax-php/blog.php?user="+user+"&searchContent="+searchContent+"&page="+currentPageC).success(function(response) {
			$scope.blog=response;
		});
	}
});

//删除文章
function deleteArticle(obj) {
	var id=$(obj).val();
	if (window.confirm("你确定是要删除这篇文章吗？")) {
		$.ajaxSetup({
			async : false
		});
		$.get("./ajax-php/blog.php?deleteId="+id);
	};
}

//添加文章
function addArticle() {
	var flag="";
	if (user=="passenger") {
		window.location.href="index.html";
		return;
	};
	$.ajaxSetup({
		async : false
	});
	$.get("./ajax-php/blog.php", {
			"author":user
		},
	  	function(info){
		  	if (info=="抱歉，你已被禁言，无法发表文章！") {
		  		alert(info);
		  		flag="1";
				return;
		  	};
	  	}
	);
	if (flag=="1") {
		return;
	};
	if (getCookie("user")) {
		window.location.href="kindeditor/editor/php/demo.php";
	}else{
		window.location.href="kindeditor/editor/php/demo.php?user="+user;
	}
}

//获取博客组（5个一组）数据
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