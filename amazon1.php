<html>
    <body>
        <center>
            <form action="#" method="post">
                First Name&nbsp;&nbsp;&nbsp;<input type="text"  name="fn" autofocus ><br><br>
        Last Name&nbsp;&nbsp;&nbsp;<input type="text"  name="ln" ><br><br>
        E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  name="email" ><br><br>
        Password&nbsp;&nbsp;&nbsp;<input type="password"  name="p1" ><br><br>
        Con-Password&nbsp;&nbsp;&nbsp;<input type="password"  name="p2" ><br><br>
        Number&nbsp;&nbsp;&nbsp;<input type="text"  name="mob"><br><br>
        Gender <input type="radio" value="male" name="r">Male
                      <input type="radio" value="Fe-male" name="r">Female<br><br>
                      <input type="submit" name="s" value="Register">
                  </form>
            </center>
    </body>   
</html>    



<?php
session_start();

if(isset($_POST['s']))
{
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $email=$_POST['email'];
    $pass = $_POST['p1'];
    $conpass =  $_POST['p2'];
    $mob =  $_POST['mob'];
    $gen = $_POST['r'];
    
    
    
    
    if($pass!==$conpass || strlen($pass)==0||$conpass=="")
    {
        header("location:amazon1.php");
        
        echo 'password incorrect. please enter again';
    } 
 else 
     {
           $conn = mysqli_connect("sql212.epizy.com","epiz_22062979","sri8297732374","epiz_22062979_db5");
           echo 'Connecting';
           $inn=  "insert into amazonereg values('$fn','$ln','$email','$pass','$conpass','$mob','$gen')";
           
           echo 'Connecting1';
           $quer = mysqli_query($conn, $inn);
           echo 'Connecting2';
    
        $_SESSION['sess'] = "$email";
          header("location:amazone2.php");
          
     }
}     




?>

