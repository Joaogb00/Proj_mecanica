<?php
session_start();
require_once 'db_connect.php';
function clear($input){
    global $connect;
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
}
if(isset($_POST['btn-age'])):
    $nome = clear( $_POST['nome']);
    $sobrenome = clear( $_POST['sobrenome']);
    $email =     clear( $_POST['email']);
    $telefone =  clear( $_POST['telefone']);
    $servico =      clear( $_POST['servico']);
   
    
    $sql = "INSERT INTO agenda (nome, sobrenome, email, telefone, servico )  VALUES 
    ( '$nome', '$sobrenome', '$email', '$telefone', '$servico') ";
    
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
header('Location: ../index.php');
else:
       $_SESSION['mensagem'] = "Erro ao cadastrar!";
header('Location: ../index.php');
    endif;
    endif;
?>
