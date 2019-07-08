<?php
$server="localhost";//主機
$db_username="test123";//你的資料庫使用者名稱
$db_password="test123";//你的資料庫密碼
$dbname = "g1906";
$con = new mysqli($server,$db_username,$db_password,$dbname);//連結資料庫
if(!$con){
die("can't connect".mysqli_error());//如果連結失敗輸出錯誤
}
?>