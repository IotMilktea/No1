<?php
session_start();
$server="localhost";//主機
$db_username="g1906";//你的資料庫使用者名稱
$db_password="20191nchu_g06";//你的資料庫密碼
$dbname = "g1906_test01";
$con = new mysqli($server,$db_username,$db_password,$dbname);//連結資料庫
if(!$con){
die("can't connect".mysqli_error());//如果連結失敗輸出錯誤
}
$email=$_SESSION['email'];
$q="SELECT * FROM `userdata` WHERE email='$email'";//從contact資料庫中選擇所有的資料表
$reslut=mysqli_query($con,$q);//執行sql
?>

<html lang="en">
<head>
<meta charset="UTF-8" >
<title>使用者註冊頁面</title>
</head>  
<table width="700" border="1">
  <tr>
    <td>經度</td>
    <td>緯度</td>
    <td>海拔</td>
    <td>速度</td>
    <td>時間</td>
  </tr>
<?php
for($i=1;$i<=mysqli_num_rows($reslut);$i++){
$rs=mysqli_fetch_row($reslut);
?>
  <tr>
  	<td><?php echo $rs[2]?></td>
    <td><?php echo $rs[3]?></td>
    <td><?php echo $rs[4]?></td>
    <td><?php echo $rs[5]?></td>
    <td><?php echo $rs[6]?></td>
  </tr>

<?php
}


if (!$reslut){
die('Error: ' . mysqli_error($con));//如果sql執行失敗輸出錯誤
}else{
#echo "讀取資料成功";//成功輸出註冊成功
}
mysqli_close($con);//關閉資料庫
?>
</table>
<body>
<a href="http://140.130.19.38:58136/~g1906/test/php/welcome.php">回首頁</a>
</body>
</html>