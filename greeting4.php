<html>
    <body>
        <center>
            <form action="#" method="post"  enctype="multipart/form-data">
             <input type="file" name="f1"  ><br><br>
            <input type="submit" name="s1">
            </form>
        </center>   
    </body>    
</html>



<?php
if(isset($_POST['s1']))
{
   $destination="http://localhost/phpproject2/mydomain/songs/";
   
   move_uploaded_file($_FILES["f1"]["tmp_name"] ,$destination.$_FILES["f1"]["name"]);
    
   //$f1 = $_FILES['f1'];
   
  }    



?>