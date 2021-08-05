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
    
    <div class="card text-left">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="paginas.php?pg=<?php echo $row["page"];?>">Atribuições</a>
                </li>                
                <li class="nav-item">
                <a class="nav-link active" aria-current="true" href="integrantes.php?pg=<?php echo $row["page"];?>">Componentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="processos.php?pg=<?php echo $row["page"];?>">Processos SEI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sistemas.php?pg=<?php echo $row["page"];?>">Sistemas</a>
                </li>           
            </ul>
        </div>
        <div class="card-body text-align: left">
            <ul>
                <?php
                    $sql = "SELECT * FROM integrantes WHERE page = '$pg'";    
                    $sql = $pdo->prepare($sql);
                    $sql->execute();
                    //var_dump(count($integra));
                    while($integra = $sql -> fetch(PDO::FETCH_ASSOC)):                        
                ?>
                <li style="list-style-type:circle;"><h6><?php echo $integra['nome']?>:</h6></li>
                <li style="list-style-type:none;"><strong>Lotação: </strong> <?php echo $integra['lotacao']?>
                <li style="list-style-type:none;"><strong>Contatos: </strong>
                    <a href="mailto:<?php echo $integra['email']?>?subject=Assunto&body=Prezado(a), " target="_blank" rel="noopener noreferrer">
                    <?php echo $integra['email']?></a> /
                    <a href="" onclick="window.open('https://api.whatsapp.com/send?phone=+55<?php echo $integra['telefone']?>')">
                        Whatsapp</a> /
                    <a href="" onclick="window.open('https://web.whatsapp.com/send?phone=+55<?php echo $integra['telefone']?>')">
                    Whatsapp Web</a> /
                    <a href="" onclick="window.open('https://teams.microsoft.com/l/chat/0/0?users=<?php echo $integra['email']?>')">
                        Teams</a>
                </li>
                <br>
                <?php
                    endwhile                    
                ?>
            </ul>       
        </div>
    </div>

    <footer class="tm1"> ©2021 - SRV - Todos os direitos reservados
    </footer>
</body>
</html>