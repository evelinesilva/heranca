<?php
require 'Telefonista.php';
require 'Gerente.php';
require 'Secretaria.php';


  $t1 = new Telefonista();
  $t1->nome = "Maria";
  $t1->salario = 1000;
  $t1->estacaoDeTrabalho = "casa";

  echo "$t1->nome" . PHP_EOL;
  echo "$t1->estacaoDeTrabalho" . PHP_EOL;
  echo "$t1->salario" . PHP_EOL;

  echo "-----------------" . PHP_EOL;

  $g1 = new Gerente();
  $g1->nome = "Marcos";
  $g1->salario = 3000;
  $g1->usuario = "user_marcos";
  $g1->senha = 123456;

  echo "$g1->nome" . PHP_EOL;
  echo "$g1->salario" . PHP_EOL;
  echo "$g1->usuario" . PHP_EOL;
  echo "$g1->senha" . PHP_EOL;

  echo "Bonificação: " . $g1->Bonificacao() . PHP_EOL;

    echo "-----------------" . PHP_EOL;

    $s1 = new Secretaria();
    $s1->nome = "Sheyla";
    $t1->salario = 10000;
    $t1->ramal = "6969-6969";

    echo "$t1->nome" . PHP_EOL;
    echo "$t1->estacaoDeTrabalho" . PHP_EOL;
    echo "$t1->ramal" . PHP_EOL;
    echo "$t1->salario" . PHP_EOL;

    echo "Bonificação" .   $t1->Bonificacao() . PHP_EOL;

    echo "-----------------" . PHP_EOL;

?>
