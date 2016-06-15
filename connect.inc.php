
<?php

	$hostname = "localhost";
	$username = "root";
	$userpwd = "19960302";
	$select_db = "travel";
	$link = mysqli_connect($hostname, $username, $userpwd, $select_db);
	mysqli_query($link, "character set utf8");	
/*
if(!@mysql_connect(localhost, root, 19960302))
        die("無法對資料庫連線");
mysql_query("SET NAMES utf8");

if(!@mysql_select_db(admin))
        die("無法使用資料庫");
 */       
?> 