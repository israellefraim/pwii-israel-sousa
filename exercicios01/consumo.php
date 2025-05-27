<?php
if ($_POST) {
    $consumo = $_POST['km'] / $_POST['litros'];
    echo number_format($consumo, 2) . " km/l";
}
?>

<form method="post">
    Km: <input type="number" step="0.1" name="km" required><br>
    Litros: <input type="number" step="0.1" name="litros" required><br>
    <input type="submit" value="Calcular">
</form>