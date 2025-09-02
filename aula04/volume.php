<?php
if ($_POST) {
    $volume = $_POST['comprimento'] * $_POST['largura'] * $_POST['altura'];
    echo number_format($volume, 2);
}
?>

<form method="post">
    Comprimento: <input type="number" step="0.1" name="comprimento" required><br>
    Largura: <input type="number" step="0.1" name="largura" required><br>
    Altura: <input type="number" step="0.1" name="altura" required><br>
    <input type="submit" value="Calcular">
</form>