<?php
if (isset($_GET['pg'])){
    require 'conexao.php';

    $pg = addslashes($_GET['pg']);
    $sql = "SELECT * FROM equipes WHERE page = '$pg'";    
    $sql = $pdo->prepare($sql);
    $sql->execute();
    $row = $sql -> fetch(PDO::FETCH_ASSOC); //Tabela equipes
    //var_dump($pg);
    
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
                    <a class="nav-link active" aria-current="true" href="componentes.php?pg=<?php echo $row["page"];?>">Componentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="unidades.php?pg=<?php echo $row["page"];?>">Unidades Vinculadas</a>
                </li>           
            </ul>
        </div>
        <div class="card-body text-align: left">
            <ul>
                <?php
                    $sql = "SELECT * FROM componentes WHERE page = '$pg'";    
                    $sql = $pdo->prepare($sql);
                    $sql->execute();
                    while($comp = $sql -> fetch(PDO::FETCH_ASSOC)):
                        if($comp['titulo'] == 'componente'):
                ?>
                <li style="list-style-type:circle;"><h6>Titular da <?php echo $row['setor']?>:</h6></li>
                <li style="list-style-type:none;"><strong>Nome: </strong> <?php echo $comp['titular']?>
                /   <a href="mailto:<?php echo $comp['emailtitular']?>?subject=Assunto&body=Prezado(a), " target="_blank" rel="noopener noreferrer">
                <?php echo $comp['emailtitular']?></a> /
                    <a href="" onclick="window.open('https://api.whatsapp.com/send?phone=+55<?php echo $comp['fonetitular']?>')">
                        Whatsapp</a> /
                    <a href="" onclick="window.open('https://web.whatsapp.com/send?phone=+55<?php echo $comp['fonetitular']?>')">
                        Whatsapp Web</a> /
                    <a href="" onclick="window.open('https://teams.microsoft.com/l/chat/0/0?users=<?php echo $comp['emailtitular']?>')">
                        Teams</a>
                </li>
                <li style="list-style-type:none;"><strong>Institucional: </strong>
                    <a href="mailto:<?php echo $comp['emaildivtitular']?>?cc=<?php echo $comp['emailtitular']?>&subject=Assunto&body=Prezado(a)," target="_blank" rel="noopener noreferrer">
                        <?php echo $comp['emaildivtitular']?>
                    </a>
                </li>
                <li style="list-style-type:none;"><strong>Lotação: </strong> <?php echo $comp['lotacaotitular']?></li>
                <li style="list-style-type:none;"><strong>Endereço: </strong> <?php echo $comp['enderecotitular']?></li>
                <li style="list-style-type:none;"><strong>Fone: </strong> <?php echo $comp['fonedivtitular']?>
                    <br><br>
                <li style="list-style-type:circle;"><h6>Substituto da <?php echo $row['setor']?>:</h6></li>
                <li style="list-style-type:none;"><strong>Nome: </strong> <?php echo $comp['substituto']?>
                /   <a href="mailto:<?php echo $comp['emailsub']?>?subject=Assunto&body=Prezado(a), " target="_blank" rel="noopener noreferrer">
                <?php echo $comp['emailsub']?></a> /
                    <a href="" onclick="window.open('https://api.whatsapp.com/send?phone=+55<?php echo $comp['fonesub']?>')">
                        Whatsapp</a> /
                    <a href="" onclick="window.open('https://web.whatsapp.com/send?phone=+55<?php echo $comp['fonesub']?>')">
                        Whatsapp Web</a> /
                    <a href="" onclick="window.open('https://teams.microsoft.com/l/chat/0/0?users=<?php echo $comp['emailsub']?>')">
                        Teams</a>
                </li>
                <li style="list-style-type:none;"><strong>Institucional: </strong>
                    <a href="mailto:<?php echo $comp['emaildivsub']?>?cc=<?php echo $comp['emaildivtitular']?>&subject=Assunto&body=Prezado(a)," target="_blank" rel="noopener noreferrer">
                        <?php echo $comp['emaildivsub']?>
                    </a>
                </li>
                <li style="list-style-type:none;"><strong>Lotação: </strong> <?php echo $comp['lotacaosub']?></li>
                <li style="list-style-type:none;"><strong>Endereço: </strong> <?php echo $comp['enderecosub']?></li>
                <li style="list-style-type:none;"><strong>Fone: </strong> <?php echo $comp['fonedivsub']?></li>
                <?php
                    endif;    
                    endwhile                    
                ?>
            </ul>       
        </div>
    </div>    
    <?php endif?>

    <footer class="tm1"> ©2021 - SRV - Todos os direitos reservados
    </footer>
</body>
</html>