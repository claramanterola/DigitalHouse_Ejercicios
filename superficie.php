<?php
  function triangulo ($base, $alt) {
    return ($base * $alt) / 2 . "<br>";
  }
  triangulo (2, 5);

  function rectangulo($base, $alt) {
    return $base * $alt . "<br>";
  }
  rectangulo(1, 2);

  function cuadrado($base, $alt) {
    if ($base != $alt) {
      echo "El ancho y el ancho ingresado deben ser iguales. <br>";
    } else {
      return $base * $alt . "<br>";
    }
  }
  cuadrado(2, 2);

  function circulo($ratio){
    return pi()*($ratio * $ratio) . "<br>";
  }
  circulo(2);

 ?>
