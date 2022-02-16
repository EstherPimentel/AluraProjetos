<?php

//UNSET é usado para remover um item da lista. Aqui foi removido a conta3.

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
$contasCorrentes['conta3'] = sacar($contasCorrentes['conta3'], 500);
$contasCorrentes['conta1'] = depositar($contasCorrentes['conta1'], 900);

unset ($contasCorrentes['conta3']); //remover a conta3.

foreach ($contasCorrentes as $i => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$i $titular $saldo"); 
}
