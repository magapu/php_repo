<?php

$address = $_REQUEST['a'];
$itemlist = $_REQUEST['i'];

echo 'Your order has been placed with below items to provided address.<br><br>';

echo $itemlist.'<br>';
echo $address.'<br>';


echo 'Thank You';


?>