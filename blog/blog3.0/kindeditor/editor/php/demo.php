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
	<script charset="utf-8" src="../../../ajax-js/common.js"></script>			<!-- //自己的js -->
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
	<button style="margin-left:230px;" onclick="javascript:location.href='../../../index.html'">返回首页</button>
	<button onclick="javascript:location.href='../../../blog.html'">返回博客</button>

	<?php 
		if (isset($_COOKIE["user"])) {
			$user=$_COOKIE["user"];
		}elseif (isset($_GET["user"])){
			$user=$_GET["user"];
		}else{
			echo "alert('111')";
			// header("location:../../../index.html");
			exit;
		}

		if (isset($_POST["title"]) && isset($_POST["keyword"]) && isset($htmlData)) {
			$title=$_POST["title"];
			$keyword=$_POST["keyword"];
			$publishcontent=$htmlData;
			unset($_POST["title"]);
			unset($_POST["keyword"]);
			unset($htmlData);

			$db=mysql_connect("localhost","root","");
			if (!$db) {
				echo "数据库操作频繁，请稍后再试";
				exit;
			}
			mysql_query("set names utf8");
			mysql_select_db("bloginfosystem");

			$sql="insert into articleinfo (author,header,content,keyword) values ('$user','$title','$publishcontent','$keyword');";
			$result=mysql_query($sql);
			if ($result) {
				echo "<p style=\"width:800px;margin:10px auto 0;\">文章发表成功！</p>";
			} else {
				echo "<p style=\"width:800px;margin:10px auto 0;\">文章发表失败！</p>";
			}
			mysql_close($db);
		}
		$url='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
	?>


	<form style="width:800px;margin:50px auto 0;" name="example" method="post" action=<?php echo "\"".$url."\""; ?>>
		<label style="display:inline-block;width:80px;" for="title">标题：</label>
		<input style="width:500px;" type="text" name="title" id="title" value="" required><br>
		<label style="line-height:40px;display:inline-block;width:80px;" for="keyword">关键字：</label>
		<input style="width:500px;" type="text" name="keyword" id="keyword" value="" required><br>
		<label for="content1">内容：</label><br>
		<textarea name="content1" id="content1" style="width:700px;height:200px;visibility:hidden;"></textarea>
		<br />
		<input type="submit" name="button" value="发表博客" /> (提交快捷键: Ctrl + Enter)
	</form>
</body>
</html>

