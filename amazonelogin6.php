<?php

session_start();



echo 'Wallet Balence'.'<br>';
$wal = (int)$_REQUEST['am'];
if($wal<=0 || $wal<100)
{
    echo 'Please deposit amount into your wallet'.'<br>';
    header("location:amazone5.php");
}        
echo ($wal - 100).'<br><br>';
?>




<html>
    <body>
       <iframe width="560" height="315" src="https://www.youtube.com/embed/ohRyXxc9CIc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br><br>
    </body>    
</html>    
    







