<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

</head>

<body>
    <?php
    if (isset($_GET['erro'])) {
        $erro = $_GET['erro'];
        if ($erro == 1) {
            echo '<div class="alert alert-danger" role="alert"><h2>Usuário não encontrado!</h2><br> Usuário ou senha estão incorretos, tente novamente </div>';
        }
    }
    ?>
    <h1>Login</h1>
    <form action="teste.php" method="POST">
    Usuário  <input type="text" name="nome"> <br> <br>
    Senha   <input type="password" name="senha">  <br> <br>
        <input type="submit" name="submit" value="Entrar"> <br> <br>
      <a href="form-cadastro.php">Cadastre-se </a> <br> <br>
     <a href="form-recuperar.php">Recupere sua senha!</a> <br> <br>
    </form>
</body>

</html>