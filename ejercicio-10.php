<?php 

/*
9. Crear una variable $nota con un valor del 0 al 10. 
Utilizando un switch generar la siguiente lógica:

Si la nota es menor a 4 imprimir “desaprobado”
Si la nota es 4 o 5 imprimir “zafamos”
Si la nota este entre 6 y 8 imprimir “Bien!!!”
Si la nota es un 9 imprimir “MUY bien!!”
Si la nota es un 10 imprimir “Excelente!!!!!”
*/

$nota = -2;

if ($nota < 0) {
	echo "La nota ingresada deber ser positiva";
} else {

switch ($nota) {

	case 1 || 2 || 3:
		echo "Desaprobado";
		break;

	case 4 || 5:
		echo "Zafamos";
		break;

	case 6 || 7 || 8:
		echo "Bien!!!";
		break;

	case 9:
		echo "MUY bien!!";
		break;

	case 10:
		echo "Excelente!!!";
		break;
	
	default:
		echo "El numero ingresado es inválido";
		break;

		}

}

 ?>