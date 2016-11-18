<!DOCTYPE html>
<html>
<head>

	<title>mafiashare.net</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="description" content="Empire - XHTML Template" />

	<!-- CSS -->	
	<link href='fonts/sansation.css' rel="stylesheet" type="text/css" />	<!-- Get any font from here easily: http://www.google.com/webfonts -->	
	<link href="css/style.css" rel="stylesheet" type="text/css" />	
	<link href="fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-slider.css" rel="stylesheet" type="text/css" />
	<link href="css/styler-farbtastic.css" rel="stylesheet" type="text/css" />
	
	<!-- UPDATE BROWSER WARNING IF IE 7 OR LOWER -->
	<!--[if lt IE 8]>
	<link href="css/stop_ie.css" rel="stylesheet" type="text/css" />
	<![endif]-->

	
	<!-- JAVASCRIPTS -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.17.custom.min.js"></script>			
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>	
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>			
	<script type="text/javascript" src="js/jquery.bgslider.js"></script>
	<script type="text/javascript" src="js/preloader.js"></script>
	<script type="text/javascript" src="js/farbtastic.js"></script>
	<script type="text/javascript" src="js/basic.js"></script>
	<script type="text/javascript" src="js/styler.js"></script>
		
	<!-- PAGE OPENING ANIMATION -->
	<script type="text/javascript">		
	
	//PAGE IS CLOSED ON START
	jQuery(document).ready(function(){
		jQuery('#page').css({'display':'inline','width':'300px','overflow':'hidden','margin-right':'340px'});
		jQuery('#sidebar').css({'margin-left':'326px'});	
	});
	
	//WHEN ALL ELEMENTS ARE LOADED
	jQuery(window).load(
		function() {			
			// jQuery('#hp_preloader').delay(800).animate({'opacity':'0'},1400,function(){
			jQuery('#hp_preloader').animate({'opacity':'0'},0,function(){
				
				//HOMEPAGE NIVO SLIDER STARTS
				
				jQuery('#slider-nivo').nivoSlider({
					controlNav:true,
					controlNavThumbs:false,			
					keyboardNav:false,
					pauseOnHover:false,
					prevText:'',			
					nextText:'',
					effect:'fade',
					animSpeed:300,
					pauseTime:4000
				});
				
						
				
				//REMOVE LOADING 
				jQuery(this).remove();
					
				//PAGE OPENING ANIMATION	
				jQuery('#sidebar').animate({'margin-left':'0px'},0);		
				jQuery('#page').animate({'margin-right':'0px','width':'666px'},0);		
				
			});				
		}
	);			
	</script>
		
