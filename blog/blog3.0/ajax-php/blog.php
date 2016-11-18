<?php 
	if (isset($_GET["user"])) {
		$user=$_GET["user"];			//获取用户名
	}
	if (isset($_GET["searchContent"])) {
		$searchContent=$_GET["searchContent"];			//获取搜索关键字
	}else{
		$searchContent="";
	}
	$db=mysql_connect("localhost","root","");
	if (!$db) {
		echo "数据库操作频繁，请稍后再试";
		exit;
	}
	mysql_query("set names utf8");
	mysql_select_db("bloginfosystem");
//显示博客页码总数
	if (isset($_GET["PAGE"])){
		$sql="select * from articleinfo where author='$user' and (content like '%$searchContent%' or header like '%$searchContent%' or keyword like '%$searchContent%')";
		$result=mysql_query($sql);
		$PAGE=ceil(mysql_num_rows($result)/5);	//总的页码数
		echo $PAGE;
		exit;
	}
//删除博客
	if (isset($_GET["deleteId"])){
		$id=$_GET["deleteId"];
		$sql="delete from articleinfo where id='$id'";
		$result=mysql_query($sql);
		exit;
	}
//显示每组(5个一组)博客内容
	if (isset($_GET["page"])) {
		$page=$_GET["page"];			//点击的页码数
		
		
		$sqlArt="select * from articleinfo where author='$user' and (content like '%$searchContent%' or header like '%$searchContent%' or keyword like '%$searchContent%') order by time desc limit ".(($page-1)*5).",5";
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
//看是否被禁言
if (isset($_GET["author"])) {
	$author=$_GET['author'];
	$sqlShut="select shutup from user where username = '$author';";//看是否被禁言
	$resultShut=mysql_query($sqlShut);
	$row=mysql_fetch_array($resultShut);
	if ($row["shutup"]) {
		echo "抱歉，你已被禁言，无法发表文章！";
		exit;
	}
	setcookie("user","$author",time()+3600);
}