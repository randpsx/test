<?php
$previousTerm = 0;
$termBeforePrevious = 1;
$fib = 0;
$sum = 0;

$a = array();
for($x = 0; $x < 1000; $x++){
    $fib = $previousTerm + $termBeforePrevious;
    $termBeforePrevious = $previousTerm;
    $previousTerm = $fib;

    if($fib > 4000000){
        break;
    }

     echo($fib."<br/>");

     if($fib % 2 == 0)
        $a[$x] = $fib;

}

$sum = array_sum($a);
echo("<br/>".$sum);
?>
