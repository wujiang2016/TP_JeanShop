<?php 
	$insertComm=false;	//判断插入评论是否成功
	$db=mysql_connect("localhost","root","");
	if (!$db) {
		echo "数据库操作频繁，请稍后再试";
		exit;
	}
	mysql_query("set names utf8");
	mysql_select_db("bloginfosystem");
	if (isset($_GET["id"])) {
		$id=$_GET["id"];			//文章ID
	}
//显示博客页码总数
	if (isset($_GET["PAGE"])){
		$sql="select * from comment where father_id=$id  and father_keyword=1";
		$result=mysql_query($sql);
		$PAGE=ceil(mysql_num_rows($result)/5);	//总的页码数
		echo $PAGE;
		exit;
	}
//删除博客
	if (isset($_GET["deleteId"])){
		$id=$_GET["deleteId"];
		$sql="delete from comment where id='$id'";
		$result=mysql_query($sql);
		exit;
	}
//插入评论
	if (isset($_GET["insertComm"])) {
		// $author="passenger";
		// $content="22";
		// $father_id="8";
		// $father_keyword="0";
		$author=$_GET['author'];
		if ($author!="passenger") {
			$sqlShut="select shutup from user where username = '$author';";//看是否被禁言
			$resultShut=mysql_query($sqlShut);
			$row=mysql_fetch_array($resultShut);
			if ($row["shutup"]) {
				echo "抱歉，你已被禁言，无法发表文章！";
				exit;
			}
		}

		$content=$_GET['content'];
		$father_id=$_GET['father_id'];
		$father_keyword=$_GET['father_keyword'];
		if ($content!="") {
			$sqlAddComm="insert into comment (author,content,father_id,father_keyword) values ('$author','$content','$father_id','$father_keyword');";
			$resultInsert=mysql_query($sqlAddComm);
			if ($resultInsert) {
				$insertComm=true;
			}
		}
		// mysql_close($db);
		exit;
	}
//显示博客的评论
	if (isset($_GET["pageComm"]) || $insertComm){
		$pageComm=$_GET["pageComm"];
		$sqlArtComm="select * from comment where father_id=$id  and father_keyword=1 order by time desc limit ".(($pageComm-1)*5).",5";
		$resultComm=mysql_query($sqlArtComm);//一级评论
		
		$str="";
		if ($resultComm && mysql_num_rows($resultComm)) {
			while ($artComm=mysql_fetch_array($resultComm)) {
				$str.=",{\"id\":\"".$artComm["id"]."\"";
				$time=substr($artComm["time"],0,19);
				$str.=",\"time\":\"".$time."\"";
				$str.=",\"author\":\"".$artComm["author"]."\"";
	//查评论的评论数量，一级评论的评论数量
				$commSql="select * from comment where father_id=".$artComm["id"]." and father_keyword='0' order by time desc";
				$resultCommComm=mysql_query($commSql);
				if ($resultCommComm && mysql_num_rows($resultCommComm)) {
					$resultCommNo=mysql_num_rows($resultCommComm);
					$str.=",\"commComm\":[";									//输出评论的评论
					while ($commComm=mysql_fetch_array($resultCommComm)) {
						$str.="{\"author\":\"".$commComm["author"]."\"";
						$str.=",\"id\":".json_encode($commComm["id"]);
						$str.=",\"content\":".json_encode($commComm["content"]);
						$time=substr($commComm["time"],0,19);
						$str.=",\"time\":\"".$time."\"},";
					}
					$str=substr($str,0,strlen($str)-1);
					$str.="]";
				} else {
					$resultCommNo=0;
					$str.=",\"commComm\":[]";
				}
				$str.=",\"commNo\":\"".$resultCommNo."\"";
				$str.=",\"content\":".json_encode($artComm["content"])."}";
			}
		} 
		$str=substr($str, 1);
		$str="[".$str."]";
		echo $str;
		exit;
	}

//显示单个博客内容
	if (isset($_GET["id"])) {
		$id=$_GET["id"];
		
		$sqlArt="select * from articleinfo where id = '$id'";
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
				$str.=",\"keyword\":".json_encode($article["keyword"])."}";

			}
		} 
		$str=substr($str, 1);
		$str="[".$str."]";
		echo $str;
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
