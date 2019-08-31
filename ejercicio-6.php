<?php
/*Tendremos 3 variables: edad (un número),
casado (un booleano) y sexo
(string que puede ser “Masculino”, “Femenino” u “Otro”).
Si la persona es mayor a 18 años y no está casado
se imprimirá el mensaje “Bienvenido”.

a. Modificaremos al ejercicio anterior para que
también imprima bienvenido si el sexo es “Otro” sin
importar el resto de las condiciones.*/

$edad = 22;
$casado = False;
$sexo = "Femenino";

if ($sexo != "Masculino" || $sexo != "Femenino" || $sexo != "Otro") {
  echo "El valor ingresado es inválido";
}

if ($edad >= 18 && $casado == False) {
  echo "Bienvenido!";
}


 ?>
