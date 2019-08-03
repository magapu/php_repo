<html>
    <body>
        <form action="#" method="post">
            <center>
                E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t1"><br><br>
            Password <input type="password" name="t2"><br><br>
        <input type="submit" name="s1" value="Login">
            </center>
        </form>
    </body>    
</html>

<?php

if(isset($_POST['s1']))
{
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];
    $co = mysqli_connect("localhost","root","","db5");
    $retv = "SELECT PASSWORD FROM `amazonereg` WHERE Email='$t1' ";
    $qu = mysqli_query($co,$retv);
    
    while($rows= mysqli_fetch_assoc($qu))
    {
        $tt1= $rows["PASSWORD"];
    }
    if($t2==$tt1)
    {
        header("location:amazonewallet4.php");
    } 
 else 
     {
        header("location:amazonelogin3.php");                         
     }
    
}


?>