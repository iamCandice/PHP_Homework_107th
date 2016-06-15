<?php
$no=$_POST["no"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$address=$_POST["address"];
$place=$_POST["place"];
$money=$_POST["money"];

	$link = mysqli_connect("localhost","root","19960302","travel");
	mysqli_query($link, "character set utf8");
$update="UPDATE travel SET name='$name',phone='$phone',email='$email',address='$address',place='$place',money='$money' WHERE id=".$no;
mysqli_query($link,$update);

//讀取資料
$read="SELECT * FROM travel";
$readresult=mysqli_query($link,$read);
	echo "<table border='1'>";
	echo "<tr><td>No</td>
          <td>姓名</td>
          <td>電話</td>
          <td>信箱</td>
          <td>地址</td>
          <td>旅遊地點</td>
          <td>預算金額</td></tr>";


while($result=mysqli_fetch_array($readresult)){
	echo "<tr>";
	echo "<td>".$result[0]."</td>
              <td>".$result[1]."</td>
              <td>".$result[2]."</td>
              <td>".$result[3]."</td>
              <td>".$result[4]."</td>
              <td>".$result[5]."</td>
              <td>".$result[6]."</td>";
	echo "<td><a href='update.php?no=".$result[0]."'>更新資料</td>";
	echo "<td><a href='del.php?no=".$result[0]."'>刪除資料</a></td>";
	echo "</tr>";
}
	echo "</table>";

?>