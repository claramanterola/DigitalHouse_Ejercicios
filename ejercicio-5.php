<?php

/*Generar dos variables, una $nombreDeUsuario y
$ContraseniaDeUsuario, ambos strings.
Validar que el usuario corresponda a "admin"
y la contraseña a "1234". De ser asi, que imprima
"Bienvenido!", sino, que imprima que hay un error
en el login.

a.Modificar al ejercicio anterior, y agregar los "else"
necesarios para poder identificar si el error esta en
el usuario, la contraseña, o si alguno de los campos
está vacío aún.*/

$nombreDeUsuario = "";
$contraseniaDeUsuario = "";

if (
  $nombreDeUsuario == "admin" && $contraseniaDeUsuario == "1234"
  )
  echo "Bienvenido!";

  else {
    echo "El usuario o contraseña es incorrecto";
  }

 ?>
