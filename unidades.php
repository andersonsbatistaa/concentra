<?php
if (isset($_GET['pg'])){
    require 'conexao.php';

    $pg = addslashes($_GET['pg']);
    $sql = "SELECT * FROM equipes WHERE page = '$pg'";    
    $sql = $pdo->prepare($sql);
    $sql->execute();
    $row = $sql -> fetch(PDO::FETCH_ASSOC); //Tabela equipes
    //var_dump($row);
    
} else {
    header("Location: index.php");
}    
?>
   
<!DOCTYPE html>
<html>
<head>
	<!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="ccentral.css" rel="stylesheet" type="text/css">
           
	<title> <?php echo $row["setor"]?></title>
</head>

<body>            
    <div class="d-flex cabecalho">
        <div class="p-2 flex-grow-1">
            <p><strong>INSS</strong><br>
            Instituto Nacional do Seguro Social</p>                
        </div>
        <div class="p-2 flex-grow-1">
            <p align="center"><strong>SUPERINTENDÊNCIA REGIONAL NORTE/CENTRO-OESTE</strong>
            <br>Divisão  De Orçamento, Finançasas e Logística</p>
        </div>
        <div class="p-2 flex-grow-1"></div>            
        <div class="p-2 flex-grow-1"></div>
        <div class="p-2 flex-grow-1"></div>
    </div>         
        <div class=" navcc d-flex flex-grow-1">
        <h3>Bem-vindo à <?php echo $row['setor']?></h3>
            <nav class="">                
                <a id="paginaInicial" href="index.php">
                    <img src="./img/homepage.png" width="50px" height="50px" 
                    title="Página Inicial" alt="Página Inicial">
                </a>
            </nav>
        </div>            
    </div>
    
    <?php if($pg == 'divofl' || $pg == 'serllc' || $pg == 'serofc' || $pg == 'sengpai'):?>
    <div class="card text-left">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="paginas.php?pg=<?php echo $row["page"];?>">Atribuições</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="componentes.php?pg=<?php echo $row["page"];?>">Componentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="unidades.php?pg=<?php echo $row["page"];?>">Unidades Vinculadas</a>
                </li>                       
            </ul>
        </div>
        <div class="card-body" style="background: whitesmoke">
            <?php
            //var_dump($row['page']);
            $sql = "SELECT * FROM equipes WHERE servico = '$pg'";    
            $sql = $pdo->prepare($sql);
            $sql->execute();
            while($imagem = $sql -> fetch(PDO::FETCH_ASSOC)):
            ?>
            <div class="d-inline-flex zonas m-4">
                <a href="paginas.php?pg=<?php echo $imagem['page']?>">
                    <img src="./img/<?php echo $imagem['img']?>" class="card-img" alt="<?php echo $imagem['setor']?>" title="<?php echo $imagem['setor']?>">
                </a>
            </div>
            <?php
                endwhile
            ?>      
        </div>
    </div>    
    <?php endif?>

    <footer class="tm1"> ©2021 - SRV - Todos os direitos reservados
    </footer>
</body>
</html>