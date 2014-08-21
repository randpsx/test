<?php
$start = 0;
$end = 0;


  function leap_year($start, $end){
          $bool = false;

      for($x = $start; $x <= $end; $x++){
          if($x % 4 == 0 && $x % 100 !=0){
              $bool = true;
          }
          else if($x % 400 ==0){
                $bool = true;
          }

          if($bool == true){
              echo($x ." is a leap year!<br/>");
          }
          $bool = false;
  }

  }
  leap_year(23, 2056);
?>
