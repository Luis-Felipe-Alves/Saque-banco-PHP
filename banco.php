<?php

$contasCorrentes = [
    
    '12345678910' => [
        "titular" => "Alberto",
        "saldo" => 8000,    
    ],

    '12345678911' => [
        "titular" => "Luis",
        "saldo" => 1000000,
    ],

    '12345678912' => [
        "titular" => "Maria",
        "saldo" => 10000,
    ]
];

$contasCorrentes['12345678913'] = [
    'titular' => 'Claudia',
    'saldo' => 250000
];

$saque = 15000;

//Criando uma função para receber strings como parâmetro e executar quebra de linha:
function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

foreach($contasCorrentes as $cpf => $pessoa){

    if($saque > $pessoa['saldo']){
        
        exibeMensagem(mensagem: "Saldo insuficiente, $pessoa[titular]! Saque de R$ $saque não autorizado.");
        exibeMensagem(mensagem: "Saldo atual: R$ $pessoa[saldo].");
    
    } else if($saque <= $pessoa['saldo']){
        $pessoa['saldo'] = $pessoa['saldo'] - $saque;
        exibeMensagem(mensagem: "Saque efetuado! $pessoa[titular], seu saldo é: $pessoa[saldo].");
    }
};

$string = 'Essa é a variável "string".';
exibeMensagem(mensagem: $string);

foreach($contasCorrentes as $cpf => $pessoa){
    echo 'O CPF '. $cpf . ' pertence ao titular ' . $pessoa['titular'] . PHP_EOL;
    echo 'Seu saldo é ' . $pessoa['saldo'] . PHP_EOL;
}