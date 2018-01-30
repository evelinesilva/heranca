<?php
require_once 'Funcionario.php';

  class Gerente{
    public $usuario;
    public $senha;

    function AumentaSalario(){

      $this->salario *= 1.6;
    }
  }
 ?>
