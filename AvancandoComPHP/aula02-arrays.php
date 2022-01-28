<?php

/*Array com números */
$idadeList = [21, 23, 19, 25, 30, 41,18];

for($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

/* array com string */
$nomes = array("João","Maria","Pedro","Ana");

for($i=0; $i<count($nomes); $i++){
    echo $nomes[$i].PHP_EOL;
}