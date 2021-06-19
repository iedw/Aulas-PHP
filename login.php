<?php

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == 'admin' and $senha = '123456'){
        session_start();
        $_SESSION['usuario'] = $usuario;
        echo 'Bem vindo meu peixe '.$_SESSION['usuario'];
    }else{
        echo 'Acesso NEGAdo';
    }

?>