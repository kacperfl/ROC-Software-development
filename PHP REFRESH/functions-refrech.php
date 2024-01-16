<?php

function netEuro($getal) {
  $uitkomst = $getal * 3 ;
  return $uitkomst;
}

echo  netEuro(4) . ".00€";
echo "<br>";
echo  netEuro(4.16). "€";
echo "<br>";

echo  netEuro (4.22222). "€";
?>