<?php
session_start();

if($_SESSION['sess']=="")
{
    header("location:amazon1.php");
}


echo 'Welocme   '.$_SESSION['sess']. ',    Congratulations You have sucessfully registerd'.'<br><br>';
echo '<a href="amazonelogin3.php">Login Here</a>';
?>