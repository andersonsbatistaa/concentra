<?php

require 'conexao.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){
    require_once 'usuario.php';
    $user = new Usuario();

    $listLogged = $user->loginId($_SESSION['idUser']);
    $nomeUser =   $listLogged['nome'];
}else{
    header("Location: login.php");
}

?>