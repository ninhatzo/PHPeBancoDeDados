<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Notas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Cadastrar Notas</h2>

    <form action="notas_salvar.php" method="POST">

        <!-- SELECT DE ALUNOS -->
        <div class="mb-3">
            <label class="form-label">Aluno</label>
            <select name="aluno_id" class="form-control" required>
                <option value="">Selecione um aluno</option>

                <?php
                    $res = mysqli_query($conn, "SELECT * FROM usuarios");
                    while($u = mysqli_fetch_assoc($res)) {
                        echo "<option value='{$u['id']}'>{$u['nome']}</option>";
                    }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Bimestre</label>
            <input type="text" name="bimestre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nota 1</label>
            <input type="number" step="0.01" name="nota1" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nota 2</label>
            <input type="number" step="0.01" name="nota2" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nota 3</label>
            <input type="number" step="0.01" name="nota3" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Peso</label>
            <input type="number" step="0.01" name="peso" value="1" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Faltas</label>
            <input type="number" name="faltas" value="0" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="notas_index.php" class="btn btn-secondary">Voltar</a>

    </form>
</div>

</body>
</html>