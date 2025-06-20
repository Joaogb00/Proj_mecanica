<?php
include_once 'includes/header.php';

include_once 'estilos/agend.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mecanica</title>
    <link rel="stylesheet" href="/estilo_geral/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    
    <header>
 <a class="logo" href="index.php"><h1>Mecânica de carros</h1></a>
  <div class="btn">
    <a class="links" href="index.php">Inicio</a>
    <a class="links" href="serv.php">Serviços</a>
    <a class="links" href="ctt.php">Contatos</a>
    <a class="links" href="cadastro.php">Cadastrar-se</a>
  </div>
</header>

<form action="php_action/agend.php" method="POST">
    <h1>Agendamento</h1>
<div class="input">
<input class="inputs" required placeholder="Nome: " name="nome" type="text">
<input class="inputs" required placeholder="Sobrenome: " name="sobrenome" type="text">
<input class="inputs" required placeholder="Email: " name="email" type="email">
<input class="inputs" required placeholder="Celular" name="telefone" >
<input class="inputs" required placeholder="Serviço" name="servico" type="text">
  
         <button type="submit" name="btn-age">Agendar serviço</button>
</div>
</form>





</body>
</html>
<?php
  include_once 'includes/footer.php';
?>