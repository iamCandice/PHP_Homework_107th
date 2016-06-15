<!DOCTYPE html>
<html lang="en">
<head>
	<meta "charset=utf-8">
	<link rel="stylesheet" href="all.css" >
	<title>管理者登入</title>
	<?php
    session_start();
    unset($_SESSION["user"]);
    session_destroy();
  	?>  
</head>
<body>
	<div class="container_login">
	<form action="connect.php" method="post">
	<h1>管理者登入</h1>
	<table class="table">
	<tr>
		<td>帳號</td>
		<td><input type="text"  name="user" required autofocus><br></td>
	</tr>
	<tr>
		<td>密碼</td>
		<td><input type="pwd" name="userpwd" required><br></td>
	</tr>
	</table>
	<input type="submit" value="登入">
	</form>
	</div>
</form>
</body>
</html>