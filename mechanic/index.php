<?php
include_once 'includes/header.php';
include_once 'estilos/inicial.php';
session_unset();
include_once 'php_action/db_connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mecanica</title>
   <link href="estilos/inicial.php" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Open+Sans&display=swap" rel="stylesheet">
    
    
</head>
<body>
    
    <header>
 <a class="logo" href="index.php"><h1>Mecânica de carros</h1></a>
  <div class="btn">
    <a class="links" href="serv.php">Serviços</a>
    <a class="links" href="ctt.php">Contatos</a>
    <a class="links" href="agend.php">Agendamento</a>
    <a class="links" href="cadastro.php">Cadastrar-se</a>
  </div>
</header>

    <div class="conteiner">
  <img class="car" src="img/img.png" alt="">
</div>

<div class="frase">
  <h1 class="txt">Confiança sobre rodas</h1>
</div>


</body>
</html>



