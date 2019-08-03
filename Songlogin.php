<html>
<head>
    <title>Songs Retrive Page</title>        
</head>
<body>
    <form method="get" action="#">
    <input type="text" name="t5" value="E-mail" onclick="this.value='' "><br><br>
    <input type="password" name="t6" value="Password" onclick="this.value=''"><br><br>
    <input type="submit" name="submit" value="Login" ><br><br>
    </form>
</body>
</html>



<?php
if(isset($_GET['submit']))
{    
$s = $_GET['t5'];
$r= $_GET['t6'];

$i = 'abc';
$n = '123';

if($s==$i && $r==$n)
{
    header("location:Songretrive.php");
}
 else 
{
    header("location:Error.html");
}
}





?>