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

//获取URL中传递的值
	function getValueFromUrl(name) {
		var ca=window.location.search.slice(1).split("&");
		var markKey=name+"=";
		for (var i = 0; i < ca.length; i++) {
			var c=ca[i].trim();
			if (c.indexOf(markKey)==0) {
				return c.slice(markKey.length);
			};
		};
		return "";
	}