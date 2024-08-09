<?php
session_start();
if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
    exit();
}
$email = $_SESSION['email'];
$conexao = mysqli_connect("localhost", "root", "", "trab-manter");

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['confirm']) && $_POST['confirm'] == 'yes') {
        $sql = "DELETE FROM usuario WHERE email = '$email'";
        if (mysqli_query($conexao, $sql)) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            session_destroy();
            header('Location:index.php');
        } else {
            echo "Erro ao apagar a conta: " . mysqli_error($conexao);
        }
    } else {
        echo "A exclusão da conta foi cancelada.";
        echo "<a href='pagina_inicial.php'>Voltar ao perfil</a>";
    }
    mysqli_close($conexao);
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar Conta</title>
   
</head>

<body>
    <div class="container">
        <h1>Apagar Conta</h1>
        <p>Tem certeza que deseja apagar sua conta? Esta ação não pode ser desfeita.</p>
        <form method="POST" action="">
            <div class="button-group">
                <button type="submit" name="confirm" value="yes" class="confirm-button">Sim, apagar</button>
                <button type="submit" name="confirm" value="no" class="cancel-button">Não, cancelar</button>
            </div>
        </form>
        <a href="pagina_inicial.php">Voltar ao perfil</a>
    </div>
</body>

</html>
