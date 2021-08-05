<?php
    require 'verificacao.php';
    //if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):
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
    <link rel="icon" type="image/png" href="./img/favicon.png">
    <title>CONCENTRA</title>
</head>
<body>      
    <div id="div0" >        
        <div class="d-flex .col-6 .col-md-4">
            <div class="flex-grow-1">
                <p><strong>INSS</strong><br>
               Instituto Nacional do Seguro Social</p>                
            </div>
            <div class="flex-grow-1">
                <p align="center"><strong>SUPERINTENDÊNCIA REGIONAL NORTE/CENTRO-OESTE</strong>
                <br>Divisão de Orçamento, Finanças e Logística</p>
            </div>
            <div class="flex-grow-1"></div>            
            <div class="flex-grow-1"></div>
            <div class="flex-grow-1"></div>
        </div>
    </div>
    <nav class="nav1 text-right">
        <label>
            Bem-vindo <?php echo $nomeUser;?>
        </label>
        <a type="button" href="logout.php"> SAIR </a>
    </nav>            
     
        
    <div class=".col-6 .col-md-4" align="center">
        <button class="btn btn-light mostrar animate__animated animate__zoomIn">CONCENTRA SR-V</button>
        
        <p class="hide"><strong>O CONCENTRA</strong> centraliza a gestão e a distribuição dos processos de trabalho relativos às áreas de Logística,
            Licitações e Contratos, de Engenharia e Patrimônio Imobiliário e de Orçamento, Finanças e Contabilidade da
            Superintendência Regional Norte/Centro-Oeste e Gerências Executivas vinculadas, em decorrência do Plano de
            Centralização de Contratações Públicas do INSS e do redimensionamento do quantitativo de Unidades
            Administrativas de Serviços Gerais (Uasg), visando à continuidade dos serviços e à otimização da força de
            trabalho.
        </p>
    </div>
    <div id="div1" class=".col-6 .col-md-4" align="center">
        
        <!-- Image Map Generated by http://www.image-map.net/ -->
        <img src="./img/mandala.png" usemap="#image-map" class="map" class="img-fluid" alt="...">
        <map name="image-map" >
            <!-- COORDENAÇÃO CENTRAL -->
            <area target="" alt="Coordenação Central" title="Coordenação Central" href="ccentral.php" coords="274,274,62" shape="circle">
            <!-- GESTÃO SETORIAL LOG -->
            <area target="" alt="Gestão Setorial LOG" title="Gestão Setorial LOG" href="gestaoLOG.php" coords="220,243,171,216,182,200,196,186,211,175,229,166,248,160,263,158,280,157,296,158,312,162,328,169,348,182,365,198,376,217,329,244,321,231,308,219,290,212,272,210,253,214,240,221,229,230" shape="poly">
            <area target="" alt="Coordenação Seccional LOG" title="Coordenação Seccional LOG" href="coordenaLOG.html" coords="173,215,139,198,155,176,171,160,192,144,214,132,237,124,261,120,286,120,309,123,333,132,355,143,376,157,394,176,408,198,376,217,365,200,352,187,336,175,319,166,300,160,282,157,266,157,246,160,226,167,212,175,198,185,185,198" shape="poly">
            <area target="" alt="LLC-PLAN" title="LLC - Equipe Especializada em Planejamento e Licitação" href="llcplan.php" coords="140,197,66,154,88,122,155,176" shape="poly">
            <area target="" alt="LLC-LIMP" title="LLC - Equipe Especializada em Contratos de Limpeza e Conservação" href="llclimp.php" coords="155,177,89,123,114,95,171,159" shape="poly">
            <area target="" alt="LLC-VIG" title="LLC-VIG" href="" coords="171,159,114,96,146,71,192,144" shape="poly">
            <area target="" alt="LLC-MAN" title="LLC-MAN" href="" coords="192,145,146,72,180,53,214,132" shape="poly">
            <area target="" alt="LLC-TRANS" title="LLC-TRANS" href="" coords="214,132,181,53,218,40,237,124" shape="poly">
            <area target="" alt="LLC-PREVB" title="LLC-PREVB" href="" coords="238,124,218,41,254,35,261,120" shape="poly">
            <area target="" alt="LLC-LOC" title="LLC-LOC" href="" coords="261,120,255,35,292,35,286,120" shape="poly">
            <area target="" alt="LLC-TEL" title="LLC-TEL" href="" coords="287,120,293,35,330,40,310,124" shape="poly">
            <area target="" alt="LLC-CONC" title="LLC-CONC" href="" coords="310,123,330,40,366,52,334,131" shape="poly">
            <area target="" alt="LLC-DIV" title="LLC-DIV" href="" coords="333,131,366,52,400,70,355,143" shape="poly">
            <area target="" alt="LLC-APO" title="LLC-APO" href="" coords="355,143,400,70,432,93,376,158" shape="poly">
            <area target="" alt="LLC-MAT" title="LLC-MAT" href="" coords="376,158,432,93,460,123,394,177" shape="poly">
            <area target="" alt="LLC-DOC" title="LLC-DOC" href="" coords="394,177,461,122,483,155,408,197" shape="poly">
            <!-- <area target="" alt="Equipes especializadas de LOG" title="Equipes especializadas de LOG" href="" coords="66,153,45,142,56,126,65,114,74,103,85,91,97,79,110,67,124,58,137,48,152,40,168,32,183,26,205,19,226,14,246,11,263,10,281,10,302,11,322,14,344,19,361,25,377,31,395,39,409,47,424,57,437,66,456,83,470,98,483,112,494,127,504,143,482,155,472,138,460,122,446,106,432,93,416,79,400,69,386,60,369,52,353,46,330,39,309,35,292,33,274,33,254,34,234,36,217,39,199,45,180,52,162,61,145,71,130,82,114,96,100,108,88,122,76,137" shape="poly">
            -->
            <!-- GESTÃO SETORIAL OFC -->
            <area target="" alt="Gestão Setorial OFC" title="Gestão Setorial OFC" href="gestaoOFC.html" coords="275,338,274,392,294,391,314,385,339,373,359,357,372,339,383,320,390,292,391,267,387,243,375,217,329,245,334,257,336,278,331,300,320,317,304,328,287,335,275,338,275,338" shape="poly">
            <area target="" alt="Coordenação Seccional OFC" title="Coordenação Seccional OFC" href="coordenaOFC.html" coords="274,428,275,393,300,390,320,383,340,372,356,359,368,346,375,335,384,316,389,294,391,273,390,254,386,239,380,228,375,217,407,198,414,209,419,220,425,239,428,253,429,271,428,286,426,302,420,323,415,338,407,356,394,372,380,387,366,398,356,405,342,413,322,421,300,426" shape="poly">
            <area target="" alt="OFC-MOBRA" title="OFC-MOBRA" href="#" coords="408,198,423,231,506,207,499,188,492,170,484,157,484,156" shape="poly">
            <area target="" alt="OFC-PJPF" title="OFC-PJPF" href="#" coords="423,231,429,268,516,262,511,232,507,216,505,207" shape="poly">
            <area target="" alt="OFC-PLAN" title="OFC-PLAN" href="#" coords="430,268,427,302,512,317,515,286,515,264" shape="poly">
            <area target="" alt="OFC-MREAB" title="OFC-MREAB" href="#" coords="427,303,416,336,494,371,505,339,510,317" shape="poly">
            <area target="" alt="OFC-DJPS" title="OFC-DJPS" href="#" coords="416,335,398,369,467,418,483,395,489,381,493,371" shape="poly">
            <area target="" alt="OFC-PESS" title="OFC-PESS" href="#" coords="398,368,374,392,429,457,447,439,460,427,466,416" shape="poly">
            <area target="" alt="OFC-BENEF" title="OFC-BENEF" href="#" coords="374,393,343,412,381,488,398,480,408,472,418,466,428,458" shape="poly">
            <area target="" alt="OFC-POB" title="OFC-POB" href="#" coords="343,412,309,424,330,508,350,502,365,496,375,491,382,489" shape="poly">
            <area target="" alt="OFC-CONT" title="OFC-CONT" href="#" coords="276,430,275,514,285,515,297,513,308,512,321,510,329,509,308,423,303,426,291,427,276,429,276,430" shape="poly" ">
            <!-- <area target="" alt="Equipes especializadas de OFC" title="Equipes especializadas de OFC" href="#" coords="275,539,316,536,356,527,384,515,407,503,430,489,450,472,472,451,492,426,516,384,532,339,539,288,538,254,534,219,526,192,515,166,505,145,484,156,494,176,502,196,509,218,513,242,516,269,513,302,508,330,500,354,487,385,476,405,458,427,442,445,424,461,407,474,382,489,357,499,331,508,312,511,293,514,274,515" shape="poly">
            -->
            <!-- GESTÃO SETORIAL ENGENHARIA -->
            <area target="" alt="Gestão Setorial ENG" title="Gestão Setorial ENG" href="gestaoENG.html" coords="172,216,220,243,213,260,212,280,217,301,228,316,242,328,259,335,275,337,275,393,254,391,231,384,208,372,188,355,174,335,162,312,156,285,156,262,161,239" shape="poly">
            <area target="" alt="Coordenação Seccional ENG" title="Coordenação Seccional ENG" href="coordenaENG.html" coords="173,216,167,227,163,238,159,251,157,265,156,276,157,289,160,302,164,315,170,327,176,337,183,349,189,355,196,362,207,371,219,377,230,382,239,385,254,389,264,392,274,392,274,429,260,428,246,425,230,423,214,416,198,409,183,399,169,387,158,375,145,358,135,342,127,324,122,304,119,284,120,259,122,243,125,228,133,211,141,197" shape="poly">
            <area target="" alt="ENG-SERV" title="ENG-SERV" href="engSERV.html" coords="175,392,195,407,212,415,231,423,252,428,274,429,274,514,254,514,227,510,203,504,178,495,155,483,135,470,121,458" shape="poly">
            <area target="" alt="ENG-FISC" title="ENG-FISC" href="engFISC.html" coords="121,300,127,321,135,342,146,361,158,376,175,393,119,459,100,441,87,425,72,404,57,377,45,347,37,315" shape="poly">
            <area target="" alt="ENG-PATRI" title="ENG-PATRI" href="engPATRI.html" coords="141,197,127,227,121,252,120,275,122,301,36,315,33,282,35,245,41,215,51,182,65,154" shape="poly">
            <!-- <area target="" alt="Equipes especializadas de ENG" title="Equipes especializadas de ENG" href="" coords="274,514,275,539,253,538,228,535,202,529,181,522,158,512,139,502,117,486,102,474,80,454,66,438,49,413,37,392,27,368,19,343,13,314,10,286,10,256,14,228,19,205,26,184,34,163,44,142,67,155,56,175,49,190,43,209,38,230,34,254,33,278,34,298,37,316,43,342,52,365,60,385,74,408,86,425,99,440,114,454,130,467,150,481,173,493,196,502,223,509,250,513" shape="poly">
            -->
        </map>
    </div>     
    
    <div class="tm1" style="color: white;">
        ©2021 - SRV - Todos os direitos reservados
    </div>
        
    <!-- JavaScripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.maphilight.min.js"></script>
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
<!--
?php 
else: header("Location: index.php"); endif;
?>
-->