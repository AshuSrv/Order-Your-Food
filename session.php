<?php
/*if(!isset($_SESSION['email']))
 
{
 
    echo "<script type='text/javascript'>alert('Session Expired');</script>";
    echo("Hello");
 
}*/
 
session_start();
 
    $now = time();
 // checking the time now when home page starts
 
    if($now > $_SESSION['expire'])
 
    {
 
        session_destroy();
        echo "<script type='text/javascript'>alert('Session Expired');</script>";
        header("Location:test.php");
 
    }
    else{
       
        header("Location: login.php");
    }
 
    
 //starting this else one [else1]
?>