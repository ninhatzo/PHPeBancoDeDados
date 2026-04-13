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
    <div class="container">
        <div class="card">
            <div class="card-header">
                <i class="fa-solid fa-file-pen"></i> Editar Carros 
                <a href="index.php" class="btn-voltar float-right"><i class="fa-solid fa-angle-left"></i>Voltar ao início</a>
            </div>

            <div class="card-body">

                <form action="./index.php?a=edit" method="post" id="formEditar">

                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" name="modelo" id="modelo" class="form-control"  placeholder="Digite o modelo do carro" required value="<?php echo $resultQuery['modelo'] ?>">
                    </div>

                    <div class="form-group">
                        <label>Cor</label>
                        <input type="text" name="cor" id="cor" class="form-control"  placeholder="Digite a cor do carro" required value="<?php echo $resultQuery['cor'] ?>" >
                    </div>

                    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

                    <button type="submit" name="submit" id="submit" class="btn-editar d-block mx-auto">
                        <i class="fa-regular fa-pen-to-square"></i> Editar Carro
                    </button>

                </form>
            </div>
        </div>
    </div>

    <script src="src/js/script.js"></script>
</body>
</html>