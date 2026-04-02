<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/ADS2025/PHPeBancoDeDados/FabricaDeCarros/Views/src/css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Fábrica de Carros</title>

</head>
<body>

<?php
    include ('../configuration/Conecte.php');
?>

<div class="container">
    <div class="card">
        <div class="card-header">
        <i class="fa-solid fa-plus"></i> Fabricar Carros
            <a href="../index.php" class="btn-voltar float-right"><i class="fa-solid fa-angle-left"></i>Voltar ao início</a>
        </div>

        <div class="card-body">

            <form action="../index.php?a=insert" method="POST">

                <div class="form-group">
                    <label>Modelo</label>
                    <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Digite o modelo do carro" required>
                </div>

                <div class="form-group">
                    <label>Cor</label>
                    <input type="text" name="cor" id="cor" class="form-control" placeholder="Digite a cor do carro" required>
                </div>

                <button type="submit" name="submit" id="submit" class="btn-editar d-block mx-auto"><i class="fa-solid fa-plus"></i>
                    Fabricar Carro
                </button>

            </form>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="src/js/script.js"></script>
</body>
</html>