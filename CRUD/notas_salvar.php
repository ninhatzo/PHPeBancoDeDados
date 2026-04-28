<?php
include 'conexao.php';

if (
    empty($_POST['aluno_id']) ||
    empty($_POST['bimestre']) ||
    empty($_POST['nota1']) ||
    empty($_POST['nota2']) ||
    empty($_POST['nota3']) ||
    empty($_POST['peso']) ||
    empty($_POST['faltas'])
) {
    die("Preencha todos os dados.");
}

$stmt = $conn->prepare("
    INSERT INTO notas_alunos
    (aluno_id, bimestre, nota1, nota2, nota3, peso, faltas)
    VALUES (?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "isdddii",
    $_POST['aluno_id'],
    $_POST['bimestre'],
    $_POST['nota1'],
    $_POST['nota2'],
    $_POST['nota3'],
    $_POST['peso'],
    $_POST['faltas']
);

$stmt->execute();
$stmt->close();

header("Location: notas_index.php");
exit;
?>