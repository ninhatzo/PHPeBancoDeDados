<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <h2>Cadatro de usuários</h2>

    <form action="salvar.php" method="POST">
        Nome: <input type="text" name="nome" required><br>
        E-mail: <input type="email" name="email" required><br>
        Telefone: <input type="text" name="telefone" required><br>
        Idade: <input type="number" min="1" name="idade" required><br>
        Cidade: <input type="text" name="cidade" required><br>
        Curso: <input type="text" name="curso" required><br>

        <button>Salvar</button>
    </form>
</body>
</html>