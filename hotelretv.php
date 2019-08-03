<html>
<body>
    <form action="#" method="post">   
        <input type="date" name="da"><br>
        
     
        <input type="submit" name="s" value="Get Details">     
    </form>     
</body>    
</html>


<?php

if(isset($_POST['s']))

{    

$td=$_POST['da'];
$conn = mysqli_connect("localhost","root","","db5");
$quer =  "SELECT * FROM `onlinefood` WHERE DATE  = '$td' ";
$re = mysqli_query($conn, $quer);

while($rows= mysqli_fetch_assoc($re))
{
    echo 'Card Number'.'<input type="text" value='.$rows["CardNumber"].'>'.'<br>';
    echo 'Cvv'.'<input type="text" value='.$rows["Cvv"].'>'.'<br>';
    echo 'HolderName'.'<input type="text" value='.$rows["HolderName"].'>'.'<br>';
    echo 'Address'.'<input type="text" value='.$rows["Address"].'>'.'<br>';
    echo 'Items'.'<input type="text" value='.$rows["Items"].'>'.'<br>'; 
     echo 'Total Bill'.'<input type="text" value='.$rows["Total Bill"].'>'.'<br><br><br><br>';
}        

}
?>