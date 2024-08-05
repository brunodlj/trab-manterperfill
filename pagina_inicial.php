<?php
session_start();
$email = $_SESSION['email'];
$conexao = mysqli_connect("localhost", "root", "", "trab-manter");

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$sql = "SELECT * FROM usuario WHERE email = '$email'";
$resultado = mysqli_query($conexao, $sql);

if ($resultado != false) {
    $usuario = mysqli_fetch_assoc($resultado);
} else {
    echo "Erro ao executar comando SQL.";
    die();
}

$imagemPadrao = 'up/default.jpg';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>

<body>
    <p>Você está logado! <?php echo ($usuario['nome']); ?></p>
    <p>Seu email é: <?php echo ($_SESSION['email']); ?></p>
    <table>
        <tbody>
            <?php
            $arquivo = $usuario['foto'];
            $caminhoUploads = 'up/';
            $caminhoArquivo = $caminhoUploads . $arquivo;

            if (empty($arquivo) || !file_exists($caminhoArquivo)) {
                $caminhoArquivo = $imagemPadrao;
            } else {
                $caminhoArquivo = $caminhoArquivo;
            }

            echo "<tr>";
            echo "<td><img src='$caminhoArquivo' width='100px' height='100px'></td>";
            echo "<td><a href='alterar?Nome_arquivo={$usuario['foto']}'>Alterar foto de perfil</a></td>";
            ?>
        </tbody>
    </table>
    <a href="sair.php"> Sair </a><br>
    <a href="formeditar.php?"> Editar conta</a> <br>
    <a href="excluir.php"> Apagar conta</a> <br>
    
</body>