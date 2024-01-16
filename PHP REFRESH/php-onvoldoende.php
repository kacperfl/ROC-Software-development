<?php

$PHPCijfers=[4,5,4,5,6,6,5,8,7,6,4,8];

function onvoldoendes($array) {
  $onvoldoendes = array();
  foreach ($array as $cijfer) {
    if ($cijfer < 6) {
      array_push($onvoldoendes, $cijfer);
    }
  }
  return $onvoldoendes;
}

echo "<pre>";
print_r( onvoldoendes([6,6,7]) ); // geen onvoldoendes
print_r( onvoldoendes([6,3,6,7]) ); //  3
print_r( onvoldoendes($PHPCijfers) ); //4,5,4,5,5,4


?>