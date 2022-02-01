<?php

class Conta
{//definir dados da conta. Essa é a forma do bolo.
    public string $cpfTitular; 
    public string $nomeTitular;
    public float $saldo = 0; 

    public function sacar(float $valorASacar): void 
    {
        if($valorASacar > $this->saldo) {
            echo "valor indisponível";
            return;
        } 
        $this->saldo -= $valorASacar;
    }
    
    public function depositar(float $valorADepositar): void 
    {
        if ($valorADepositar < 0) {
            echo "valor precisa ser positivo";
            return;
        } 
        $this->saldo += $valorADepositar;
    }
    
    public function transferir(float $valorATransferir, Conta $contaDestino): void 
    {
        if($valorATransferir > $this->saldo) {
            echo "saldo indisponível";
            return;
        } 
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
        
    }
}