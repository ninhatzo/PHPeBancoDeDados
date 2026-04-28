<?php
include 'conexao.php';

if (!isset($_GET['id'])) {
    die("ID inválido.");
}

$id = (int) $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM usuarios WHERE id=$id");

if (mysqli_num_rows($result) == 0) {
    die("Usuário não encontrado.");
}

$dados = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Editar Aluno</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>

<body class="bg-light">

<div class="container py-5">

<div class="row justify-content-center">
<div class="col-md-6">

<div class="card shadow">
<div class="card-body">

<h3 class="mb-4">Editar Aluno</h3>

<form action="atualizar.php" method="POST">

<input type="hidden" name="id" value="<?= $dados['id'] ?>">

<div class="mb-2">
<label class="form-label">Nome</label>
<input type="text" name="nome" class="form-control" value="<?= $dados['nome'] ?>">
</div>

<div class="mb-2">
<label class="form-label">Email</label>
<input type="email" name="email" class="form-control" value="<?= $dados['email'] ?>">
</div>

<div class="mb-2">
<label class="form-label">Telefone</label>
<input type="text" name="telefone" class="form-control" value="<?= $dados['telefone'] ?>">
</div>

<div class="mb-2">
<label class="form-label">Idade</label>
<input type="number" name="idade" class="form-control" value="<?= $dados['idade'] ?>">
</div>

<div class="mb-2">
<label class="form-label">Cidade</label>
<input type="text" name="cidade" class="form-control" value="<?= $dados['cidade'] ?>">
</div>

<div class="mb-3">
<label class="form-label">Curso</label>
<input type="text" name="curso" class="form-control" value="<?= $dados['curso'] ?>">
</div>

<button class="btn btn-primary w-100">Atualizar</button>
<a href="index.php" class="btn btn-secondary w-100 mt-2">Voltar</a>

</form>

</div>
</div>

</div>
</div>

</div>

</body>
</html>