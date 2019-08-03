<html>
    <body>
        <form action="#" method="get">
            <center>
           E-Mail &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ta"  ><br><br>
           Password&nbsp;<input type="password" name="pa" ><br><br>
            <input type="submit" name="sub">
            </center>
        </form>
    </body>    
</html>






<?php



if(isset($_GET["sub"]))
{
    
    $c =  $_GET['ta'];
    $d= $_GET['pa'];
    $a ='abc';
    $b = '123';
    
    if($a==$c && $b==$d )
    {
        header("location:hotelretv.php");
    }  
    else
    {
        header("location:Error_1.html");
    }   
}    


?>
