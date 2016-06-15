<?php 
	$id = $_GET["no"];
	include("connect.inc.php");	
	$del = "DELETE FROM travel WHERE id=".$id;
	mysqli_query($link, $del);
	echo '<meta http-equiv=REFRESH CONTENT=0.5;url=admin.php>';
	mysqli_close($link); 
?>