<?php
  $digit1 = 100;
  $digit2 = 100;
  $product =0;
  $str = "";
  $reverse = "";
  $big = 0;

  for($x = 0; $x <= 899; $x++){
      for($y = 0; $y <= 899; $y++){
       $product = $digit1 * $digit2;
       //echo($digit1." * ".$digit2. " = ".$product."<br/>");
       $str = (string)$product;
       $reverse = strrev($str);

       if($str == $reverse){
            if($product > $big){
               $big = $product;
            }


       }
       $digit2++;
      }
        $digit1++;
        $digit2 = 100;

  }
 echo($big);
?>
