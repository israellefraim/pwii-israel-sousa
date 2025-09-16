<?php
   echo "Vamos calcular o seu consumo médio, ";
   $distancia = $_POST["distancia"];
   $quantidade = $_POST["quantidade"];
   $consumo = ($distancia / $quantidade);

   echo "O seu consumo médio é: $consumo <br>";

?>
