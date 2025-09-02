<?php
if ($_POST) {
    $total = $_POST['valor'] * 1.16;
    echo "Total: R$ " . number_format($total, 2) . "<br>";
    echo "10x de R$ " . number_format($total / 10, 2);
}
?>

<form method="post">
    Valor: <input type="number" step="0.01" name="valor" required><br>
    <input type="submit" value="Calcular">
</form>