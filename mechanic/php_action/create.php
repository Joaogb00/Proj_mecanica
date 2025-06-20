<?php
session_start();
require_once 'db_connect.php';

function clear($input){
  global $connect;
  $var = mysqli_escape_string($connect, $input);
  return htmlspecialchars($var);
}

if (isset($_POST['btn-cadastrar'])):
  $nome = clear($_POST['nome']);
  $sobrenome = clear($_POST['sobrenome']);
  $email = clear($_POST['email']);
 
  $senha = clear($_POST['senha']);

  $sql = "INSERT INTO clientes (nome, sobrenome, email, senha) 
          VALUES ('$nome', '$sobrenome', '$email', '$senha')";

  if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../pag_cadastrado/index.php');
  else:
    $_SESSION['mensagem'] = "Erro ao cadastrar!";
    header('Location: ../index.php');
  endif;
endif;
?>
