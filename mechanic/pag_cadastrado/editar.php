<?php
include_once 'php_action/db_connect.php';
include_once 'includes/header.php';

if (isset($_GET['id'])) {
  $id = mysqli_escape_string($connect, $_GET['id']);
  $sql = "SELECT * FROM clientes WHERE id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
}
?>

<h3 class="light">Editar Cliente</h3>
<form action="php_action/update.php" method="POST">
    
    
    
    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">    
    <label for="nome">Nome</label>
  <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>" required>
  <label for="sobrenome">Sobrenome</label>
  <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>" required>
    <label for="nome">E-mail</label>
  <input type="email" name="email" id="email" value="<?php echo $dados['email']; ?>" required>
  <label for="senha">Senha</label>
  <input type="password" name="senha" id="senha" value="<?php echo $dados['senha']; ?>" required>
 





  <div class="troca">
<a class="ele5" href="">Deseja trocar a senha?</a>
<a class="ele5" href="">Deseja trcar o email?</a>
  </div>


  <button type="submit" name="btn-atualizar" class="btn">Atualizar</button>
</form>

<?php include_once 'includes/footer.php'; ?>
