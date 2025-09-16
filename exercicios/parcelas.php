<?php
   echo "Vamos calcular o seu produto, ";
   $produto = $_POST["produto"];
   $parcelas = 10;
   $porcentagem = ($produto * 1.16);
   $total = ($produto + $porcentagem);
   $totalparcela = ($total / $parcelas);

   echo "Valor das parcelas é: $totalparcela <br> E o valor total é $total <br>";

?>

