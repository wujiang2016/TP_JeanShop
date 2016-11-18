<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		ul{
			list-style: none;
			margin: 50px;
		}
		li{
			width: 200px;
			height: 50px;
			line-height: 50px;
			border: 1px solid red;
			float: left;
			text-align: center;
			margin: 0 auto;

		}
	</style>
</head>
<body>
	<div class="nav">
		<ul>
			<li>首页</li>
			<li>新闻热点</li>
			<li><a href=<?php echo ($login); ?>>登陆</a></li>
		</ul>
	</div>
</body>
</html>