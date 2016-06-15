<?php
	//傳值到資料庫
	$name = $_COOKIE["name"];
	$phone = $_COOKIE["phone"];
	$email = $_COOKIE["email"];
	$address = $_COOKIE["address"];
	$place = $_COOKIE["place"];
	$money = $_COOKIE["money"];
	$link = mysqli_connect("localhost","root","19960302","travel");
	mysqli_query($link, "character set utf8");
	$sql = "INSERT INTO travel(name, phone, email, address, place, money) VALUES('$name', '$phone', '$email', '$address', '$place', '$money')";
	mysqli_query($link, $sql);
	mysqli_close($link);
	echo "<script>";
		echo "alert('報名成功!');";	
		echo "parent.location = 'H.W.travel.html';";
	echo "</script>";

?>