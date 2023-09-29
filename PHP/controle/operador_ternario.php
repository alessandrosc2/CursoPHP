<div class="titulo">Operador Ternário</div>

<?php

$idade = 70;
$status;

if ($idade >= 18){
    $status = 'Maior de Idade';
} else {
    $status = 'Menor de Idade';
}
echo "$status<br>";

?>