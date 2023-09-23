<div class="titulo">If & Else</div>

<?php
if(true){
    echo "Serei Impresso? <br>";
}
if(false){
    echo "Verdadeiro <br>";
} else {
    echo "Falso <br>";
}

if(false){
    echo "Passo A <br>";
} else if (false) {
    echo "Passo B <br>";
} else if (false) {
    echo "Passo C <br>";
} else if (true) {
    echo "Passo D <br>";
} else {
    echo "Último Passo <br>";
}

echo "Fim <br>";

?>
