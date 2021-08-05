<?php
    require 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="icon" type="image/png" href="favicon.png">
    <title>CONCENTRA</title>
</head>
<body>      
    <div id="div0" >        
        <div class="d-flex .col-6 .col-md-4">
            <div class="p-1 flex-grow-1">
                <p><strong>INSS</strong><br>
               Instituto Nacional do Seguro Social</p>                
            </div>
            <div class="p-1 flex-grow-1">
                <p align="center"><strong>SUPERINTENDÊNCIA REGIONAL NORTE/CENTRO-OESTE</strong>
                <br>Divisão de Orçamento, Finanças e Logística</p>
            </div>
            <div class="p-1 flex-grow-1"></div>            
            <div class="p-1 flex-grow-1"></div>
            <div class="p-1 flex-grow-1"></div>
        </div>
    </div>

    <nav class="nav1 text-right">        
        <a href="login.php">
            <button class="navbar-brand">
                <img src="login.png" width="25" height="25" class="d-inline-block align-top" alt="">
                Área restrita
            </button></a>
        <button class="navbar-brand" onclick="window.open('https://sei.inss.gov.br/sei/controlador.php?acao=procedimento_trabalhar&id_procedimento=2817169&id_documento=3502684')">
            <img src="saibamais.png" width="25" height="25" class="d-inline-block align-top" alt="">
            Saiba mais
        </button>
    </nav>
    
    <div id="div1" class=".col-6 .col-md-4" align="center">
            <button class="btn btn-light mostrar animate__animated animate__zoomIn">CONCENTRA SR-V</button>
            
            <p class="hide"><strong>O CONCENTRA</strong> centraliza a gestão e a distribuição dos processos de trabalho relativos às áreas de Logística,
                Licitações e Contratos, de Engenharia e Patrimônio Imobiliário e de Orçamento, Finanças e Contabilidade da
                Superintendência Regional Norte/Centro-Oeste e Gerências Executivas vinculadas, em decorrência do Plano de
                Centralização de Contratações Públicas do INSS e do redimensionamento do quantitativo de Unidades
                Administrativas de Serviços Gerais (Uasg), visando à continuidade dos serviços e à otimização da força de
                trabalho.
            </p>
           
        <!-- by http://www.image-map.net/ -->
        <img src="./img/mandalanovo.png" usemap="#image-map" class="map" class="img-fluid" alt="...">        
        <map name="image-map" >
            <?php
                global $pdo;

                $sql = "SELECT * FROM equipes";
                $sql = $pdo->prepare($sql);
                $sql->execute();
                while($row = $sql -> fetch(PDO::FETCH_ASSOC)):
            ?>
            <area target="" alt="<?php echo $row["equipe"];?>" title="<?php echo $row["setor"];?>" href="paginas.php?pg=<?php echo $row["page"];?>" coords="<?php echo $row["coords"];?>" shape="<?php echo $row["shape"];?>">
            <?php endwhile; ?>
        </map>       
    </div>
    <div class="form-group">
            <input  class="form-control form-control-sm" type="text" name="search_text" id="search_text" 
                    placeholder="O que você procura?" style="background-color: #d6ebd2; font-size: 16px;"/>
    </div>            
    <div id="result"></div>
       
    <div class="tm1" style="color: white;">
        ©2021 - SRV - Todos os direitos reservados
    </div>
        
    <!-- JavaScripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.maphilight.min.js"></script>
    <script type="text/javascript" src="buscador.js"></script>
    <!-- Latest Bootstrap JavaScript plugin -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Map Hilight Function -->
    <script>
        $(function() 
        {
            $('.map').maphilight();
        });	
    </script>

    
        


</body>
</html>
