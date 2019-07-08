<?php 
$server="localhost";//主機
$db_username="g1906";//你的資料庫使用者名稱
$db_password="20191nchu_g06";//你的資料庫密碼
$dbname = "g1906_test01";
$con = new mysqli($server,$db_username,$db_password,$dbname);//連結資料庫
if(!$con){
die("can't connect".mysqli_error());//如果連結失敗輸出錯誤
}

$email=$_GET['email'];
$longitude=$_GET['longitude'];
$latitude=$_GET['latitude'];
$altitude=$_GET['altitude'];
$speed=$_GET['speed'];

#include('connect.php');//連結資料庫

$q="INSERT INTO userdata (email,longitude,latitude,altitude,speed) VALUES ('$email','$longitude','$latitude','$altitude','$speed')";//向資料庫插入表單傳來的值的sql
echo $q;     

$reslut=mysqli_query($con,$q);//執行sql
if (!$reslut){
die('Error: ' . mysqli_error($con));//如果sql執行失敗輸出錯誤
}else{
echo "輸入資料成功";//成功輸出註冊成功
}
mysqli_close($con);//關閉資料庫
?>