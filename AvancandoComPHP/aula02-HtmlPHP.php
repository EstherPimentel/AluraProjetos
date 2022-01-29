<?php

//UNSET é usado para remover um item da lista. Aqui foi removido a conta3.

require_once 'aula02-funcoesParaHTML.php'; // Usa-se INCLUDE para chamar o código de outro arquivo. Porem se houver erro o PHP não diz qual é. Para saber o erro usa-se REQUIRE para chamar o código de outro arquivo. Já REQUIRE_ONCE impede que dê erro se chamar mais de uma vez o mesmo arquivo.

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

/* echo "<ul>";
foreach ($contasCorrentes as $i => $conta) {
    exibeConta($conta);
}
echo "</ul>"; */ //TEXTO COMENTADO PARA NÃO APARECER NO NAVEGADOR

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
    <?php foreach($contasCorrentes as $i => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $i; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>