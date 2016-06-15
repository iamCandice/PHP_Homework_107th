<?php  
echo "檔案絕對路徑：".__FILE__."<br>";
echo "檔名：".basename(__FILE__)."<br>";
echo "檔名去除副檔名：".basename(__FILE__, '.php')."<br>";
echo "路徑：".dirname(__FILE__)."<br>";
echo "上一層路徑：".dirname(dirname(__FILE__))."<br>";

$filename=__FILE__;
if(is_file($filename))
{ echo "檔案存在："."$filename<br>";}
else
{ echo "檔案不存在"."<br>";}
if(is_dir(dirname(__FILE__)))
{ echo "資料夾存在：".dirname(__FILE__)."<br>";}
else
{ echo "資料夾不存在"."<br>";}

?>