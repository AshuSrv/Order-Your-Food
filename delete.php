<?php
$id=$_GET['id1'];

session_start();
$connect_mysql=mysqli_connect("localhost","root","","oyf2");
if(!$connect_mysql)
{
    alert("Connection Failed" .mysqli_connect_error());
}


$table=$_SESSION["fname"];
$sql="DELETE FROM $table WHERE id=$id;";

if ($connect_mysql->query($sql) === TRUE) {
    header("Location:cart.php");
} else {
   echo"failed to Delete Item" . $connect_mysql->error;
}
?>