<div class="titulo">Atribuições</div>

<?php
$numero = 10;
echo '<br>' . $numero;
$numero--;
echo '<br>' . $numero;
$numero++;
echo '<br>' . $numero;
--$numero;
echo '<br>' . $numero;
$numero = $numero - 3;
echo '<br>' . $numero;
$numero = 20;
echo '<br>' . $numero;
$numero -= 6;
echo '<br>' . $numero;
$numero += 8;
echo '<br>' . $numero;
$numero *= 2;
echo '<br>' . $numero;
$numero /= 4;
echo '<br>' . $numero;
$numero **= 3;
echo '<br>' . $numero;
$numero .= 8; //concatenação
echo '<br>' . $numero;

$texto = 'Esse é um texto';
echo '<br>' . $texto;

$texto = $texto . ' qualquer';
echo '<br>' . $texto;

$texto .= ' de verdade!';
echo '<br>' . $texto;

//$valor = 'valor inexistente';
echo '<br>' . $valor;
$valores = $valor ?? 'valor default';
echo '<br>' . $valores;

//$valor = 'valor inexistente';
echo '<br>' . $valor;
$valores = $valor ?? 'valor default';
echo '<br>' . $valores;

?>