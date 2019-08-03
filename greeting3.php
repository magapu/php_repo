<html>
    <style>
        input[type=text]
        {
            width:15%;
            border-radius:20px;
            border:5px solid #ccc;
            display:inline-block;
        }
        input[type=password]
        {
            width:15%;
            border-radius:20px;
            border:5px solid #ccc;
            display:inline-block;
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
    <body>
        <form action="#" method="post">        
            <center>
            <input type="text" name="t5" placeholder="E-Mail"><br><br> 
            <input type="password" name="t6" placeholder="Password"><br><br>
        <input type="submit" name="s2" value="Login">
            </center>
        </form>
    </body>    
</html>


<?php
if(isset($_POST['s2']))
{    
    
    $t5=$_POST['t5'];
    $t6=$_POST['t6'];

$in1 = mysqli_connect("localhost","root","","");
$con="SELECT PASSWORD FROM `greeting1` WHERE Email='$t5' ";
$qu = mysqli_query($in1, $con);

while ($rows= mysqli_fetch_assoc($qu))
{
    $pass=$rows["PASSWORD"];
}      
if($t6==$pass)
{
    header("location:greeting4.php");
} 
 else 
 {
    header("location:greeting2.php");
 }

}

?>

