<?php
  class Funcionario{
    public $nome;
    public $salario;

    function Bonificacao(){

      return $this->salario * 0.1;
    }
  }
 ?>
