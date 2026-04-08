<?php include 'conexao.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário Usuários</title>
</head>
<body>

<h2>Formulário Usuários</h2>

<!-- Link HTML que leva o usuário para o formulário de cadastro(form.php) --->
<a href="form.php">Novo</a><br><br>

        <table border="1px">
            <tr>
                <td>Nome</td>
                <td>E-mail</td>
                <td>Telefone</td>
                <td>Idade</td>
                <td>Cidade</td>
                <td>Curso</td>
                <td>Ações</td>
            </tr>

            <?php
                $res = mysqli_query($conn,"SELECT * FROM usuarios");

                while($r = mysqli_fetch_assoc($res)) {
                    echo "<tr>
                            <td>{$r['nome']}</td>
                            <td>{$r['telefone']}</td>
                            <td>{$r['telefone']}</td>
                            <td>{$r['idade']}</td>
                            <td>{$r['cidade']}</td>
                            <td>{$r['curso']}</td>
                            <td><a href='editar.php?id={$r['id']}'>Editar</a></td>
                          </tr>
                    ";
                }
            ?>
        </table>
</body>
</html>