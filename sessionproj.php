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
session_start();
  
if(isset($_POST['b']))
{
       $_SESSION["Basic balence"] = $_SESSION["Basic balence"]+$_POST['t1'];
       
       echo "  ".$_SESSION["Basic balence"];
}
if(isset($_POST['b1']))
{
         $_SESSION["Basic balence"] = $_SESSION["Basic balence"]-$_POST['t1'];
       
       echo "  ".$_SESSION["Basic balence"];
}
if(isset($_POST['b2']))
{
    echo "  ".$_SESSION["Basic balence"];
}    



?>