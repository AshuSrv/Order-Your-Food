<?php 
session_start();
$name=$_POST['header'];
$price=$_POST['price'];
$img=$_POST['img'];



$connect_mysql=mysqli_connect("localhost","root","","oyf2");
if(!$connect_mysql)
{
    alert("Connection Failed" .mysqli_connect_error());
}

$table=$_SESSION["fname"];
$sql="INSERT INTO $table (price,foodname,img) values($price,'$name','$img');";

if ($connect_mysql->query($sql) === TRUE) {
    $_SESSION['index']=2;
    header("Location:menu.php");
} else {
   echo"failed to Add Item" . $connect_mysql->error;
}


?>