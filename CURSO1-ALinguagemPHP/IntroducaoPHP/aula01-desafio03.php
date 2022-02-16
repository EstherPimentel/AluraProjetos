<?php

/* CALCULANDO IMC */

$peso = 49;
$altura = 1.59;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de: $imc.";

if ($imc < 18.5) {
    echo " Está abaixo do recomendado";
} elseif ($imc < 25) {
    echo " Está dentro do recomendado";
} else {
    echo " Está acima do recomendado";
}