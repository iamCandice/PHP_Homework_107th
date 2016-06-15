<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>確認資料</title>
	<link rel="stylesheet" href="all.css" >
</head>
<body>
<div class="container_confirm">
		<h1>確認資料</h1><br>
<?php
	setcookie("name", $_POST["name"],time() + 3600);
	setcookie("phone", $_POST["phone"],time() + 3600);
	setcookie("email", $_POST["email"],time() + 3600);
	setcookie("address", $_POST["address"],time() + 3600);
	setcookie("place", $_POST["place"],time() + 3600);
	setcookie("money", $_POST["money"],time() + 3600);
?>
	<table class="table">
		<tr> 
			<td>姓名</td>
			<td><?php echo $_POST["name"]?></td>
		</tr>
		<tr> 
			<td>電話</td>
			<td><?php echo $_POST["phone"]?></td>
		</tr>	
		<tr> 
			<td>信箱</td>
			<td><?php echo $_POST["email"]?></td>
		</tr>	
		<tr> 
			<td>地址</td>
			<td><?php echo $_POST["address"]?></td>
		</tr>	
		<tr> 
			<td>旅遊地點</td>
			<td><?php echo $_POST["place"]?></td>
		</tr>	
		<tr> 
			<td>預算金額</td>
			<td><?php echo $_POST["money"]?></td>
		</tr>	
		
	</table>
<input type="button" value="送出" onclick="location.href='add.php'">
</div>
</body>
</html>

