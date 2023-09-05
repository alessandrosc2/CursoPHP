<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma String';
echo'<br>';
var_dump("Eu também sou uma string");
echo'<br>';

// concatenação

echo "Nós também" . ' somos';
echo'<br>', "Também aceito", ' vírgulas';
echo'<br>';
echo "'Teste' " . ' "teste" ' . ' \'teste\' ' . " \\ ";
echo'<br>';
// método "print" a mesma função do echo...

print ("Também existe a função 'print'");
echo'<br>';
print "Também existe a função 'print'";

// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Eu também", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');

?>