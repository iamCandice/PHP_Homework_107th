<?php
//是打開緩沖區的，就是要把您需要生成的靜態文件的內容緩存在這裏；
  ob_start();
  session_start();
  //連結資料庫
  $dbname="photo";
  $link=mysqli_connect("localhost","root","19960302",$dbname);
	mysqli_query($link,"SET CHARACTER SET big5");
	mysqli_query($link,"SET collation_connextion='big5_chinese_ci'");
	//日/月 年
	$date_form="n/d Y";
	$username=$_SESSION['user'];


if (isset($_SESSION["num"]))
{
  $num=$_SESSION["num"];
  //傳到upload.php
  print '<form action="upload.php" method="post" enctype="multipart/form-data">';

  for ($i=1; $i<=$num; $i++)
    print '圖片'.$i.':<input type="file" name="file[]"></br>';
  	print '<form>
			<input type="submit" name="submit" value="上傳">&nbsp;
  			<input type="reset" value="清除">
		   </form>';
	
	if (isset($_POST['submit']))
	{
		//是否有上傳檔案資料
		if (isset($_FILES["file"]))
		{
	  		$sql="SELECT * FROM photo";
	  		$result=mysqli_query($link,$sql);
	  		$no=mysqli_num_rows($result);
//	  		echo $no;
	  		for($i=0; $i<$num; $i++)
	  		{
	    		$content="親愛的使用者:</br>恭喜!您已經成功上傳以下照片到本網站:</br>";
	    		//使用copy()函數將暫存檔儲存成伺服器檔案，就可以完成檔案上傳
	    		if(copy($_FILES["file"]["tmp_name"][$i],
								$_FILES["file"]["name"][$i]))
				{
//					echo $_FILES["file"]["name"][$i];
			 		 print "圖片".($i+1)."上傳成功!</br>";
			 		 //unlink()函數刪除暫存檔
			 		 unlink($_FILES["file"]["tmp_name"][$i]);
			 		 //放進資料庫photo的
			 		 $insert="INSERT INTO photo(P_path,P_user)
						VALUES('./".$_FILES["file"]["name"][$i]."','".$username."')";
			 		 //查詢資料庫
			 		 mysqli_query($link,$insert); 
			 		 $content.=$_FILES["file"]["name"][$i]."</br>";
			 		 //跳轉到show.php
         			header("Refresh:1;url='show.php'");
				}
				else
					  print "圖片".($i+1)."上傳失敗!</br>";
				}

			}
		}
	}
else
{
  echo "您尚未登入";
  header("Refresh:2;url=login.php");
}
mysqli_close($link);
ob_end_flush();
?>
