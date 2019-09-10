<?php
  include_once ("funciones.php");
  include_once ("superficie.php");

  function circuloMayor($ratio1, $ratio2, $ratio3){
    circulo($ratio1);
    circulo($ratio2);
    circulo($ratio3);

    mayor();
  }

  circuloMayor(1,2,3);
 ?>