</head>
<body>
	
	<!-- DISPLAY MESSAGE IF JAVA IS TURNED OFF -->
	<noscript>		
		<div id="notification">Please turn on javascript in your browser for the maximum experience!</div>
	</noscript>

	<!-- DISPLAY THIS MESSAGE IF USER'S BROWSER IS IE7 OR LOWER -->
	<div id="ie_warning"><img src="images/warning.png" alt="IE Warning" /><br /><strong>Your browser is out of date!</strong><br /><br />This website uses the latest web technologies so it requires an up-to-date, fast browser!<br />Try <a href="http://www.mozilla.org/en-US/firefox/new/?from=getfirefox">Firefox</a> or <a href="https://www.google.com/chrome">Chrome</a>!</div>

	<!-- PAGE LOADING -->
	<div id="hp_preloader"></div>

	<!-- STYLER FOR DEMO -->
	<div id="styler">
		<div id="styler-button"><a href="#"><img src="images/styler-button.png" alt="styler" /></a></div>
			
		<div class="styler-title"><img src="images/styler-t1.png" alt="" /></div>
			
		<ul id="texture">	
			<li><a href="#" id="styler-texture-1">None</a></li>
			<li id="selected"><a href="#" id="styler-texture-2">Leather</a></li>
			<li><a href="#" id="styler-texture-3">Carbon</a></li>
		</ul>
		
		<div class="styler-title"><img src="images/styler-t2.png" alt="" /></div>
		
		<div id="styler-colorpicker" class="colorpicker"></div>
	</div>


	<!-- SITE WRAPPER -->
	<div id="wrapper">
	
		<!-- PAGE WITH CONTENTS -->
		<div id="page">
			<div id="content">
			
				<?php 
					if (isset($_GET["id"])){
						$id=$_GET["id"];
					}else{
						header("location:index.php");
						exit;
					}
				 ?>
		
				<!-- WELCOME TEXT -->
				<h1 style="text-align: center;"> 编辑更新博客!</h1>
				
				<!-- ELEGANT HORIZONTAL LINE -->
				<div class="hr"></div>
				<div class="clearfix"></div>

				<?php
					$db=mysql_connect("localhost","root","");
						if (!$db) {
							echo "数据库操作频繁，请稍后再试";
							exit;
						}
						mysql_query("set names utf8");
						mysql_select_db("bloginfosystem");
						 
					if (isset($_POST["title"]) && isset($_POST["keyword"]) && isset($_POST["publishcontent"])) {
						$title=$_POST["title"];
						$keyword=$_POST["keyword"];
						$publishcontent=$_POST["publishcontent"];
						unset($_POST["title"]);
						unset($_POST["keyword"]);
						unset($_POST["publishcontent"]);

						

						$sql="update articleinfo set header='$title',content='$publishcontent',keyword='$keyword' where id='$id';";
						$result=mysql_query($sql);
						if ($result) {
							echo "博客更新成功";
							?>
							<script>window.location.href="blog.php";</script>
							<?php
						} else {
							echo "博客更新失败";
						}
						unset($_GET["id"]);
					}
				?>

				<form action="" method="post" autocomplete="off">
					<label style="display:inline-block;width:50px;" for="title">标题：</label>
					<input style="width:500px;" type="text" name="title" id="title" value="" required><br>
					<label style="display:inline-block;width:50px;" for="keyword">关键字：</label>
					<input style="width:500px;" type="text" name="keyword" id="keyword" value="" required><br>
					<label for="publishcontent">内容：</label><br>
					<textarea style="width: 578px; height: 337px;" name="publishcontent" id="publishcontent" cols="30" rows="10" required></textarea><br>
					<input style="margin-left:530px;" type="submit" value="更新">
				</form>

				<?php 
					if (isset($_GET["id"])){
						
						$db=mysql_connect("localhost","root","");
						if (!$db) {
							echo "数据库操作频繁，请稍后再试";
							exit;
						}
						mysql_query("set names utf8");
						mysql_select_db("bloginfosystem");

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
								document.getElementById('title').value=title;
								document.getElementById('keyword').value=keyword;
								document.getElementById('publishcontent').value=content;
								</script>
								<?php
							}
						}
						unset($_GET["id"]);
					}
				?>
				
				


					
			</div><!-- #content ends -->	
		</div><!-- #page ends -->
		<div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div> 
		
		<!-- SIDEBAR -->
		<div id="sidebar">	
			<div id="sidebar-color"></div>		<!-- SIDEBAR COLOR LAYER -->
			<div id="sidebar-border"></div>		<!-- SIDEBAR BORDER LAYER -->
			<div id="sidebar-light"></div>		<!-- SIDEBAR RADIAL GRADIENT LIGHT LAYER -->
			<div id="sidebar-texture"></div>	<!-- SIDEBAR TEXTURE LAYER -->
			
			<!-- SIDEBAR CONTENT LAYER -->
			<div id="sidebar-content">	
			
				<!-- LOGO -->
				<div id="logo">
					<?php 
						if (isset($_COOKIE["user"])) {
							echo "<a href=\"index.php\"><img src=\"headimg/".$_COOKIE["user"].".jpg\" alt=\"\" /></a>";
							
						}elseif (isset($_SESSION["user"])){
							echo "<a href=\"index.php\"><img src=\"headimg/".$_SESSION["user"].".jpg\" alt=\"\" /></a>";
						}else{
					?>
							<a href="index.php"><img src="images/logo.png" alt="" /></a>
					<?php
						}
					 ?>
					
				</div>
				<ul id="register">
					<?php 
						if (isset($_COOKIE["user"])) {
					?>
							<li><?php echo $_COOKIE["user"]; ?></li>
							<li><a href="logoff.php">注销</a></li

					<?php
						}elseif (isset($_GET["user"])){
					?>
							<li><?php echo $_GET["user"]; ?></li>
							<li><a href="logoff.php">注销</a></li

					<?php
						}else{
					?>
							<li><a href="login.php">登录</a></li>
							<li><a href="register.php">注册</a></li>
					<?php
						}
					 ?>
				</ul>

				<?php 
				//检查未读Email的数量
				if (isset($_COOKIE["user"])||isset($_GET["user"])) {
					$user=$_COOKIE["user"];
					if (!$user) {
						$user=$_GET["user"];
					}
					$sql="select email from user where username='$user';";
					$result=mysql_query($sql);
					$row=mysql_fetch_array($result);
					$email=$row["email"];
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
					
				}
				?>

				<!-- MENU -->
				<ul id="menu">
					<li><a href="index.php">HOME</a></li>
					
					<?php 
						if (isset($_COOKIE["user"])) {
					?>
							<li class="current"><a href="blog.php">BLOG</a></li>
							<li><a href="email.php">EMAIL
							<?php 
							if ($notReadEmail>0) {
								echo "<span style='color:red;'>[".$notReadEmail."]</span>";
							} 
							?>
						</a></li>
					<?php
						}elseif (isset($_GET["user"])){
							echo "<li class=\"current\"><a href=\"blog.php?".$_GET["user"]."\">BLOG</a></li>";
							if ($notReadEmail>0) {
								echo "<li><a href=\"email.php?".$_GET["user"]."\">EMAIL<span style='color:red;'>[".$notReadEmail."]</span></a></li>";
							}else{
								echo "<li><a href=\"email.php?".$_GET["user"]."\">EMAIL</a></li>";
							}
							
						}else{
					?>
							<li><a href="">BLOG</a></li>
							<li><a href="">EMAIL</a></li>
					<?php
						}
					 ?>
