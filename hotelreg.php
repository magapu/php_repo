<html>
<body>
    <form action="#" method="post">
        <input type="text" name="t1" value="First Name" onclick="this.value=' ' "><br><br>
        <input type="text" name="t2" value="Last Name" onclick="this.value=' ' "><br><br>
        <input type="text" name="t3" value="E-Mail" onclick="this.value=' ' "><br><br>
        <input type="password" name="t4" value="Password" onclick="this.value=' ' "><br><br>
        
        Gender<br><br>
    <input type="radio" value="Male" name="r1">Male
    <input type="radio" value="Female" name="r1">Female<br><br>
    <input type="text" name="t5" value="Phone Number" onclick="this.value=' ' "><br><br>
    <input type="submit" name="s1" value="Register"><br><br>
    </form>
    <a href="hotellogin.php">Login Here</a>
    
</body>    
</html>





<?php

if(isset($_POST['s1']))
{
    $fname = $_POST['t1'];
    $lname = $_POST['t2'];
    $Email = $_POST['t3'];
    $password = $_POST['t4'];
    $gender = $_POST['r1'];
    $phone = $_POST['t5'];
    
    
    $conn = mysqli_connect("localhost","root","","db5");
    $insert = "insert into foodreg values('$fname','$lname','$Email','$password','$gender','$phone')";
    $que = mysqli_query($conn, $insert);
    
    echo 'You Can login now';
}    


?>
