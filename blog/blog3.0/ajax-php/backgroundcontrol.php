<?php 
	
	if (isset($_GET["logoff"])) {
		$file=fopen("../log/log.txt", "a+");			//获取搜索文章关键字
		date_default_timezone_set("Asia/Shanghai");
		$str="\n管理员admin于".date("Y-m-d H:i:s")."注销了登陆。";
		fwrite($file, $str);
		fclose($file);
	}
	if (isset($_GET["searchContent"])) {
		$searchContent=$_GET["searchContent"];			//获取搜索文章关键字
	}else{
		$searchContent="";
	}
	if (isset($_GET["searchComment"])) {
		$searchComment=$_GET["searchComment"];			//获取搜索评论关键字
	}else{
		$searchComment="";
	}
	if (isset($_GET["searchUser"])) {
		$searchUser=$_GET["searchUser"];			//获取搜索用户关键字
	}else{
		$searchUser="";
	}
	$db=mysql_connect("localhost","root","");
	if (!$db) {
		echo "数据库操作频繁，请稍后再试";
		exit;
	}
	mysql_query("set names utf8");
	mysql_select_db("bloginfosystem");
	if (isset($_GET["user"])) {
		$user=$_GET["user"];			//获取用户名用于禁言和解禁
		$sql="select email from user where username='$user'";
		$result=mysql_query($sql);
		$email=mysql_fetch_array($result)[0];
	}

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

//显示文章总页数
	if (isset($_GET["PAGE"])){
		$sql="select * from articleinfo where content like '%$searchContent%' or header like '%$searchContent%' or keyword like '%$searchContent%'";
		$result=mysql_query($sql);
		$PAGE=ceil(mysql_num_rows($result)/3);	//总的页码数
		echo $PAGE;
		exit;
	}
//显示评论总页数
	if (isset($_GET["commentPAGE"])){
		$sql="select * from comment where content like '%$searchComment%'";
		$result=mysql_query($sql);
		$PAGE=ceil(mysql_num_rows($result)/3);	//总的页码数
		echo $PAGE;
		exit;
	}
//显示用户总页数
	if (isset($_GET["userPAGE"])){
		$sql="select * from user where username like '%$searchUser%' or email like '%$searchUser%'";
		$result=mysql_query($sql);
		$PAGE=ceil(mysql_num_rows($result)/3);	//总的页码数
		echo $PAGE;
		exit;
	}
//显示游客评论数
	if (isset($_GET["passengerCommNo"])){
		date_default_timezone_set("Asia/Shanghai");
		$sql="select * from comment where author='passenger' and to_days(now())-to_days(time)<1;";
		$result=mysql_query($sql);
		echo mysql_num_rows($result);
		exit;
	}
//显示每组(3个一组)博客内容
	if (isset($_GET["page"])) {
		$page=$_GET["page"];			//点击的页码数
		
		
		$sqlArt="select * from articleinfo where content like '%$searchContent%' or header like '%$searchContent%' or keyword like '%$searchContent%' order by time desc limit ".(($page-1)*3).",3";
		// echo "$sqlArt";
		$result1=mysql_query($sqlArt);
		$str="";
		if (mysql_num_rows($result1)) {
			while ($article=mysql_fetch_array($result1)) {
				$str.=",{\"id\":\"".$article["id"]."\"";
				$str.=",\"time\":\"".$article["time"]."\"";
				$str.=",\"author\":\"".$article["author"]."\"";
	//查评论数量
				$commSql="select * from comment where father_id=".$article["id"]." and father_keyword='1' order by time";
				$resultComm=mysql_query($commSql);
				if ($resultComm) {
					$resultComm=mysql_num_rows($resultComm);
				} else {
					$resultComm=0;
				}
				$str.=",\"commNo\":\"".$resultComm."\"";
				$str.=",\"header\":".json_encode($article["header"]);
				$str.=",\"content\":".json_encode($article["content"]);
	//显示或隐藏ReadMore
				if (strlen($article["content"])<=200) {
					$str.=",\"myHide\":\"true\"";
				} else {
					$str.=",\"myHide\":\"false\"";
				}
				
				$str.=",\"keyword\":".json_encode($article["keyword"])."}";

			}
		} 
		$str=substr($str, 1);
		$str="[".$str."]";
		echo $str;
		exit;
	}
//显示每组(3个一组)评论内容
	if (isset($_GET["commentPage"])) {
		$commentPage=$_GET["commentPage"];			//点击的页码数
		
		$sqlArt="select * from comment where content like '%$searchComment%' order by time desc limit ".(($commentPage-1)*3).",3";
		// echo "$sqlArt";
		$result1=mysql_query($sqlArt);
		$str="";
		if (mysql_num_rows($result1)) {
			while ($article=mysql_fetch_array($result1)) {
				$str.=",{\"id\":\"".$article["id"]."\"";
				$article["time"]=substr($article["time"], 0,19);
				$str.=",\"time\":\"".$article["time"]."\"";
				$str.=",\"author\":\"".$article["author"]."\"";
				$str.=",\"content\":".json_encode($article["content"]);
	//显示或隐藏ReadMore
				if (strlen($article["content"])<=200) {
					$str.=",\"myHide\":\"true\"";
				} else {
					$str.=",\"myHide\":\"false\"";
				}
	//查评论的评论数量
				$commSql="select * from comment where father_id=".$article["id"]." and father_keyword='0' order by time";
				$resultComm=mysql_query($commSql);
				if ($resultComm) {
					$resultComm=mysql_num_rows($resultComm);
				} else {
					$resultComm=0;
				}
				$str.=",\"commNo\":".$resultComm."}";
			}
		} 
		$str=substr($str, 1);
		$str="[".$str."]";
		echo $str;
		exit;
	}
