<?php
session_start();

$u=$_REQUEST['e'];
$_SESSION["email"]= $u;

echo 'Welcome '.$_SESSION["email"]."<br><br>";
echo '<a href="Srihotel.php?u='.$u.'" value="SriHotel">.Sri Hotel.</a>';
?>





