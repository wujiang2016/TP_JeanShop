<?php 
	//链接数据库
	$db=mysql_connect("127.0.0.1","root","");
	if (!$db) {
		exit;
	}
	mysql_query("set names utf8");
	mysql_select_db("bloginfosystem");

//检测用户名
	if (isset($_GET["user"]) && isset($_GET["password"])) {
		$user=$_GET["user"];
		$password=md5($_GET["password"]);
		$sql="select * from user where username='$user' and password='$password'";
		// echo $sql;
		$result=mysql_query($sql);
		if (!($result && mysql_num_rows($result))){
			echo json_encode("用户名或密码错误！");
		}else{
			if ($user="admin") {
				$file=fopen("../log/log.txt", "a+");
				date_default_timezone_set("Asia/Shanghai");
				$str="\n管理员admin于".date("Y-m-d H:i:s")."登陆";
				fwrite($file, $str);
				fclose($file);
			}
		}
	}

 ?>