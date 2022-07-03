<?php
    session_start();   
    include_once("usuario.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $logins = validaUsuario($email, $senha);

    if($logins == null){ 
        $_SESSION['login'] = false; ?>
    
        <meta http-equiv="refresh" content="0; URL='login.php?mensagem=ui'"/>

    <?php }else{  
        $_SESSION['login'] = true;
    ?>
        <meta http-equiv="refresh" content="0; URL='index.html'"/>
    <?php    }
    exit(1);  

?>