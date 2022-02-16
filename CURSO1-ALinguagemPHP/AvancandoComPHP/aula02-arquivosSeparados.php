<?php

require_once 'aula02-funcoes.php'; // Usa-se INCLUDE para chamar o código de outro arquivo. Porem se houver erro o PHP não diz qual é. Para saber o erro usa-se REQUIRE para chamar o código de outro arquivo. Já REQUIRE_ONCE impede que dê erro se chamar mais de uma vez o mesmo arquivo.

/*ARRAY ASSOCIATIVO */
$contasCorrentes = [
    'conta1' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],

    'conta2' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],

    'conta3' => [
        'titular' => 'Pedro',
        'saldo' => 500
    ]
];


/* CHAMANDO OS RESULTADOS */
$contasCorrentes['conta1'] = sacar($contasCorrentes['conta1'], 1000);
$contasCorrentes['conta2'] = sacar($contasCorrentes['conta2'], 500);
$contasCorrentes['conta3'] = sacar($contasCorrentes['conta3'], 600);
$contasCorrentes['conta1'] = depositar($contasCorrentes['conta1'], 900);

// TRÊS FORMAS DE EXIBIR A MENSAGEM, SENDO A ÚLTIMA FORMA A MAIS UTILIZADA
foreach ($contasCorrentes as $i => $conta) {
    exibeMensagem($i . " " . $conta['titular'] . ' ' . $conta['saldo']); //exibir string dessa forma não fica legal. Outros jeitos de fazer são:
}

foreach ($contasCorrentes as $i => $conta) {
    exibeMensagem("$i $conta[titular] $conta[saldo]"); // jeito simples de exibir string
}

foreach ($contasCorrentes as $i => $conta) {
    exibeMensagem("$i {$conta['titular']} {$conta['saldo']}"); // forma mais utilizada
}