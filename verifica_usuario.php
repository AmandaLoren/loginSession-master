<?php

	session_start();
    $login = $_POST['login'];
    $senha = $_POST['senha'];

	if ($login == "admin" && $senha == "admin") {
	 
     $_SESSION['usuario_nome']   = $_POST['nome'];
     $_SESSION['usuario_login']  = $login;
     $_SESSION['usuario_senha']  = $senha;
     $_SESSION['usuario_online'] = true;

      
        header('Location: index.php');
	} else {
        header('Location: login.php');
        
       
    }
       
