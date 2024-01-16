<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css">

  <title>loops</title>
</head>
<body>
<div class="loop">
<?php

echo "For-loop:  <br>";

for($x=1; $x<=20; $x++)
{
 if($x<  20)
 {
 echo " $x- ";
 }
 else
  {
echo "$x"."";
  }
}

echo "<br>";
echo "<br>";

echo "While-loop:";
echo "<br>";

$x = 1;

do {
  echo " $x- ";
  $x++;
} while ($x <= 19);

if($x<  20){
  echo "$x-";
}
else
{
echo "$x"."";
}


  

 
 
?>



</div>
</body>
</html>