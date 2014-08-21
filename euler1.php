<?php
$var = 0;
$sum = 0;
$a = array();

 //loop through 1 to 100 and find the multiples of 3 and 5
 //using modulus. If a number has no remainder it is a multiple.
  for($x = 0;$x < 999; $x++){
    $var = $var + 1;
    $test = $var % 3;
    $test2 = $var % 5;

     //test for multiples of 3. if found push it into array
    if($test == 0){
        $a[$x] = $var;

    }

    //test for multiples of 5. if found push it into array
    if($test2 == 0){
        $a[$x] = $var;
  }



  }
  //add the elements of the array and print
  $sum = array_sum($a);
  echo($sum);
?>
