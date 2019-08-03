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

$d=$_POST['da'];
$con= mysqli_connect("localhost","root","","db4");
$ret= "select * from songsdata where date='$d' ";
$que = mysqli_query($con,$ret);

while($row = mysqli_fetch_assoc($que))
 {
          echo 'Card Number' .  '<input type= "text" value='.$row["CardNumber"].'>'."<br>"."<br>";
          echo 'CVV            '.    '<input type = "text" value='.$row["CVV"].'>'."<br>"."<br>";
          echo 'Expire Date         '.    '<input type = "text" value='.$row["ExpireDate"].'>'."<br>"."<br>";
          echo 'Cardholdername   '.     '<input type = "text" value='.$row["Cardholdername"].'>'."<br>"."<br>";
          echo 'Song   '.        '<input type= "text" value='.$row["Song"].'>'."<br>"."<br>";
          echo 'date      '.                        '<input type= "text" value='.$row["date"].'>'."<br>"."<br>";
 }



}


?>