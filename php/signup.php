<?php 
header("Content-Type: text/html; charset=utf8");
if(!isset($_POST['submit'])){
exit("錯誤執行");
}//判斷是否有submit操作

$server="localhost";//主機
$db_username="g1906";//你的資料庫使用者名稱
$db_password="20191nchu_g06";//你的資料庫密碼
$dbname = "g1906_test01";
$con = new mysqli($server,$db_username,$db_password,$dbname);//連結資料庫
if(!$con){
die("can't connect".mysqli_error());//如果連結失敗輸出錯誤
}
if ($con->connect_errno) {
    printf("Connect failed: %s\n", $con->connect_error);
    exit();
}

$name=$_POST['name'];//post獲取表單裡的name
$email=$_POST['email'];//post獲取表單裡的email
$password=$_POST['password'];//post獲取表單裡的password

#include('connect.php');//連結資料庫
var_dump($name,$email,$password);
$q="INSERT INTO user(name,email,password) VALUES ('$name','$email','$password')";//向資料庫插入表單傳來的值的sql
$reslut=mysqli_query($con,$q);//執行sql
var_dump($result);
if (!$reslut){
die('Error: ' . mysqli_error($con));//如果sql執行失敗輸出錯誤
}else{
echo "註冊成功";//成功輸出註冊成功
}
mysqli_close($con);//關閉資料庫
?>