<?php
$message = '';

if (isset($_POST['submit'])) {
    if (!empty($_POST['nome']) && !empty($_POST['senha']) && !empty($_POST['email'])) {
        require_once("conecta.php");
        $conexao = conectar();

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO `usuario`(`nome`, `email`, `senha`) VALUES ('$nome','$email','$senha')";
        $resultado = mysqli_query($conexao, $sql);

        $message = "<h1>Cadastro feito com sucesso!</h1>";
    } else {
        $message = "<h1>Preencha os campos para efetuar seu cadastro!</h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
   
</head>

<body>
    <div class="container">
        <?php echo $message; ?>
        <h1>Cadastre-se!</h1>
        <form action="formulario-cadastro.php" method="POST">
            Nome:<input type="text" name="nome" id="nome"> <br>
            E-mail:<input type="email" name="email" id="email"><br>
            Crie uma senha: <input type="password" name="senha" id="senha" placeholder="Somente números"><br>
            <input type="submit" name="submit" id="submit" value="Cadastrar">
        </form>
        <a href="index.php" class="back-link">Voltar</a>
    </div>
</body>

</html>
