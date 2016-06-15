
<?php
	$no = $_GET["no"];//網址傳來的參數
	//echo $no;
	include("connect.inc.php");
	
	//先讀取一筆資料
	$read = "SELECT * FROM travel WHERE id = '$no'";
	$read_result = mysqli_query($link, $read);
	$result = mysqli_fetch_array($read_result);

	echo "<form action='updateresult.php' method='post'>";
	echo "編號:".$result[0]."<br/>";
	echo "<input type='hidden' name='no' value='".$result[0]."'>";
	echo "使用者名稱:<input type='text' name='name' value='".$result[1]."'><br/>";
	echo "使用者電話:<input type='tel' name='phone' value='".$result[2]."'><br/>";
	echo "使用者信箱:<input type='text' name='email' value='".$result[3]."'><br/>";
	echo "地址:<input type='text' name='address' value='".$result[4]."'><br/>";
	echo "旅遊地點:<input type='text' name='place' value='".$result[5]."'><br/>";
	echo "預算金額:<input type='text' name='money' value='".$result[6]."'><br/>";
	echo "<input type='submit' value='更新'>";
	echo "<input type='reset'>";
	echo "</form>";


mysqli_free_result($read_result);
mysqli_close($link);
	?>
