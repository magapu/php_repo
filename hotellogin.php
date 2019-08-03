<html>
<body>
    <form action="#" method="post">
        <input type="text" name="email" ><br><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="login">
    </form>
        
</body>    
</html>


<?php

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    $connection = mysqli_connect("localhost","root","","db5");
    $ret = "SELECT PASSWORD FROM `foodreg` WHERE Email='$email'";
    $query = mysqli_query($connection, $ret);
    
    
    while($row = mysqli_fetch_assoc($query))
    {
        $retPass = $row["PASSWORD"];
    }        
    
   if( $pass == $retPass)
    {
        header("location:hotel1.php?e=".$email);
    }
 else 
     {
         header("location:credstatus.php");
    }    
}    

   
?>
