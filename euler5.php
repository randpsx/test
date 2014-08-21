<?php

  $num = 232000000;
  $test = false;
  $a = array();

  for($x = 1; $x < 1000000; $x++){

      for($y = 1; $y < 21; $y++){

            if(($num % $y) == 0){
                $test = true;

                if($test == true){
                    $a[$y] = $num;

                    if(count($a) == 20){
                        echo($num."<br/>");
                    }

                }
                //echo($num."<br/>");
            }

        }
        unset($a);
        $a = array();
        $num++;
  }

?>
