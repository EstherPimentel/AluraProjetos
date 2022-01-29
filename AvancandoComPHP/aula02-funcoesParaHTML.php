<?php

/* FUNÇÕES: SACAR, DEPOSITAR E MENSAGEM */
function sacar(array $conta, float $valorASacar): array 
{
    if($valorASacar <= $conta['saldo']) {
        $conta['saldo'] -=$valorASacar;
    } else {
        exibeMensagem("Você não pode sacar");
    }

    return $conta;
}


/* float é para avisar que os valores passados precisam ser numéricos */
function depositar(array $conta, float $valorADepositar): array 
{
    if($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    
    return $conta;
}


function exibeMensagem(string $mensagem) 
{
    echo $mensagem . '<br>';
}


function letrasMaius(array &$conta) // & significa que você não quer a cópida da variável e sim a variável mesmo. Isso se chama REFERÊNCIA, mas não é tão seguro usar. 
{
    $conta['titular'] = mb_strtoupper($conta['titular']); // mb_strtoupper deixa texto em caixa alta.
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}