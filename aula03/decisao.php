<?php
$x = 3;
$y = 2;
$media = ($x + $y) / 2;
//media >= 6,0 = 'APROVADO'
//media < 6,0 && >= 4,0
//media = 'RECUPERAÇÃO'
//media < 4,0 = 'REPROVADO'

if ($media >= 6.0) {
    echo 'ALUNO APROADO';
} else if ($media >= 4.0) {
    echo 'ALUNO DE RECUPERAÇÃO';
} else {
    echo 'ALUNO REPROVADO';
}
?>