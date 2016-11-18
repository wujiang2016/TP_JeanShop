<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录页面</title>
	<link rel="stylesheet" href="/jd/Public/Home/css/resite.css">
	<link rel="stylesheet" href="/jd/Public/Home/css/login.css">
	<link rel="stylesheet" href="/jd/Public/Home/css/register.css">
</head>
<body>
	<div class="header">
		<div class="commonWidth">
			<a href=""><img src="/jd/Public/images/logo/logo.jpg" alt=""></a>
		</div>
	</div>
	<div class="content">
		<div class="commonWidth">
			<div class="new_user">
				<div class="new_userLeft">
					<h3>老用户登录</h3>
					<span>尊敬的拾惠网用户，欢迎您回来！</span>
				</div>
				<div class="new_userRight">
					<span>还没有账号，<a href="<?php echo U('User/register');?>">立即注册</a></span>
				</div>
			</div>
			<div class="input">
				<form action="" method="post">
					<label for="user">用户账号：</label>
					<input type="text" id="user" name="username" required pattern="[\w\u4e00-\u9fa5]{1,30}" placeholder="请输入不大于30位字母数字下划线汉字组成的用户名">
					<span style="color:red;font-size:14px;margin-left:10px;"><?php echo ($error); ?></span>
					<br><br>

					<label for="password">登陆密码：</label>
					<input type="password" id="password" name="password" required>
					<span style="color:red;font-size:14px;margin-left:10px;"></span>
					<br><br>

					<label for="authCode">验证码：</label>
					<input type="text" id="authCode" name="authCode" required>
					<img src="verifyCode" alt="" onclick="this.src=this.src+'?'">
					<span style="color:red;font-size:14px;margin-left:10px;"></span>
					<br><br>

					<input type="checkbox" name="agree" id="agree">
					<input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
					<label for="agree"><a href="">两周内免登陆</a></label><br><br>

					<input type="submit" value="登陆"><br>
				</form>

				<div class="login fr">
					<img class='show' src="/jd/Public/images/login.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="commonWidth">
			拾惠网 粤ICP备16078785号-1 Copyright © 2015 - 2018 User.shihuizk.com All Rights Reserved
		</div>
	</div>
</body>
</html>