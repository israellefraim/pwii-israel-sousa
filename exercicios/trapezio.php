<?php
   echo "Vamos calcular a área do trapezio, ";
   $maior = $_POST["maior"];
   $menor = $_POST["menor"];
   $altura = $_POST["altura"];
   $area = (($maior + $menor * $altura) / 2);

   echo "A área é: $area <br>";

?>

