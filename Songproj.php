<html>
<head>
    <title>Payment Page</title>        
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="t1" value="Card Number"onclick="this.value=''"><br><br>
        <input type="text" name="t2" value="CVV" onclick="this.value=''"><br><br>
        <input type="text" name="t3" value="Expire Date"onclick="this.value=''"><br><br>
        <input type="text" name="t4" value="Card holder name"onclick="this.value=''"><br><br>  
    <input type="submit" value="submit" name="sub">
    </form>
     
    
</body>    
</html>


<?php

$Song=$_REQUEST['s'];
$con= mysqli_connect("localhost","root","","db4");

if(isset($_POST["sub"]))
{
        
        $m=$_POST['t1'];
        $s=$_POST['t2'];
        $d=$_POST['t3'];
        $h=$_POST['t4'];
        $n=date("y:m:d");
        
        
        $ins="insert into songsdata values('$m','$s','$d','$h','$Song','$n')";
        $que= mysqli_query($con, $ins);
        
        header("location:Songproj2.php?name=".$Song);
        
            
        
}

?>