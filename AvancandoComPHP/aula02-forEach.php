<?php
/* $contasCorrentes [indice 0[indice0=>vinicius, indice1=>1000], indice 1[indice0=>Maria, indice1=>10000], indice 2[indice0=>Pedro, indice1=>500]]; */
$contasCorrentes = [
    conta1 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],

    conta2 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],

    conta3 => [
        'titular' => 'Pedro',
        'saldo' => 500
    ]
];

/* ADICIONANDO UMA CONTA NOVA À LISTA JÁ PRONTA */
$contasCorrentes[conta4] = ['titular' => 'Claudia', 'saldo' => 2000];
/* $contasCorrentes = [$conta1, $conta2, $conta3];  isso é igual a: 0 =>$conta1, 1=>$conta2, 2=>$conta3 */

foreach ($contasCorrentes as $i => $conta) {
    echo $i . " " . $conta ['titular'] . PHP_EOL;
}


/*EXERCICIO COM CARROS */
$carros = [
    'LMS-2232' => [
       'marca' => 'VW',
       'modelo' => 'Golf'
    ],
    'KLM-1324' => [
        'marca' => 'Ford',
        'modelo' => 'Fiesta'
    ],
    'OPN-5612' => [
        'marca' => 'Fiat',
        'modelo' => 'Uno'
    ],
];

foreach ($carros as $placa => $carro) {
    echo $placa . ': ' . $carro['marca'] . PHP_EOL;
}