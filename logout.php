<?php
    //iniciar sessão
    session_start();
    //Finalizar sessão

    unset($_SESSION['idUser']);

    //Redirecionar para página de login
    header("Location: index.php");
?>