<?php
require 'Telefonista.php';

  $t1 = new Telefonista();
  $t1->nome = "Maria";
  $t1->salario = 1000;
  $t1->estacaoDeTrabalho = "casa";

  echo "$t1->nome" . PHP_EOL;
  echo "$t1->estacaoDeTrabalho" . PHP_EOL;
  echo "$t1->salario" . PHP_EOL;

?>
