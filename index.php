<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
</head>

<body>
    <div class="container">
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
            <label for="nome">Insira seu e-mail:</label>
            <input type="text" name="email" id="nome" required> <br><br>

            <label for="senha">Insira sua senha:</label>
            <input type="password" name="senha" id="senha" required><br><br>

            <input type="submit" name="submit" value="Enviar"> <br> <br>

            <a href="formulario-cadastro.php">Cadastre-se</a><br>
            <a href="formulario-senha.php">Recupere sua senha!</a>
        </form>
    </div>
</body>

</html>
