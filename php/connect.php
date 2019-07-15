<?php
$server="localhost";//主機
$db_username="g1906";//你的資料庫使用者名稱
$db_password="20191nchu_g06";//你的資料庫密碼
$dbname = "g1906_test01";
$con = new mysqli($server,$db_username,$db_password,$dbname);//連結資料庫
if(!$con){
die("can't connect".mysqli_error());//如果連結失敗輸出錯誤
}
?>