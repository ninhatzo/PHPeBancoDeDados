<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Seu CSS -->
    <link rel="stylesheet" href="/ADS2025/PHPeBancoDeDados/FabricaDeCarros/Views/src/css/style.css">

    <title>Fábrica de Carros</title>

</head>
<body> 

    <img class="fundo" src="Views/src/imgs/fundo.jpg" alt="">

    <div class="content">
        <a href="Views/add.php">
            <div class="btn-criar">
                <i class="fa-solid fa-car"></i>
                <br>
                <i class="fa-solid fa-plus"></i>
                    Fabricar Carros
            </div>
        </a>
    </div>
           
    <div class="content2">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>MODELO</th>
                    <th>COR</th>
                    <th>AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(($resultData ?? []) as $data):?>
                <tr>
                    <td align="center"><?= $data['id'];?></td>
                    <td align="center"><?= $data['modelo'];?></td>
                    <td align="center"><?= $data['cor'];?></td>
                    <td align="center">
                        <a href="index.php?a=getId&id=<?= $data['id']; ?>">
                            Editar
                        </a> 
                            |
                        <a href="index.php?a=delete&id=<?= $data['id']; ?>" onclick="return confirm('Tem certeza que deseja deletar este registro?')">
                            Deletar
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>    
        </table> 
    </div>  

    <script src="src/js/script.js"></script>
</body>
</html>