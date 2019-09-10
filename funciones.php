<?php

function mayor($num1, $num2, $num3 = "100") {
  if ($num1 > $num2) {
    $may = $num1;
  } elseif ($num2 > $num3) {
      $may = $num2;
  } else {
      $may = $num3;
    }
  return $may;
  }
mayor(2, 5);

function tabla($base, $lim = "100") {
    for ($i = $base; $i <= $lim; $i++) {
      $array[] = $i;
    }
    var_dump($array);
}
tabla(2, 22);

 ?>
