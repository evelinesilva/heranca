<?php
require_once 'Funcionario.php';

  class Gerente{
    public $usuario;
    public $senha;

    function Bonificacao(){

      return $this->salario * 0.6;
    }
  }
 ?>
