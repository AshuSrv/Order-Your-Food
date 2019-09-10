<?php
session_start();
$connect_mysql=mysqli_connect("localhost","root","","oyf2");
if(!$connect_mysql)
{
    alert("Connection Failed" .mysqli_connect_error());
}

$fname=$_POST['email'];
$psw=$_POST['psw'];


$result=mysqli_query($connect_mysql,"SELECT * FROM oyfregistration WHERE email='$fname' and password='$psw'") or die("failed to query" );
$row=mysqli_fetch_array($result);
if( $row['email'] == $fname && $row['password'] == $psw)
{

    $tablename=$row['fname'];

    $sql = "CREATE TABLE $tablename(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        price INT,
        foodname VARCHAR(100) NOT NULL, img VARCHAR(100)
        )";

if ($connect_mysql->query($sql) === TRUE) {
    echo "table created";
} else {
   echo"failed to create table" . $connect_mysql->error;
}


$_SESSION['email'] = $row['email'];
$_SESSION['psw'] = $row['password'];
$_SESSION['fname']=$row['fname'];
$_SESSION['expire'] = time()+100000;
$_SESSION['index'] = 0;
$_SESSION['city']=$row['city'];
$_SESSION['address']=$row['address'];
$_SESSION['mobno']=$row['mobno'];
 
if(isset($_SESSION['email'])){

    setcookie('user', $fname, time() + (30), "/");
    setcookie('psw', $psw, time() + (30), "/");
    
   header("Location:login.php");    
   echo $_SESSION['city'] . $_SESSION['address'];
}
}
else{
    header("Location:testfail.php");
    //echo "<br>"."<h1><a href='login.php'>Click Here To Login Again</a><h1>";
}


?>