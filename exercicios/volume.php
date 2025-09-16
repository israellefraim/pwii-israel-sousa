<?php
   echo "Vamos calcular o seu volume, ";
   $comprimento = $_POST["comprimento"];
   $largura = $_POST["largura"];
   $altura = $_POST["altura"];
   $volume = ($comprimento * $largura * $altura);

   echo "O seu volume é: $volume <br>";

?>
