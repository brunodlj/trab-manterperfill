<?php
$email = $_GET['email'];
require_once "conecta.php";
$conexao = conectar();

$sql = "SELECT * FROM usuario WHERE email='$email'";
$result = executarSQL($conexao, $sql);
$dados = mysqli_fetch_assoc($result);

if (!$dados) {
    echo "Usuário não encontrado.";
    die();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
   
</head>
<body>
    <div class="container">
        <h1>Editar Usuário</h1>
        <form action="editar.php" method="post">
            <input type="hidden" name="id" value="<?= $dados['id_usuario']; ?>">
            <label for="nome">Nome:</label> <input type="text" id="nome" name="nome" value="<?= $dados['nome']; ?>" required>  
            <label for="email">Email:</label> <input type="email" id="email" name="email" value="<?= $dados['email']; ?>" required>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
