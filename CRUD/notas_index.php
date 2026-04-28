<?php include 'conexao.php'; ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">

<div class="container mt-4">

    <h2>Notas</h2>
    <a href="notas_form.php" class="btn btn-success mb-3">Nova Nota</a>
    <a href="index.php" class="btn btn-primary mb-3">Voltar</a>

<?php
$res = mysqli_query($conn, "
SELECT n.*, u.nome 
FROM notas_alunos n
JOIN usuarios u ON u.id = n.aluno_id
");

$total = 0;
$soma_medias = 0;
$maior = 0;
$menor = 999;

$dados = [];

while($r = mysqli_fetch_assoc($res)){
    $soma = $r['nota1'] + $r['nota2'] + $r['nota3'];
    $media = $soma / 3;

    $dados[] = [$r, $soma, $media];

    $total++;
    $soma_medias += $media;

    if($media > $maior) $maior = $media;
    if($media < $menor) $menor = $media;
}

$media_geral = $total ? $soma_medias / $total : 0;
?>

<!-- CARDS -->
<div class="row mb-4">
    <div class="col">Total: <?= $total ?></div>
    <div class="col">Maior média: <?= number_format($maior,2) ?></div>
    <div class="col">Menor média: <?= number_format($menor,2) ?></div>
    <div class="col">Média geral: <?= number_format($media_geral,2) ?></div>
</div>

<table class="table table-bordered">
<tr>
    <th>Aluno</th>
    <th>Bimestre</th>
    <th>N1</th>
    <th>N2</th>
    <th>N3</th>
    <th>Soma</th>
    <th>Média</th>
    <th>Peso</th>
    <th>Média Ponderada</th>
    <th>Faltas</th>
    <th>Situação</th>
</tr>

<?php
foreach($dados as $d){
    $r = $d[0];
    $soma = $d[1];
    $media = $d[2];
    $media_pond = $media * $r['peso'];

    if($media >= 7 && $r['faltas'] <= 10){
        $sit = "Aprovado";
    }elseif($media >= 5){
        $sit = "Recuperacao";
    }else{
        $sit = "Reprovado";
    }

    echo "<tr>
        <td>{$r['nome']}</td>
        <td>{$r['bimestre']}</td>
        <td>{$r['nota1']}</td>
        <td>{$r['nota2']}</td>
        <td>{$r['nota3']}</td>
        <td>$soma</td>
        <td>".number_format($media,2)."</td>
        <td>{$r['peso']}</td>
        <td>".number_format($media_pond,2)."</td>
        <td>{$r['faltas']}</td>
        <td>$sit</td>
    </tr>";
}
?>

</table>
</div>