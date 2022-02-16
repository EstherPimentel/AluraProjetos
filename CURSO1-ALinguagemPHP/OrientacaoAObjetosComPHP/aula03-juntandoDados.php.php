<?php

require_once 'aula03-juntandoDados.php'; // Usa-se INCLUDE para chamar o código de outro arquivo. Porem se houver erro o PHP não diz qual é. Para saber o erro usa-se REQUIRE para chamar o código de outro arquivo. Já REQUIRE_ONCE impede que dê erro se chamar mais de uma vez o mesmo arquivo.

/*ARRAY ASSOCIATIVO */
$contasCorrentes = [
    '123.456.789.10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],

    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],

    '123.456.789.12' => [
        'titular' => 'Pedro',
        'saldo' => 500
    ]
];