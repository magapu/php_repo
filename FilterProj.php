<html>
    <body>
        <form action="#" method="get">
            <input type="text" name="t1" value="E-Mail" onclick="this.value =' ' " ><BR><BR> 
            <input type="text" name="t2" value="Integer" onclick="this.value=' ' "><BR><BR>
            <input type="submit" value="submit" name="s">
        </form>        
    </body>    
</html>

<?php
   
if(isset($_GET['s'])) 
 {
    
    $t1 = $_GET['t1'];
    $t2 = $_GET['t2'];
    
   if(filter_var($t1,FILTER_VALIDATE_EMAIL)==FALSE)
     {
        echo 'Please enter valid mail address';   
        echo '<br>';
     }
   if(filter_var($t2,FILTER_VALIDATE_INT)==FALSE)
   {
       echo 'PLease Enter Int only';
   }
   
 }
 
    ?>
<?php

$obj->setItems($_POST['cb1']);



?>