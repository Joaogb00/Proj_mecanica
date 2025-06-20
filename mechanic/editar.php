<?php
include_once 'php_action/db_connect.php';
include_once 'includes/header.php';
?>
  <header>
 <a class="logo" href="index.php"><h1>Mecânica de carros</h1></a>
  <div class="btn">
    <a class="links" href="serv.php">Serviços</a>
    <a class="links" href="ctt.php">Contatos</a>
    <a class="links" href="agend.php">Agendamento</a>
    <a class="links" href="cadastro.php">Cadastrar-se</a>
  </div>
</header>

<?
if (isset($_GET['id']) && !empty($_GET['id'])) {
  $id = mysqli_escape_string($connect, $_GET['id']);
  $sql = "SELECT * FROM clientes WHERE id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
} else {
  echo "ID não informado.";
  exit;
}
?>






<h3 class="light">Editar Cliente</h3>
<form action="../php_action/update.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

  <label for="nome">Nome</label>
  <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>" required>

  <label for="sobrenome">Sobrenome</label>
  <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>" required>

  <label for="email">E-mail</label>
  <input type="email" name="email" id="email" value="<?php echo $dados['email']; ?>" required>

  <label for="senha">Senha</label>
  <input type="password" name="senha" id="senha" value="<?php echo $dados['senha']; ?>" required>

  <button type="submit" name="btn-atualizar" class="btn">Atualizar</button>
</form>

<?php include_once 'includes/footer.php'; ?>
