<?php
/*
Definir un array con 10 números aleatorios entre 0 y 100.
Recorrer este array contando cuantos números son pares.
*/

$num = [];
$contador = 0;
for ($i = 0; $i < 10 ; $i++) {
  $newNum = rand(0, 100);
	$num[] = $newNum;

  if ($newNum % 2 == 0) {
    $contador++;
  }
 }

echo "Cantidad de numeros pares " . $contador . "<br>";
var_dump($num);

 ?>
