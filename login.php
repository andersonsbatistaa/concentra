<!DOCTYPE html>
<html>
<head>
	<!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="login.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="./img/favicon.png">
	<title>Identificação de Usuário</title>
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

    <div class="bufferlogin col-12"></div>

    <div class="tm0" style="position: center"> 
      <nav class="navcc text-center">
            <img src="./img/logo-concentra.png" title="Identificação de usuário" alt="Identificação de usuário"
            width="400px" height="auto">
            </img>
        </nav>
      <main class="pa1 black-80">
          <!-- Formulário de Login -->      
          <form class="form" action="logar.php" method="POST" id="login">
            <fieldset>
              <legend class="bold text-center">Login</legend>
              <div>
                <label for="email">E-mail:</label>
                <input class="input-reset w-100 form__input" type="text" name="email"  id="email" autofocus placeholder="nome.sobrenome">
              </div>
              <div>
                <label for="password">Senha:</label>
                <input class="input-reset w-100 form__input" type="password" name="senha"  id="senha" autofocus placeholder="senha">
              </div>              
            </fieldset>
            <div class="d-flex">
              <div class="flex-grow-0">
                <input class="Lembrar" type="checkbox">
              </div>
              <div class="flex-grow-1" >
                <label class="black-80">Lembrar</label>
              </div>
              <div class="flex-grow-1"></div>
              <div class="flex-grow-1"></div>
              <div class="flex-grow-1"></div>
              <div class="flex-grow-1">
                <input id="acessar" href="./arearestrita.php" class="input-reset grow pointer" type="submit" value="Acessar">
              </div>
            </div>
          </form>
      </main>
    </div>
    
    <div class="bufferlogin col-12"></div>

    <div class="tm1">
        <p style="color: white;" > ©2021 - SRV - Todos os direitos reservados</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./login.js"></script>
     
</body>
</html>