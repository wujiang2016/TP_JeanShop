<?php 
	//链接数据库
	$db=mysql_connect("127.0.0.1","root","");
	if (!$db) {
		exit;
	}
	mysql_query("set names utf8");
	mysql_select_db("bloginfosystem");

//检测用户名
	if (isset($_GET["user"])) {
		$user=$_GET["user"];
		$sql="select * from user where username='$user'";
		$result=mysql_query($sql);
		if ($result && mysql_num_rows($result)){
			echo json_encode("用户名已存在！");
		}
	}

//检测邮箱
	if (isset($_GET["emailBox"])) {
		$emailBox=$_GET["emailBox"];
		$sql="select * from user where email='$emailBox'";
		$result=mysql_query($sql);
		if ($result && mysql_num_rows($result)){
			echo json_encode("此邮箱已注册！");
		}
	}
 ?>