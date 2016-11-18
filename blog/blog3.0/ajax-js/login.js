
$(document).ready(function(){
	$(":text").first().focus();

// 用户名验证
	var regUser=/^[\w\u4e00-\u9fa5]{1,30}$/;
	$("#user").keyup(function(){
		if ($(this).val()=="") {
			if ($(this).next().text()!="请输入用户名。") {
				$(this).next().text("请输入用户名。");
			};
		} else{
			if (!regUser.test($(this).val())) {
				if ($(this).next().text()!="请输入正确格式的用户名。") {
					$(this).next().text("请输入正确格式的用户名。");
				};
			}else{
				$(this).next().text("");
			}
		};
	});

//密码验证
	$("#password").blur(function() {
		if ($(this).val()=="") {
			if ($(this).next().text()!="请输入密码。") {
				$(this).next().text("请输入密码。");
			};
		} else{
			$(this).next().text("");
		}
	});
});


//表单验证函数
	function loginCheck(){
		var len=$('span').length;
		for (var i = 0; i < len; i++) {
			if ($('span').eq(i).text()!="") {
				return false;
			};
		};

//ajax验证
		var xmlHttp;
		var flag;
		if (window.XMLHttpRequest) {
			xmlHttp=new XMLHttpRequest();
		} else{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		};

		xmlHttp.onreadystatechange=function() {
			if (xmlHttp.readyState==4 && xmlHttp.status==200) {
					// console.log(JSON.parse(xmlHttp.responseText));
				if (xmlHttp.responseText) {
					console.log(xmlHttp.responseText);
					$("p").first().text(JSON.parse(xmlHttp.responseText));
					flag=false;
				}else{
					if ($("#user").next().text()!="") {
						$("#user").next().text("");
					};
					flag=true;
				}
				console.log(flag);
			};
		}
		var username=$("#user").val();
		var password=$("#password").val();
		xmlHttp.open("GET","./ajax-php/login.php?user="+username+"&password="+password,false);
		// console.log("./ajax-php/login.php?user="+username+"&password="+password);
		// $(this).delay(3000);
		xmlHttp.send(null);
		if (flag) {
			setCookie("user",username);
			if (getCookie("user")) {
				$("#login").attr("action","index.html");
			} else{
				$("#login").attr("action","index.html?user="+username);
			};
			return true;
		} else{
			return false;
		};

		// return false;
	}

//设置cookie
	function setCookie(cname,cvalue,exhours=1){
		var d = new Date();
		d.setTime(d.getTime() + exhours*60*60*1000);
		var expires="expires="+d.toGMTString()+";path=/";
		document.cookie = cname + "="+ cvalue + ";" +expires;
	}

//获取cookie
	function getCookie(cname){
		var name=cname+"=";
		var ca=document.cookie.split(";");
		for (var i = 0; i < ca.length; i++) {
			var c=ca[i].trim();
			if (c.indexOf(name)==0) {
				return c.slice(name.length);
			};
		};
		return "";
	}	

/*
//调用ajax
addEvent(document, 'click', function () { //IE6 需要重写addEvent
	ajax({
		method : 'get',
		url : 'demo.php',
		data : {
			'name' : 'Lee',
			'age' : 100
		},
		success : function (text) {
			alert(text);
		},
		async : true
	});
});

// 封装ajax
function ajax(obj) {
	var xhr = new createXHR();
	obj.url = obj.url + '?rand=' + Math.random();
	obj.data = params(obj.data);
	if (obj.method === 'get') obj.url = (obj.url.indexOf('?') == -1) ? (obj.url + '?' + obj.data) : (obj.url + '&' + obj.data);
	if (obj.async === true) {
		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4) callback();
		};
	}
	xhr.open(obj.method, obj.url, obj.async);
	if (obj.method === 'post') {
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xhr.send(obj.data);
	} else {
		xhr.send(null);
	}
	if (obj.async === false) {
		callback();
	}

	function callback () {
		if (xhr.status == 200) {
			obj.success(xhr.responseText); //回调
		} else {
			alert('数据返回失败！状态代码：' + xhr.status + '，状态信息：' + xhr.statusText);
		}
	}
}

//创建XHR对象
function createXHR() {
	if (typeof XMLHttpRequest != 'undefined') {
		return new XMLHttpRequest();
	} else if (typeof ActiveXObject != 'undefined') {
		var versions = [
			'MSXML2.XMLHttp.6.0',
			'MSXML2.XMLHttp.3.0',
			'MSXML2.XMLHttp'
		];
		for (var i = 0; i < versions.length; i ++) {
			try {
				return new ActiveXObject(version[i]);
			} catch (e) {
				//跳过
			}
		}
	} else {
		throw new Error('您的浏览器不支持XHR 对象！');
	}
}
*/