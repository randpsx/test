<?php
 $var = 0;

 //loop through 1 to 100 and find the multiples of 3 and 5
 //using modulus. If a number has no remainder it is a multiple.
 for($x = 0;$x < 100; $x++){
    $var = $var + 1;
    $test = $var % 3;
    $test2 = $var % 5;

    //test for multiple of 3. if found print fizz
    if($test == 0)
        echo("fizz"."<br/>");

    //test for multiple of 5. if found print buzz
    if($test2 == 0)
        echo("buzz"."<br/>");

    //test for both multiple of 3 and 5. if found print fizzbuzz
    if($test == 0 && $test2 ==0)
        echo("fizzbuzz"."<br/>");

    //test for a number not a multiple of 3 or 5. print the number
    if($test != 0 && $test2 !=0)
        echo($var."<br/>");

 }

?>
