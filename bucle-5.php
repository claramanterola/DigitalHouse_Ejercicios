<?php
/*
Definir un array con 5 strings que sean nombres.
Recorrer este array para imprimir cada uno de los nombres en pantalla.
Resolver este problema con un for.
Resolver este problema con while.
Resolver este problema con un do/while.
Resolver este problema con un foreach.
*/

$nombres = [
  "nombre" => ["Lucas", "Laura", "Jose", "Lucia", "Clara"]
];

var_dump($nombres);

//----------UTILIZANDO FOREACH-----------//
foreach ($nombres as $valor) {
  var_dump($nombres);
}

//----------UTILIZANDO FOR-----------//
for ($i=0; $i < count($nombres); $i++) {
  var_dump($nombres);
}

//----------UTILIZANDO WHILE-----------//
while ($i <= count($nombres)) {
  var_dump($nombres);
  $i++;
}

//----------UTILIZANDO DO EACH-----------//
do {
  var_dump($nombres);
  $i++;
} while ($i <= count($nombres));


 ?>
