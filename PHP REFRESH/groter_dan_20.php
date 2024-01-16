<?php

$telGroteGetallen = [11,11,5,2,12,6,7,8,1,10,9];

function getalen($array) {
    $getalen = 0;
    foreach ($array as $cijfer) {
      if ($cijfer > 10) {
        $getalen = $getalen + $cijfer;
      }
    }
    return $getalen;
  }
  echo "<pre>";
  print_r( getalen([10,20,20]) ); 
  echo "<br>";
  print_r( getalen([9,10,11]) ); 
  echo "<br>";
  print_r( getalen($telGroteGetallen ) ); 
  
  
?>


