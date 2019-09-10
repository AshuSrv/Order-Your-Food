<?php
$connect_mysql=mysqli_connect("localhost","root","","oyf2");

if(!$connect_mysql)
{
    alert("Connection Failed" .mysqli_connect_error());
}

$fname=$_POST['email'];
$psw=$_POST['psw'];

session_start();

$_SESSION['email'] = $fname;
$_SESSION['psw'] = $psw;


$result=mysqli_query($connect_mysql,"SELECT * FROM oyfregistration WHERE email='$fname' and password='$psw'") or die("failed to query" );
$row=mysqli_fetch_array($result);
if( $row['email'] == $fname && $row['password'] == $psw)
{

    echo "Welcome " . $_SESSION["email"] . ".";
echo "Session variables are set.";

    echo("Login done,<br>");

}
else{
    echo("Login failed  ");
    echo "Sorry  " . $_SESSION["email"] . ".";
    session_destroy();
    echo("Session Expired");

}

?>