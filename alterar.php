<?php
$nome_arquivo = htmlspecialchars($_GET['Nome_arquivo']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Arquivo</title>
   
</head>
<body>
    <div class="container">
        <h1>Alterar Arquivo</h1>
        <p>Alterando o arquivo: <strong><?= $nome_arquivo ?></strong></p>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="nome_arquivo" value="<?= $nome_arquivo ?>">
            <input type="file" name="arquivo" required><br>
            <input type="submit" value="Alterar" name="submit">
        </form>
    </div>
</body>
</html>
