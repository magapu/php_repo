<?php

session_start();
echo 'One step away to complete your order    '.$_SESSION['email'];
?>


<html>
    <body>    

<form action="#" method="post">
           <center> <input type="text" name="t17" value="Card Number" onclick="this.value = ' '"><br><br>
            <input type="text" name="t18" value="Cvv" onclick="this.value = ' '"><br><br>
            <input type="text" name="t19" value="Card holder name" onclick="this.value = ' '"><br><br>
            <input type="text" name="t20" value="Bill amount" onclick="this.value = ' '"><br><br>
            &nbsp;<textarea rows="10" cols="20" value="Address" name="Add" onclick="this.value=' ' "></textarea><br><br>
            <input type="submit" name="b1" value="Pay Bill"></center>
        
        </form>   
    </body>    
</html>    

<?php

$date = date("d-m-Y");
if(isset($_POST['b1']))
{
    $cardnumber = $_POST['t17'];
    $cvv = $_POST['t18'];
    $holdername = $_POST['t19'];
    $add = $_POST['Add'];
    
    $itemname = $_GET['s'];
    $total =  $_GET['t'];
    //echo ''.$itemname;
    //echo ''.$total;

         
    
    
    $con = mysqli_connect("localhost","root","","db5");
    $insert = "insert into OnlineFood values('$cardnumber','$cvv','$holdername','$add','$itemname','$total','$date')";
    $que = mysqli_query($con, $insert);
    
    
    header("location:orderpage.php?a='.$add'&i='$itemname'");
    
    session_destroy();
    
    
}


?>