<?php 
	if (isset($_GET["user"])) {
		$user=$_GET["user"];			//获取用户名
	}else{
		exit;
	}
	if (isset($_GET["searchReceivedEmail"])) {
		$searchReceivedEmail=$_GET["searchReceivedEmail"];			//获取搜索已收邮件关键字
	}else{
		$searchReceivedEmail="";
	}
	if (isset($_GET["searchSentEmail"])) {
		$searchSentEmail=$_GET["searchSentEmail"];			//获取搜索已发邮件关键字
	}else{
		$searchSentEmail="";
	}
	$db=mysql_connect("localhost","root","");
	if (!$db) {
		echo "数据库操作频繁，请稍后再试";
		exit;
	}
	mysql_query("set names utf8");
	mysql_select_db("bloginfosystem");
	$sql="select email from user where username='$user'";
	$result=mysql_query($sql);
	$email=mysql_fetch_array($result)[0];

//更新发送的邮件	
	if (isset($_GET["receiver"]) && isset($_GET["emailSubject"]) && isset($_GET["emailContent"])) {
		$receiver=$_GET["receiver"];
		$emailSubject=$_GET["emailSubject"];
		$emailContent=$_GET["emailContent"];
		unset($_GET["receiver"]);
		unset($_GET["emailSubject"]);
		unset($_GET["emailContent"]);

		$sql="insert into email (comefrom,cometo,content,topic) values ('$email','$receiver','$emailContent','$emailSubject');";
		$result=mysql_query($sql);
		if ($result) {
			echo "邮件发送成功！";
		} else {
			echo "邮件发送失败！";
		}
		exit;
	}

//显示已收到邮件总页数
	if (isset($_GET["receivedPAGE"])){
		$sql="select * from email where cometo='$email' and (content like '%$searchReceivedEmail%' or topic like '%$searchReceivedEmail%')";
		$result=mysql_query($sql);
		$PAGE=ceil(mysql_num_rows($result)/3);	//总的页码数
		echo $PAGE;
		exit;
	}
//显示已发送邮件总页数
	if (isset($_GET["sentPAGE"])){
		$sql="select * from email where comefrom='$email' and (content like '%$searchSentEmail%' or topic like '%$searchSentEmail%')";
		$result=mysql_query($sql);
		$PAGE=ceil(mysql_num_rows($result)/3);	//总的页码数
		echo $PAGE;
		exit;
	}

//显示每组(3个一组)已收邮件内容
	if (isset($_GET["receivedPage"])) {
		$receivedPage=$_GET["receivedPage"];			//点击的页码数
		
		$sqlArt="select * from email where cometo='$email' and (content like '%$searchReceivedEmail%' or topic like '%$searchReceivedEmail%') order by time desc limit ".(($receivedPage-1)*3).",3";
		// echo "$sqlArt";
		$result1=mysql_query($sqlArt);
		$str="";
		if (mysql_num_rows($result1)) {
			while ($article=mysql_fetch_array($result1)) {
				$str.=",{\"id\":\"".$article["id"]."\"";
				$str.=",\"time\":\"".$article["time"]."\"";
				$str.=",\"comefrom\":\"".$article["comefrom"]."\"";
				$str.=",\"content\":".json_encode($article["content"]);
	//显示或隐藏ReadMore
				if (strlen($article["content"])<=200) {
					$str.=",\"myHide\":\"true\"";
				} else {
					$str.=",\"myHide\":\"false\"";
				}
				$str.=",\"topic\":".json_encode($article["topic"])."}";
			}
		} 
		$str=substr($str, 1);
		$str="[".$str."]";
		echo $str;
		exit;
	}
//显示每组(3个一组)已发送邮件内容
	if (isset($_GET["sentPage"])) {
		$sentPage=$_GET["sentPage"];			//点击的页码数
		
		$sqlArt="select * from email where comefrom='$email' and (content like '%$searchSentEmail%' or topic like '%$searchSentEmail%') order by time desc limit ".(($sentPage-1)*3).",3";
		// echo "$sqlArt";
		$result1=mysql_query($sqlArt);
		$str="";
		if (mysql_num_rows($result1)) {
			while ($article=mysql_fetch_array($result1)) {
				$str.=",{\"id\":\"".$article["id"]."\"";
				$str.=",\"time\":\"".$article["time"]."\"";
				$str.=",\"cometo\":\"".$article["cometo"]."\"";
				$str.=",\"content\":".json_encode($article["content"]);
	//显示或隐藏ReadMore
				if (strlen($article["content"])<=200) {
					$str.=",\"myHide\":\"true\"";
				} else {
					$str.=",\"myHide\":\"false\"";
				}
				$str.=",\"topic\":".json_encode($article["topic"])."}";
			}
		} 
		$str=substr($str, 1);
		$str="[".$str."]";
		echo $str;
		exit;
	}
//查看未读Email的数量
	if (isset($_GET["user"])) {
		$user=$_GET["user"];
		$sql="select * from user where username='$user';";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);

		if ($row["shutup"]=='1') {														//看是否到期解除禁言
			date_default_timezone_set("Asia/Shanghai");
			if ($row["shutup_endtime"]<microtime("get_as_float")) {
				$sqlLiftedBan="update user set shutup='0' where username='$user';";
				mysql_query($sqlLiftedBan);
			}
		}
		
		$email=$row["email"];															//查看未读Email的数量
		$sql="select * from email where cometo='$email';";
		$result=mysql_query($sql);
		$notReadEmail=0;
		if ($result && mysql_num_rows($result)) {
			while ($row=mysql_fetch_array($result)) {
				if ($row["has_read"]=="0") {
					$notReadEmail++;
				}
			}
		}
		echo $notReadEmail;
	}
