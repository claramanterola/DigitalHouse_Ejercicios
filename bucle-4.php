<?php
/*
Utilizando un while haremos un programa que tire una moneda
(seleccionará un número al azar que puede ser 0 o 1) hasta que
saque 5 veces cara (el número 1). Al terminar, debe imprimir cuántos
tiros de monedas llevó obtener 5 veces cara.
*/
$contador = 0;
$i = 0;
$moneda = rand(0, 1);
while ($moneda = 1) {
  $contador = $contador + 1;
  $i++;
    if ($contador == 5) {
      echo "Felicitaciones! Sacaste $contador veces cara<br>";
      echo "Tiraste $i<br>";
    break;    }
}

 ?>
