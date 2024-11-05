<?php
    $dbhost = 'Localhost';
    $dbUsername = 'root';
    $dbpassword = 'banana00';
    $dbName = 'formulario_cadastro';

    $conexao = new mysqli($dbhost,$dbUsername, $dbpassword, $dbName);

  //  if ($conexao ->connect_errno){
   // echo "deu errado";
  //  }
   // else {
   //     echo "deu certo";
   // }
?>