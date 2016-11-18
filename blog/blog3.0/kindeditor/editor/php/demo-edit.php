<?php
	$htmlData = '';
	if (!empty($_POST['content1'])) {
		if (get_magic_quotes_gpc()) {
			$htmlData = stripslashes($_POST['content1']);
		} else {
			$htmlData = $_POST['content1'];
		}
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>KindEditor PHP</title>
	<link rel="stylesheet" href="../themes/default/default.css" />
	<link rel="stylesheet" href="../plugins/code/prettify.css" />
	<script charset="utf-8" src="../kindeditor.js"></script>
	<script charset="utf-8" src="../lang/zh_CN.js"></script>
	<script charset="utf-8" src="../plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content1"]', {
				cssPath : '../plugins/code/prettify.css',
				uploadJson : '../php/upload_json.php',
				fileManagerJson : '../php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
</head>
<body>
	<!-- <?php echo $htmlData; ?> -->
	<button style="margin-left:230px;" onclick="javascript:location.href='../../../index.php'">返回首页</button>
	<button onclick="javascript:location.href='../../../blog.php'">返回博客</button>

	<?php 
		if (isset($_COOKIE["user"])) {
			$user=$_COOKIE["user"];
		}elseif (isset($_GET["user"])){
			$user=$_GET["user"];
		}else{
			header("location:../../../index.php");
			exit;
		}

		$db=mysql_connect("localhost","root","");
			if (!$db) {
				echo "数据库操作频繁，请稍后再试";
				exit;
			}
			mysql_query("set names utf8");
			mysql_select_db("bloginfosystem");
//更新博客			 
		if (isset($_POST["title"]) && isset($_POST["keyword"]) && isset($_POST["content1"])) {
			$title=$_POST["title"];
			$keyword=$_POST["keyword"];
			$publishcontent=$_POST["content1"];
			unset($_POST["title"]);
			unset($_POST["keyword"]);
			unset($_POST["content1"]);
			if (isset($_GET["id"])){
				$id=$_GET["id"];
			}else{
				header("location:../../../index.php");
				exit;
			}

			$sql="update articleinfo set header='$title',content='$publishcontent',keyword='$keyword' where id='$id';";
			$result=mysql_query($sql);
			if ($result) {
				echo "博客更新成功";
				
			} else {
				echo "博客更新失败";
			}
			unset($_GET["id"]);
		}
		
	?>


	<form style="width:800px;margin:50px auto 0;" name="example" method="post" action="">
		<label style="display:inline-block;width:80px;" for="title">标题：</label>
		<input style="width:500px;" type="text" name="title" id="title" value="" required><br>
		<label style="line-height:40px;display:inline-block;width:80px;" for="keyword">关键字：</label>
		<input style="width:500px;" type="text" name="keyword" id="keyword" value="" required><br>
		<label for="content1">内容：</label><br>
		<textarea name="content1" id="content1" style="width:700px;height:200px;visibility:hidden;"></textarea>
		<br />
		<input type="submit" name="button" value="更新博客" /> (提交快捷键: Ctrl + Enter)
	</form>
	<?php 
		// 从数据库载入数据		
		if (isset($_GET["id"])){
			$id=$_GET["id"];
					
			$sql="select * from articleinfo where id='$id';";
			$result=mysql_query($sql);
			if ($result) {
				if ($row=mysql_fetch_array($result)) {
					$title=json_encode($row["header"]);
					$keyword=json_encode($row["keyword"]);
					$content=json_encode($row["content"]);
					?>
					<script>
					var title=<?php echo $title; ?>;
					var keyword=<?php echo $keyword; ?>;
					var content=<?php echo $content; ?>;
					console.log(title);
					console.log(keyword);
					console.log(content);
					document.getElementById('title').value=title;
					document.getElementById('keyword').value=keyword;
					document.getElementById('content1').value=content;
					</script>
					<?php
				}
			}
			unset($_GET["id"]);
		}
	 ?>
</body>
</html>

