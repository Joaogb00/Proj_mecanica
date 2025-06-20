<?php
  include_once 'includes/header.php';
  
?>
<header>
  <a class="logo" href="index.php"><h1>Mecânica de carros</h1></a>
  <div class="btn">
    <a class="links" href="index.php">Início</a>
    <a class="links" href="serv.php">Serviços</a>
    <a class="links" href="ctt.php">Contatos</a>
    <a class="links" href="agend.php">Agendamento</a>
  </div>
</header>

<div class="formulario">
  <form action="php_action/create.php" method="POST">
    <h1 id="txt1">Preencha os dados abaixo:</h1>

    <input class="inputs" type="text" name="nome" placeholder="Nome:" required>
    <input class="inputs" type="text" name="sobre" placeholder="Sobrenome:" required>
    <input class="inputs" type="email" name="email" placeholder="Email:" required>
    <input class="inputs" type="password" name="senha" placeholder="Senha:" required>

    <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
  </form>
</div>

<?php include_once 'includes/footer.php'; ?>
