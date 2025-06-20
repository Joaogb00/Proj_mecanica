<?php
session_start();
require_once 'db_connect.php';

function clear($input){
  global $connect;
  $var = mysqli_escape_string($connect, $input);
  return htmlspecialchars($var);
}

if (isset($_POST['btn-atualizar'])):
  $id = clear($_POST['id']);
  $nome = clear($_POST['nome']);
  $sobrenome = clear($_POST['sobrenome']);
  $email = clear($_POST['email']);
  $idade = clear($_POST['idade']);
  $senha = clear($_POST['senha']);

  $sql = "UPDATE clientes SET 
            nome = '$nome', 
            sobrenome = '$sobrenome', 
            email = '$email', 
            idade = '$idade',
            senha = '$senha'
          WHERE id = '$id'";

  if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Atualizado com sucesso!";
    header('Location: ../index.php');
  else:
    $_SESSION['mensagem'] = "Erro ao atualizar!";
    header('Location: ../index.php');
  endif;
endif;
?>
