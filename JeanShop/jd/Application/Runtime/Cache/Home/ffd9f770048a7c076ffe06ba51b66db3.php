<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="loginCheck" method="post">
		<div><?php echo ($error); ?></div>
		用户名：<input type="text" name="user">
		<br>
		密码：<input type="password" name="password">
		<br>
		<input type="submit" value="提交">	
	</form>
</body>
</html>