<?php
session_start();
session_destroy();
   echo '<h1>'.'Your mail id and password are does not match please try again with below link'.'</h1>'.'<br>';
   echo '<center>'.'<a href="amazonelogin3.php">Login Again</a>'.'</center>';


?>
