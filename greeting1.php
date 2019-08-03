<html>
  
    <style>
        
        input[type=text]
        {
                    width:15%;
                    padding:5px;                                                                
                    margin-top: -5px;-->
                   	
                    display:inline-block;
                    border:5px solid #ccc;
                    border-radius:20px;
                    box-sizing:border-box;
        }
        input[type=password]
        {
                    width:15%;
                    padding:5px;                                                                
                    margin-top: -5px;-->
                   	
                    display:inline-block;
                    border:5px solid #ccc;
                    border-radius:20px;
                    box-sizing:border-box;
        }
        input[type=submit]
        {
            width:10%;
              background-color:#4CAF50;
              color:white;
              padding: 10px;
              margin:-5px 0;
              border:none;
              border-radius:60px;
              cursor:pointer;
        }
        input[type=submit]:hover
        {
            background-color: peru;
        }
        
        
     </style>   
    <body bgcolor="">
     <center>   
        <form action="#" method="post">
        <input type="text" name="t1" value="First Name" onclick="this.value=' ' "><br><br>
        <input type="text" name="t2" value="Last Name" onclick="this.value=' ' "><br><br>
        <input type="text" name="t3" value="E-Mail" onclick="this.value=' ' "><br><br>
        <input type="password" name="t4" placeholder="Password"><br><br>
        <input type="password" name="t5" placeholder="Con-Password"><br><br>
        <input type="submit" name="s" value="Register">
        </form>
    </center>
    </body>    
</html>





<?php

if(isset($_POST['s']))
{
    $fn =$_POST['t1'];
    $ln= $_POST['t2'];
    $email=$_POST['t3'];
    $pass = $_POST['t4'];
    $conpas=$_POST['t5'];
    
    
    if($fn=="" || $ln=="" || $email=="" ||$pass=="" )
    {
        header("location:greeting1.php");
    }    
    
    $conn = mysqli_connect("localhost","root","","");
    $ins =  "insert into greeting1 values('$fn','$ln','$email','$pass')";
    $qu = mysqli_query($conn, $ins);
}    



?>

