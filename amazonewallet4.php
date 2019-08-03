<html>
    <body>
        <center>
            <h1> Please  Add Amount To Your Wallet </h1>
        </center>   
    <form action="#" method="post">
    <input type="radio" name="r1" value="Credit">Credit<br><br>
    
    Name on card <input type="text" name="t1" ><br><br>
    Card Number&nbsp;&nbsp;<input type="text" name="t2"><br><br>
    Expire Date &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t3"><br><br>
    CVV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t4"><br><br>
    Amount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="tt"><br><br>
    <input type="submit" value="Continue" name="s"><br><br> 
    </form>

    
    <form action="#" method="post">
    <input type="radio" name="r2"  value="Debit">Debit<br><br>
    
    Name on card <input type="text" name="t5" ><br><br>
    Card Number&nbsp;&nbsp;<input type="text" name="t6"><br><br>
    Expire Date &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t7"><br><br>
    CVV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t8"><br><br>
    Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="tt1"><br><br>
    <input type="submit" value="Continue" name="s1">
    
    </form>
 

</body>    
</html>    




<?php

session_start();

echo $_SESSION['sess'].'Please add amount to your wallet';

if(isset($_POST['s']))
{
   
    $radio=$_POST['r1'];
    $Name=$_POST['t1'];
    $Cradnumber=$_POST['t2'];
    $Expire=$_POST['t3'];
    $cvv=$_POST['t4'];
    $amount=$_POST['tt'];
    
    if($Name=="" && $Cradnumber=="" && $Expire=="" && $cvv=="" && $amount=="")
    {
        header("location:amazonewallet4.php");
    } 
    else
    {    
           $con = mysqli_connect("localhost","root","","db5");
           $in = "insert into amazonepay values('$radio','$Name','$Cradnumber','$Expire','$cvv','$amount')";
           $quee = mysqli_query($con, $in);
           header("location:amazone5.php?&a=".$amount);
    }
    
      
}
if(isset($_POST['s1']))
{
    $radio1=$_POST['r2'];
    $Name1=$_POST['t5'];
    $Cradnumber1=$_POST['t6'];
    $Expire1=$_POST['t7'];
    $cvv1=$_POST['t8'];
    $amount1=$_POST['tt1'];
    if($Name1=="" && $Cradnumber1=="" && $Expire1=="" && $cvv1=="" && $amount1=="")
    {
        header("location:amazonewallet4.php");
    } 
    else
    {    
           $con = mysqli_connect("localhost","root","","db5");
           $in = "insert into amazonepay values('$radio1','$Name1','$Cradnumber1','$Expire1','$cvv1','$amount1')";
           $quee = mysqli_query($con, $in);
           header("location:amazone5.php?&a=".$amount1);
    }
    
 }    






?>