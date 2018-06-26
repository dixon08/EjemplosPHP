<?php

#condiciones
$a = 5 ;
$b = 10;
if ($a > $b) {
  echo "a es mayor que b";
}

else if ($a == $b) {

  echo "a es igual que b";
}
else {
  echo "a es menor que b";
}
echo "<br><br><br>";
#suiches
$dia = "sabado";
switch ($dia) {
  case 'sabado':
   echo "voy a estudiar php";
    break;
  case 'viernes':
     echo "voy a la fiesta";
    break;
  case 'domingo':
     echo "voy a descansar";
    break;
  default:
    echo "voy a la universidad";
    break;
}
echo "<br><br><br>";
#CICLO WHILE
$n = 1;

while ($n < 5) {
  echo $n;
  $n++;
}
echo "<br><br><br>";
#CICLO DO WHILE
$p = 1;
do{
  echo $p;
  $p++;
}while ($p <= 5);
echo "<br><br><br>";
#CICLO FOR

for ($i=1; $i < 5 ; $i++) {
  echo $i ;
}
 ?>
