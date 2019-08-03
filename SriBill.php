<?php
session_start();

echo'Your Bill   '.$_SESSION['email'].'<br><br>';
$a=array();  


    for($i=0;$i<=16;$i++)
{
    $a[$i] =0;
}
    $itemnames = $_POST["cb1"];
    
    $t1 = $_POST["t1"];
    $t2 = $_POST["t2"];
    $t3 = $_POST["t3"];
    $t4 = $_POST["t4"];
    $t5 = $_POST["t7"];
    $t6 = $_POST["t8"];
    $t7 = $_POST["t7"];
    $t8 = $_POST["t8"];
    $t9 = $_POST["t9"];
    $t10 = $_POST["t10"];
    $t11 = $_POST["t11"];
    $t12 = $_POST["t12"];
    $t13 = $_POST["t13"];
    $t14 = $_POST["t14"];
    $t15 = $_POST["t15"];
    $t16 = $_POST["t16"];
    
    
    if($t1>0)
    {
        global $tt1;
        $tt1 = $t1*150;
        echo 'Biryani--'.$t1.'--'.($tt1);
        $a[0]=$tt1;
        
        echo '<br>';
    }
    if($t2>0)
    {
        global $tt2;
        $tt2=$t2*150;        
        echo 'Fried Rice--'.$t2.'--'.$tt2;
        $a[1]=$tt2;
        echo '<br>';
    }   
      if($t3>0)
    {
         global $tt3;
        $tt3=$t3*150;        
        echo 'Plate Meals--'.$t3.'--'.$tt3;
        $a[2]=$tt3;
        echo '<br>';
    }
    if($t4>0)
    {
        global $tt4;
        $tt4=$t4*150;        
        echo 'Full Meals--'.$t4.'--'.$tt4;
        $a[3]=$tt4;
        echo '<br>';
    }  
      if($t5>0)
    {
          global $tt5;
          $tt5 = $t5*20;
          echo 'Grape Juice--'.$t5.'--'.$tt5;
          $a[4]=$tt5;
           echo '<br>';
    }
    if($t6>0)
    {
        global  $tt6;
        $tt6 =  $t6*20;
        echo 'Musambi--'.$t6.'--'.$tt6;
        $a[5]=$tt6;
        echo '<br>';
    }  
      if($t7>0)
    {
        global  $tt7;
        $tt7 =  $t7*20;
        echo 'Promogenet--'.$t7.'--'.$tt7;
        $a[6]=$tt7;
        
        echo '<br>';
    }
    if($t8>0)
    {
        global $tt8;
        $tt8 = $t8*20;
        echo 'Orange Juice--'.$t8.'--'.$tt8;
        $a[7]=$tt8;
        echo '<br>';
    }  
      if($t9>0)
    {
       global $tt9;
       $tt9= $t9*50;
       echo 'Choclate--'.$t9.'--'.$tt9;
       $a[8]=$tt9;
        echo '<br>';
    }
    if($t10>0)
    {
        global $tt10;
        $tt10 = $t10*50;
        echo 'Chocochips--'.$t10.'--'.$tt10;
        $a[9]=$tt10;
        echo '<br>';
    }  
      if($t11>0)
    {
          global $tt11;
          $tt11 =  $t11*50;
          echo 'StrawBerry--'.$t11.'--'.$tt11;
          $a[10]=$tt11;
           echo '<br>';
    }
    if($t12>0)
    {
        global $tt12;
        $tt12 = $t12*50;
        echo 'Blcak Current--'.$t12.'--'.$tt12;
        $a[11]=$tt12;
        echo '<br>';
    }  
      if($t13>0)
    {
          global $tt13;
          $tt13 = $t13*200;
          echo 'Chicken Biryani--'.$t13.'--'.$tt13;
          $a[12]=$tt13;
          echo '<br>';
    }
    if($t14>0)
    {
        global $tt14;
        $tt14=$t14*200;
        echo 'Chicken Fried Rice--'.$t14.'--'.$tt14;
        $a[13]=$tt14;
        echo '<br>';
    }  
      if($t15>0)
    {
          global $tt15;
          $tt15=$t15*200;
          echo 'Dum Biryani--'.$t15.'--'.$tt15;
          $a[14]=$tt15;
        echo '<br>';
    }
    if($t16>0)
    {
        global $tt16;
        $tt16 = $t16*200;
        echo 'Mugalai--'.$t16.'--'.$tt16;
        $a[15]=$tt16;
        echo '<br>';
        echo '<br>';
    } 

$total= 0;

foreach ($a as $t)
{
    $total+=$t;
    
}    
echo 'Total Bill--'.$total."<br>";    

$string = implode(",", $itemnames);
$tot = implode(",", $a);

//echo $string;

echo '<button><a href="SriBillpayment.php?s='.$string.'&t='.$total.'">Pay</a></button>';
?>
 


        

 





















