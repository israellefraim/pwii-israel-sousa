<?php
if ($_POST) {
    $area = ($_POST['base1'] + $_POST['base2']) / 2 * $_POST['altura'];
    echo number_format($area, 2);
}
?>

<form method="post">
    Base maior: <input type="number" step="0.1" name="base1" required><br>
    Base menor: <input type="number" step="0.1" name="base2" required><br>
    Altura: <input type="number" step="0.1" name="altura" required><br>
    <input type="submit" value="Calcular">
</form>