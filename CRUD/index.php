<?php include 'conexao.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Alunos</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Alunos</h2>

        <div>
            <a href="form.php" class="btn btn-success">Novo</a>
            <a href="notas_index.php" class="btn btn-primary">Notas</a>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Idade</th>
                        <th>Cidade</th>
                        <th>Curso</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $res = mysqli_query($conn,"SELECT * FROM usuarios");

                        while($r = mysqli_fetch_assoc($res)) {
                            echo "<tr>
                                    <td>{$r['nome']}</td>
                                    <td>{$r['email']}</td>
                                    <td>{$r['telefone']}</td>
                                    <td>{$r['idade']}</td>
                                    <td>{$r['cidade']}</td>
                                    <td>{$r['curso']}</td>
                                    <td>
                                        <a href='editar.php?id={$r['id']}' class='btn btn-sm btn-warning'>Editar</a>
                                    </td>
                                  </tr>";
                        }
                    ?>
                </tbody>

            </table>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>