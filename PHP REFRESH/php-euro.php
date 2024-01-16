<?php
function netEuro($bedrag) {
    return "€ " . number_format(round($bedrag, 2), 2, ',', '.');
  }
//   if()

  echo netEuro(12); 
  echo "<br>";
  echo netEuro(12.50); 
  echo "<br>";
  echo netEuro(12.6666); 
  echo "<br>";
  
    
?>