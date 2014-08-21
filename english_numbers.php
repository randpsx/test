<?php

  $convert = array("zero", "one", "two", "three", "four", "five", "six", "seven",
                   "eight", "nine", "ten", "eleven", "twelve", "thirteen",
                   "fourteen", "fifteen", "sixteen", "seventeen", "eighteen",
                   "nineteen", "twenty", 30 =>"thirty", 40 => "forty",
                   50 => "fifty",  60 => "sixty",  70 => "seventy", 80 => "eighty",
                   90 => "ninety");

  function english_numbers($num){
      global $convert;
      $str = '';

      // 0 to 20
      if($num <= 20){
          $str = $convert[$num];
      }

      // 21 to 99
      else if($num < 100) {
         $str = $convert[10 * floor($num/10)];
         $r = fmod($num, 10);
         if($r > 0)
           $str .= '-'. $convert[$r];
      }

      // 100 to 999
      else if($num < 1000){
          $str = $convert[floor($num/100)]. " hundred ";
          $r = fmod($num, 100);
            if($r > 0)
                $str .= english_numbers($r);
      }

      // 1,000 to 999,999
      else if($num < 1000000){
          $str = english_numbers(floor($num/1000)). ' thousand ';
          $r = fmod($num, 1000);
            if($r > 0)
               $str .= english_numbers($r);
      }

      // 1,000,000 to 999,000,000
      else if($num < 1000000000){
          $str = english_numbers(floor($num/1000000)). " million ";
           $r = fmod($num, 1000000);
           if($r > 0)
               $str .= english_numbers($r);
      }



   return $str;
  }




  echo("Your number is: " . english_numbers(3475678));
?>
