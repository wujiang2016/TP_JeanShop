var app=angular.module("myApp",[]);
var currentPage=1;	//博客组当前页
var currentPageC=1;	//博客组当前页
var PAGE;			//博客总页数
var pageComm=1;		//博客评论的当前页，初始为1
var id=getValueFromUrl("id"); //获得文章的编号
var flag=0;		//查看是否被禁言
//记录用户信息
var user=(getValueFromUrl("user")||getCookie("user"))?(getValueFromUrl("user")||getCookie("user")):"passenger";

$.ajax({
	type:"GET",
	async:false,
	url:"./ajax-php/article.php?PAGE=1&id="+id,
	success:function(msg) {
		PAGE=msg;
	}
});
app.controller("myCtrl", function($scope,$http) {
	$http.get("./ajax-php/article.php?id="+id).success(function(response) {
		$scope.article=response;
	});
	$http.get("./ajax-php/article.php?id="+id+"&pageComm="+pageComm).success(function(response) {
		$scope.comms=response;
	});
	$scope.isShow=false;
	$scope.isHide=true;
	$scope.addComm=function() {										// 添加文章评论
		$http.get("./ajax-php/article.php?id="+id+"&pageComm="+pageComm).success(function(response) {
			$scope.comms=response;
    	});
	};
	$scope.changePage=function(x){									//切换评论页码
		// alert(x);
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
		$http.get("./ajax-php/article.php?id="+id+"&pageComm="+currentPageC).success(function(response) {
			$scope.comms=response;
		});
	}
	$scope.deleteArticle=function(){
		$.ajax({
			type:"GET",
			async:false,
			url:"./ajax-php/article.php?PAGE=1&id="+id,
			success:function(msg) {
				PAGE=msg;
			}
		});
		if (currentPageC>PAGE) {
			currentPageC=PAGE;
		};
		fetchBlogs(currentPageC);
		$http.get("./ajax-php/article.php?id="+id+"&pageComm="+currentPageC).success(function(response) {
			$scope.comms=response;
		});
	}
});
//删除文章
function deleteArticle(obj) {
	var id=$(obj).val();
	if (window.confirm("你确定是要删除这篇评论吗？")) {
		$.ajaxSetup({
			async : false
		});
		$.get("./ajax-php/article.php?deleteId="+id);
	};
}
// 添加文章评论
function addComm (obj) {
	var father_id=$(obj).find("[name='fatherId']").val();
	var father_keyword=$(obj).find("[name='fatherKeyword']").val();
	var content=$(obj).find("[name='postComm']").val();
	$(obj).find("[name='postComm']").val("");
	var author=(getValueFromUrl("user")||getCookie("user"))?(getValueFromUrl("user")||getCookie("user")):"passenger";
	var commAuthor=$(obj).find("[name='commAuthor']").val();
	if ($(obj).find("p").html()==undefined) {
		if (commAuthor!=undefined) {
			content=author+" 回复 "+commAuthor+":"+content;
		};
	}else{
		father_id=getValueFromUrl('id');
	}
	$.ajaxSetup({
		async : false
	});
	$.get("./ajax-php/article.php", {
			"pageComm":pageComm,
			"insertComm":"true",
			"author":author,
			"content":content,
			"father_id":father_id,
			"father_keyword":father_keyword
		},
	  	function(info){
		  	if (info=="抱歉，你已被禁言，无法发表文章！") {
		  		alert(info);
		  		// console.log(info);
		  	};
	  	}
	);
	return false;
}

//查看是否被禁言
function checkShutUp () {
	
	console.log(flag);
	if (flag) {
		alert("你已被禁言，无法发表评论。申诉请联系管理员：admin@blog.com。");
		return false;
	} else{
		return true;
	};
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

//对"回复"和"取消回复"两个词进行切换
function changeWord(obj){
	if ($(obj).text().slice(0,2)=="回复") {
		var str="取消"+$(obj).text();
		$(obj).text(str);

		//设置光标在行首
		$(obj).next().find("textarea").css('background','#CCF').focus();
		obj=$(obj).next().find("textarea");
		obj=obj[0];
		$(obj).focus();
		$(obj).focus(function(){
			$(this).css('background','white');
			setCaretPosition(obj,0);
		});
		$(obj).blur(function(){
			$(this).css('background','#CCF');
		});
	} else{
		$(obj).text($(obj).text().slice(2));
	};
}
//设置光标位置
function setCaretPosition(ctrl,pos){
    if(ctrl.setSelectionRange)
    {
        ctrl.focus();
        ctrl.setSelectionRange(pos,pos);
    }
    else if (ctrl.createTextRange) {
        var range = ctrl.createTextRange();
        range.collapse(true);
        range.moveEnd('character', pos);
        range.moveStart('character', pos);
        range.select();
    }
}

// 回复评论的评论
function replyCommComm(obj) {							//展开评论
	var str=$(obj).prevAll("p").slice(0,1).html();
	str="//"+str;
	console.log(str);
	if (obj.innerHTML.slice(0,2)=="回复") {
		obj.innerHTML="取消"+obj.innerHTML;
		// console.log(obj.innerHTML);

		while(1){
			obj=obj.nextSibling;

			if (obj.style && (obj.style.display=="none")) {
				obj.style.display="block";
				$(obj).find("textarea").text(str).focus();
				obj=$(obj).find("textarea");
				obj=obj[0];
				setCaretPosition(obj,0);

				break;
			};
		}
	} else{
		obj.innerHTML=obj.innerHTML.slice(2);
		while(1){
			obj=obj.nextSibling;

			if (obj.style && (obj.style.display=="block")) {
				obj.style.display="none";
				break;
			};
		}
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
		$.get("./ajax-php/index.php",{"user":user},function(data){
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
function showDelBtn(obj){
	if (user=="passenger") {
		return;
	};
	var articleAuthor=$("#articleAuthor").text().slice(3);
	if (articleAuthor==user) {
		$(obj).find("span").slice(1,2).show();
	}else{
		var commAuthor=$(obj).find("h6 a").slice(0,1).text();
		if (commAuthor==user) {
			$(obj).find("span").slice(1,2).show();
		}
	}
	
}
function hideDelBtn(obj){
	$(obj).find("span").slice(1,2).hide();
}