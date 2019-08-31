<?php

$num = 0;
$num = rand(1,100);

if (
	$num > 50
	)

echo "El numero es mayor a 50";

else if ($num < 50) {
	echo "El numero es menor a 50 <br />";
}

else {
	echo "El numero es igual a 50 <br />";
}

echo "El numero es $num";

?>
