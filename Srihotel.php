<?php
session_start();
$u1=$_REQUEST['u'];
if($_SESSION["email"]=="")
{
    header("location:hotellogin.php");
}  
 else 
     {
            echo'Please Select your Items   '.$_SESSION["email"]=$u1;    
    }

?>


<html>
    <style>    


        .checkB{
            text-aligh:left;

        }
        .all{
            text-align: right;
            text-align: top;
        }
    </style>



    <body>
        <h2></h2>   
        <form action="sribill.php" method="post">
            Veg<br><br>


            <input type="checkbox" name="cb1[]"  value="Biryani">Biryani--150
            <input type="text" name="t1" style="width: 20px; padding: 2px; border: 1px solid black">
            <input type="checkbox" name="cb1[]"  value="Fried Rice">Fried Rice--150
            <input type="text" name="t2" style="width: 20px; padding: 2px; border: 1px solid black">
            <input type="checkbox" name="cb1[]"  value="Plate Meals">Plate Meals--150
            <input type="text" name="t3" style="width: 20px; padding: 2px; border: 1px solid black">    
            <input type="checkbox" name="cb1[]"  value="Full Meals">Full Meals--150
            <input type="text" name="t4" style="width: 20px; padding: 2px; border: 1px solid black"> <br><br>   
            Juices<br><br>
            <input type="checkbox" name="cb1[]"  value="Grape Juice">Grape Juice--20
            <input type="text" name="t5" style="width: 20px; padding: 2px; border: 1px solid black">
            <input type="checkbox" name="cb1[]"  value="Musambi">Musambi--20   
            <input type="text" name="t6" style="width: 20px; padding: 2px; border: 1px solid black">   
            <input type="checkbox" name="cb1[]"  value="Promogenet">Promogenet--20
            <input type="text" name="t7" style="width: 20px; padding: 2px; border: 1px solid black">    
            <input type="checkbox" name="cb1[]"  value="Orange Juice">Orange Juice--20
            <input type="text" name="t8" style="width: 20px; padding: 2px; border: 1px solid black">
            <br><br>
            Deserts<br><br>        
            <input type="checkbox" name="cb1[]"  value="Choclate">Choclate--50
            <input type="text" name="t9" style="width: 20px; padding: 2px; border: 1px solid black">   
            <input type="checkbox" name="cb1[]"  value="Chochips">Chochips--50
            <input type="text" name="t10" style="width: 20px; padding: 2px; border: 1px solid black">   
            <input type="checkbox" name="cb1[]"  value="Strawberry">Strawberry--50
            <input type="text" name="t11" style="width: 20px; padding: 2px; border: 1px solid black">   
            <input type="checkbox" name="cb1[]"  value="Black Current">Black Current--50
            <input type="text" name="t12" style="width: 20px; padding: 2px; border: 1px solid black">   
            <br><br>

            <div class="checkB">

                Non-Veg<br><br> 
                <input type="checkbox" name="cb1[]"  value="Chicken Biryani">Chicken Biryani--200
                <input type="text" name="t13" style="width: 20px; padding: 2px; border: 1px solid black">   
                <input type="checkbox" name="cb1[]"  value="Chicken Fried Rice">Chicken Fried Rice--200
                <input type="text" name="t14" style="width: 20px; padding: 2px; border: 1px solid black">   
                <input type="checkbox" name="cb1[]"  value="Dum Biryani">Dum Biryani--200
                <input type="text" name="t15" style="width: 20px; padding: 2px; border: 1px solid black">   
                <input type="checkbox" name="cb1[]"  value="Mugalai">Mugalai--200
                <input type="text" name="t16" style="width: 20px; padding: 2px; border: 1px solid black"><br><br>
                <input type="submit" value="Pay Amount" name="s">
            </div>

            

         



        </form>
    </body>    
</html> 



    
    
