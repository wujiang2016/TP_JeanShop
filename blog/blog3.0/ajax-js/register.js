
$(document).ready(function(){
	// console.log("11111");
	$(":text").first().focus();

// 用户名验证
	var regUser=/^[\w\u4e00-\u9fa5]{1,30}$/;
	$("#user1").keyup(function(){
		if ($(this).val()=="") {
			if ($(this).next().text()=="您输入的用户名不符合规范。") {
				$(this).next().text("");
			};
			if ($(this).next().text()!="请输入用户名。") {
				$(this).next().text("请输入用户名。");
			};
		} else{
			if ($(this).next().text()=="请输入用户名。") {
				$(this).next().text("");
			};
			if (!regUser.test($(this).val())) {
				if ($(this).next().text()!="您输入的用户名不符合规范。") {
					$(this).next().text("您输入的用户名不符合规范。");
				};
			}else{
				if ($(this).next().text()=="您输入的用户名不符合规范。") {
					$(this).next().text("");
				};

//ajax验证
				var xmlHttp;
				if (window.XMLHttpRequest) {
					xmlHttp=new XMLHttpRequest();
				} else{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				};

				xmlHttp.onreadystatechange=function() {
					if (xmlHttp.readyState==4 && xmlHttp.status==200) {
						if (xmlHttp.responseText) {
							$("#user1").next().text(JSON.parse(xmlHttp.responseText));
						}else{
							if ($("#user1").next().text()=="用户名已存在！") {
								$("#user1").next().text("");
							};
						}
					};
				}
				username=$(this).val();
				xmlHttp.open("GET","./ajax-php/register.php?user="+username,true);
				xmlHttp.send(null);
			}
		};
	});

//密码验证
	$("#password0").keyup(function() {
		if ($(this).val()=="") {
			if ($(this).next().text()!="请输入密码。") {
				$(this).next().text("请输入密码。");
			};
		} else{
			$(this).next().text("");
		}
	});

//确认密码验证
	$("#password1").blur(function() {
		if ($(this).val()!=$("#password0").val()) {
			if ($(this).next().text()!="两次输入的密码不一致。") {
				$(this).next().text("两次输入的密码不一致。");
			};
		}else{
			$(this).next().text("");
		}
	});

//邮箱验证
	var regEmail=/^[\w\.-]+@[\w]+(\.[\w]+)+$/;
	$("#email").blur(function() {
		if (!regEmail.test($(this).val())) {
			if ($(this).next().text()!="您输入的邮箱格式不正确。") {
				$(this).next().text("您输入的邮箱格式不正确。");
			};
		}else{
			if ($(this).next().text()=="您输入的邮箱格式不正确。") {
				$(this).next().text("");
			};

//ajax验证邮箱是否已注册
			var xmlHttp;
			if (window.XMLHttpRequest) {
				xmlHttp=new XMLHttpRequest();
			} else{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			};

			xmlHttp.onreadystatechange=function() {
				if (xmlHttp.readyState==4 && xmlHttp.status==200) {
					if (xmlHttp.responseText) {
						$("#email").next().text(JSON.parse(xmlHttp.responseText));
					}else{
						if ($("#email").next().text()=="此邮箱已注册！") {
							$("#email").next().text("");
						};
					}
					
				};
			}
			emailBox=$(this).val();
			xmlHttp.open("GET","ajax-php/register.php?emailBox="+emailBox,true);
			xmlHttp.send(null);
		}
	});

//头像图片验证
	// var regEmail=/^[\w\.-]+@[\w]+(\.[\w]+)+$/;
	var arrPic=["jpg","jpeg","png","gif","bmp"];
	$("#file").change(function() {
		var str=$(this).val();
		var sliceStart=str.lastIndexOf(".")+1;
		str=str.slice(sliceStart);
		console.log(str);
		if ($.inArray(str,arrPic)==-1) {
			if ($(this).next().text()!="请选择正确的图片文件。") {
				$(this).next().text("请选择正确的图片文件。");
			};
		}else{
			if ($(this).next().text()=="请选择正确的图片文件。") {
				$(this).next().text("");
			};
		}
	});


	// console.log($('span').length);
	

});

//表单验证函数
	function formCheck(){
		var len=$('span').length;
		console.log(len);
		for (var i = 0; i < len; i++) {
			console.log($('span').eq(i).text());
			if ($('span').eq(i).text()!="") {
				return false;
			};
		};
		return true;
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