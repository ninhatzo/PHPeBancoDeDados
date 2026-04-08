<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include 'conexao.php';
    ?>

    <h2>Editar Usuário</h2>

    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id">
    </form>
    
</body>
</html>