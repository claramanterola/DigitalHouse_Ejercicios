<?php
/*
Definir un array con 10 números aleatorios entre 0 y 10.
Recorrer este array para imprimir todos los números.
La ejecución debe terminarse si alguno de los números encontrados
es un 5 (Se debe imprimir “Se encontró un 5!”)
*/
$num = [];
for ($i = 0; $i < 10 ; $i++) {
  $newNum = rand(0, 10);
  if ($newNum == 5) {
    continue;
  }else {
    $num[] = $newNum;
  }
}
var_dump($num);

 ?>
