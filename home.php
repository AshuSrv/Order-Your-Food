<?php 
session_start();
$connect_mysql=mysqli_connect("localhost","root","","oyf2");
if(!$connect_mysql)
{
    alert("Connection Failed" .mysqli_connect_error());
}

echo "<script>
alert('Logout Successfull');
</script>";
$table=$_SESSION["fname"];
$sql="drop table `$table`;";

if ($connect_mysql->query($sql) === TRUE) {
    header("Location:test.php");
} else {
   echo"failed to Drop table" . $connect_mysql->error;
}
session_destroy();


?>