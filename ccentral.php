<!DOCTYPE html>
<html>
<head>
	<!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="ccentral.css" rel="stylesheet" type="text/css">
           
	<title>Coordenação Central</title>
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
    
    <div class="navcc d-flex flex-grow-1">
        <h3>Bem-vindo à Coordenação Central</h3>
        <nav class="">                
            <a id="paginaInicial" href="arearestrita.php">
                <img src="./img/homepage.png" width="50px" height="50px" 
                title="Página Inicial" alt="Página Inicial">
            </a>
        </nav>
    </div>      

    <div class="card text-left">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="true" href="ccentral.php">Atribuições</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ccComponentes.php">Componentes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ccUnidades.php">Unidades Vinculadas</a>
            </li>           
            </ul>
        </div>
        <div class="card-body text-align: left">
            <ul>
                <li style="list-style-type:circle;"><h6>São atribuições da Coordenação Central:</h6></li>
                <li style="list-style-type:none;">I - Formular e implementar estratégias e mecanismos de integração, desenvolvimento e fortalecimento no âmbito das Equipes Especializadas, com base nos relatórios produzidos pela Gestão Setorial;</li>
                <li style="list-style-type:none;">II - Estabelecer e manter relacionamento efetivo com as instâncias que integram a estrutura criada para assegurar fluidez e racionalidade das ações voltadas à centralização da gestão de contratos;</li>
                <li style="list-style-type:none;">III - Planejar as ações de capacitação para as Equipes Especializadas, em articulação com a Divisão de Gestão de Pessoas;</li>
                <li style="list-style-type:none;">IV - viabilizar as convocações dos servidores das Equipes Especializadas.</li>           
            </ul>   
        </div>
    </div>
    
    <div class="navser p-2 d-flex justify-content-center">
        Navegue por serviço
    </div>
    
    <div class="zona d-flex justify-content-evenly">
        <div class="zonas">
            <img src="./img/log_transparent.png" class="card-img" alt="..." title="Gestão Setorial de Logística">
        </div>
        <div class="zonas">
            <img src="./img/ofc_transparent.png" class="card-img" alt="..." title="Gestão Setorial de Finanças">
        </div>
        <div class="zonas">
            <img src="./img/eng_transparent.png" class="card-img" alt="..." title="Gestão Setorial de Engenharia">
        </div>
    </div>
    
    <footer class="tm1"> ©2021 - SRV - Todos os direitos reservados
    </footer>
</body>

</html>