//显示每组(3个一组)用户信息
	if (isset($_GET["userPage"])) {
		$userPage=$_GET["userPage"];			//点击的页码数
		
		$sqlArt="select * from user where username like '%$searchUser%' or email like '%$searchUser%' limit ".(($userPage-1)*3).",3";
		// echo "$sqlArt";
		$result1=mysql_query($sqlArt);
		$str="";
		if (mysql_num_rows($result1)) {
			while ($article=mysql_fetch_array($result1)) {
				$str.=",{\"username\":\"".$article["username"]."\"";
				$str.=",\"email\":\"".$article["email"]."\"";
	// 			$str.=",\"shutup\":\"".$article["shutup"]."\"";
	// 			$str.=",\"content\":".json_encode($article["content"]);
	// //显示或隐藏ReadMore
	// 			if (strlen($article["content"])<=200) {
	// 				$str.=",\"myHide\":\"true\"";
	// 			} else {
	// 				$str.=",\"myHide\":\"false\"";
	// 			}
				$str.=",\"shutup\":".json_encode($article["shutup"])."}";
			}
		} 
		$str=substr($str, 1);
		$str="[".$str."]";
		echo $str;
		exit;
	}
//删除博客
	if (isset($_GET["deleteId"])){
		$id=$_GET["deleteId"];
		$sql="select * from articleinfo where id='$id'";
		$result=mysql_query($sql);
		$artInfo=mysql_fetch_array($result);

		$sql="delete from articleinfo where id='$id'";
		$result=mysql_query($sql);
		if ($result) {
			$file=fopen("../log/log.txt", "a+");
			date_default_timezone_set("Asia/Shanghai");
			$str="\n管理员admin于".date("Y-m-d H:i:s")."删除了文章,作者是：".$artInfo["author"]."；标题是：".$artInfo["header"];
			fwrite($file, $str);
			fclose($file);
		}
		exit;
	}
//删除评论
	if (isset($_GET["deleteCommId"])){
		$id=$_GET["deleteCommId"];
		$sql="select * from comment where id='$id'";
		$result=mysql_query($sql);
		$commInfo=mysql_fetch_array($result);

		$sql="delete from comment where id='$id'";
		$result=mysql_query($sql);
		if ($result) {
			$file=fopen("../log/log.txt", "a+");
			date_default_timezone_set("Asia/Shanghai");
			$str="\n管理员admin于".date("Y-m-d H:i:s")."删除了评论,作者是：".$commInfo["author"]."；内容是：".$commInfo["content"];
			fwrite($file, $str);
			fclose($file);
		}
		exit;
	}
// 禁言和解禁
if (isset($_GET["shutupDay"])) {
	$shutupDay=$_GET["shutupDay"];
	if ($shutupDay<0) {
		$sql="update user set shutup=0 where username = '$user'";//解禁并发邮件
		$result=mysql_query($sql);
		if ($result) {
			$file=fopen("../log/log.txt", "a+");
			date_default_timezone_set("Asia/Shanghai");
			$str="\n管理员admin于".date("Y-m-d H:i:s")."对用户".$user."作了解禁处理。";
			fwrite($file, $str);
			fclose($file);
		}
		$sqlSendEmail="insert into email (comefrom,cometo,topic,content) values ('admin@blog.com','$email','解禁发言','你好，根据论坛相关规定，你已过禁言期，已被解禁现在可以发言了！')";
		mysql_query($sqlSendEmail);
	} else {													//禁言并发邮件
		date_default_timezone_set("Asia/Shanghai");
		$str='禁言'.$shutupDay.'天';
		$sqlSendEmail="insert into email (comefrom,cometo,topic,content) values ('admin@blog.com','$email','$str','你好，你发表的文章已严重违反论坛相关规定，已被管理员依规作禁言处理！')";
		mysql_query($sqlSendEmail);
		$day=$shutupDay;
		$shutupDay=microtime("get_as_float")+$shutupDay*24*3600;
		$sql="update user set shutup=1, shutup_endtime='$shutupDay' where username = '$user';";//禁言
		$result=mysql_query($sql);
		if ($result) {
			$file=fopen("../log/log.txt", "a+");
			date_default_timezone_set("Asia/Shanghai");
			$str="\n管理员admin于".date("Y-m-d H:i:s")."对用户".$user."作了禁言".$day."天处理。";
			fwrite($file, $str);
			fclose($file);
		}
	}
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
