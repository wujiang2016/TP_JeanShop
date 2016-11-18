<?php 
	$user=$_POST["user"];
	setcookie("user","$user",time()+3600);
	if (isset($_COOKIE["user"])) {
		header("location:index.html");
	} else {
		header("location:index.html?user=$user");
	}
 ?>