<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理頁面</title>
    <link rel="stylesheet" href="all.css" >
</head>

<body>
<div class="container_admin">
<?php 
session_start(); 
include("connect.inc.php");

$read = "select * from travel";
    $read_result = mysqli_query($link, $read);
    echo "<table>";
    echo "<tr>";
    echo "<td>No</td>
          <td>姓名</td>
          <td>電話</td>
          <td>信箱</td>
          <td>地址</td>
          <td>旅遊地點</td>
          <td>預算金額</td>
          <td>上傳檔案</td>";
    echo "</tr>";
    while($row = mysqli_fetch_array($read_result)){
      echo "<tr>";
        echo "<td>".$row[0]."</td>
              <td>".$row[1]."</td>
              <td>".$row[2]."</td>
              <td>".$row[3]."</td>
              <td>".$row[4]."</td>
              <td>".$row[5]."</td>
              <td>".$row[6]."</td>
              <td>".$row[7]."</td>";
      //更新資料(用GET的方式連到admin.update.php)
        echo "<td><a href = 'update.php?no=".$row[0]."'>更新資料</a></td>"; 
      //刪除資料(用GET的方式連到admin.del.php)
        echo "<td><a href = 'del.php?no=".$row[0]." '>刪除資料</a></td>"; 
        echo "</tr>";
    }
        echo "</table><br>";
    mysqli_close($link);
?> 
</div>
</body>
</html>

