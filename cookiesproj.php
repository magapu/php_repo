<html>
<body>
    <form action="#" method="post">
     <input type="text" name="t1"> <br><br>    
    <input type="submit" name="b" value="Deposit">
    <input type="submit" name="b1" value="withdraw">
    <input type="submit" name="b2" value="Balence">
    </form>
</body>    
</html>

<?php


if(isset($_POST['b']))
{
      setcookie($cookie_name,$cookie_amnt, time()+(86400 * 1),"/") =  setcookie($cookie_name,$cookie_amnt, time()+(86400 * 1),"/")+$_POST['t1'];
       echo setcookie($cookie_name,$cookie_amnt, time()+(86400 * 1),"/");
}
if(isset($_POST['b1']))
{
    $cookie_amnt = $cookie_amnt - $_POST['t1'];
    echo $cookie_amnt;
}
if(isset($_POST['b2']))
{
    echo $cookie_amnt;
}    

?>

