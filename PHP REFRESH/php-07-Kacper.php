<?php
// functie genaamt begroeting
function begroeting($naam) {

    //  huidige uur 
    $uur = date('H'); 
  
    if ($uur < 12) {
      $text = "Goedemorgen";
    } 
    elseif ($uur < 18) {
      $text = "Goedemiddag";
    }
     else {
        
      $text = "Goedenavond";
    }
  
    return $text . ", " . $naam;
  }
  
  echo begroeting("Vasco");

  echo "<br>";

  echo begroeting("Jesse");

?>