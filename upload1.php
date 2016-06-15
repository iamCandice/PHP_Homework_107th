<?php


$dir="./upload1/";
//move_uploaded_file($tmpname, $dir."test.pdf");

$i=count($_FILES["upload1"]["name"]);
echo $i;

for($j=0; $j<$i; $j++){
	$tmpname=$_FILES["upload1"]["upload-tmp-dir"][$j];
	$filename=$_FILES["upload1"]["name"][$j];

	$now=new DateTime("now",new DateTimeZone("Asia/Taipei"));
	$nowtime=$now->format("YmdHis");
	echo $extension=pathinfo($filename, PATHINFO_EXTENSION);
	move_uploaded_file($tmpname, $dir.$nowtime.$j.".".$extension);
}

// echo $tmpname;
// //$filename=mb_convert_encoding($filename,"big5","utf8");
// //move_uploaded_file($tmpname, $dir.$filename);


?>