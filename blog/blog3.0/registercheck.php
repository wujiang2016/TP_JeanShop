<?php 
	$user=$_POST["user"];
	$password=$_POST["password"];
	$password=md5($password);
	$email=$_POST["email"];

	if ($_FILES["file"]["error"]==0) {
		if (move_uploaded_file($_FILES["file"]["tmp_name"],"./headimg/".$user.".jpg")) {
			echo "文件上传成功。";
		} else {
			header("location:register.html?error=9");//图片上传出错返回出错值
			exit;
		}
	}else{
		header("location:register.html?error=9");//图片上传出错返回出错值
		exit;
	}

	//链接数据库
	$db=mysql_connect("127.0.0.1","root","");
	if (!$db) {
		echo "操作频繁，请稍后再试。";
	}
	mysql_query("set names utf8");
	mysql_select_db("bloginfosystem");

	$sql="insert into user (username,password,email) values ('$user','$password','$email')";
	$result=mysql_query($sql);
	if ($result) {
		echo "<script language='JavaScript'>alert('注册成功！返回主页。');window.location.href='index.html';</script>";
		// header("location:index.php");
	}

	mysql_close($db);
 ?>