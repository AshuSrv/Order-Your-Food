<?php
$connect_mysql=mysqli_connect("localhost","root","","oyf2");


if(!$connect_mysql)
{
    alert("Connection Failed" . mysqli_connect_error());
}

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['psw'];
$repassword=$_POST['repassword'];
$email=$_POST['email'];
$city=$_POST['city'];
$mobno=$_POST['Yournum'];
$gender=$_POST['gender'];
$address=$_POST['address'];

if(!preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/', $password)) {
    echo '<h2>Password Should follow the limit \n Min 8 character \n Min one Upper Case \n Min one Lower Case \n Min one special Character \n Atleast one digit!</h2>';
    echo "<br>"."<h2><a href='reg.html'>Click Here To Register Again</a><h2>";
}

else if($password!=$repassword){
    echo '<h2>Password is not Matching</h2>';
    echo "<br>"."<h2><a href='reg.html'>Click Here To Register Again</a><h2>";
}
else if(!preg_match('/^[A-Za-z\s]+$/',$fname)){
    echo ('<h2>First Name should have alphabets only</h2>');
    echo "<br>"."<h2><a href='reg.html'>Click Here To Register Again</a><h2>";
}

else if(!preg_match('/^[A-Za-z\s]+$/',$lname)){
    echo '<h2>Last Name should have alphabets only</h2>';
    echo "<br>"."<h2><a href='reg.html'>Click Here To Register Again</a><h2>";
}

else if(!preg_match('/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/',$email)){
    echo ("<h2>Incorrect Email Homie</h2>");
    echo "<br>"."<h2><a href='reg.html'>Click Here To Register Again</a><h2>";
}

else if(!preg_match('/^[0-9]+$/',$mobno)){
    echo '<h2>Mobile Number Should have Numericals only and minimum of 10 digits.</h2>';
    echo "<br>"."<h2><a href='reg.html'>Click Here To Register Again</a><h2>";
}
else{
$sql="INSERT INTO oyfregistration(fname,lname,password,email,city,mobno,gender,address) values('$fname','$lname','$password','$email','$city','$mobno','$gender','$address');";
if($connect_mysql->query($sql) == TRUE)
{
   header("Location:test.php");
}
else{
    echo("<h2>Something went wrong</h2>");
    echo "<br>"."<h2><a href='reg.html'>Click Here To Register Again</a><h2>";
}
}
?>