<!-- //后台控制 -->
					
					<?php 
						if (isset($_COOKIE["user"])&&($_COOKIE["user"]=="admin")) {
					?>
							<li><a href="backgroundcontrol.php">backGroundControl</a></li>
					<?php
						}elseif (isset($_GET["user"])&&($_GET["user"]=="admin")){
							echo "<li><a href=\"backgroundcontrol.php?".$_GET["user"]."\">backGroundControl</a></li>";
						}
					 ?>
				</ul>	
						
			</div><!-- #sidebar-content ends -->	

			<!-- SOCIAL ICONS ON SIDEBAR'S BOTTOM PART -->
			<ul id="sidebar-bottom">			
				<li><a href="#"><img src="images/sidebar_icons/facebook.png" alt="" /></a></li>
				<li><a href="#"><img src="images/sidebar_icons/twitter.png" alt="" /></a></li>
				<li><a href="#"><img src="images/sidebar_icons/rss.png" alt="" /></a></li>
			</ul>
			
			<!-- COPYRIGHT TEXT -->
			<p id="copyright">EMPIRE XHTML. More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
			
		</div><!-- #sidebar ends -->			
					
	</div><!-- #wrapper ends -->

	
	<!-- BACKGROUND SLIDER -->
	<div id="bg_slider">	
		<img src="images/bgslider-1.jpg" alt="" />
		<img src="images/bgslider-2.jpg" alt="" />		
		<img src="images/bgslider-3.jpg" alt="" />		
	</div>


</body>
</html>