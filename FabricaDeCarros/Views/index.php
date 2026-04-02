<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/ADS2025/PHPeBancoDeDados/FabricaDeCarros/Views/src/css/style.css">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">--->

    <title>Fábrica de Carros</title>

</head>
<body> 
    <img class="fundo" src="Views/src/imgs/fundo.jpg" alt="">
    <div class="container2">
        <div class="content">
        <i class="fa-solid fa-car"></i>
            <div class="card">
                <a href="Model/add.php" class="button"><i class="fa-solid fa-plus"></i>Fabricar Carros</a>
            </div>
        </div>
    </div>
    <div class="container3">
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
                        <?php 
                        foreach(($resultData ?? []) as $data):
                             ?>
                            <tr>
                                <td align="center"><?= $data['id'];?></td>
                                <td align="center"><?= $data['modelo'];?></td>
                                <td align="center"><?= $data['cor'];?></td>
                                <td align="center">
                                    <a href="Model/edit.php?id=<?= $data['id']; ?>">
                                        Editar
                                    </a> |
                                    <a href="../index.php?a=delete?id=<?= $data['id']; ?>" onclick="return confirm('Tem certeza que deseja deletar este registro?')">
                                        Deletar
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                    </tbody>    
            </table> 
        </div>   
    </div>
<!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
--->
    <script src="src/js/script.js"></script>
</body>
</html>