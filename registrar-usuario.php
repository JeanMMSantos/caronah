<?php
    include_once("usuario.php");
        
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    insereUsuario($nome, $cpf, $endereco, $email, $senha);
?>
    <meta http-equiv="refresh" content="0; URL='index.html?mensagem=ui'"/>
<?php
    

    /* if($logins == null){ 
        $_SESSION['login'] = false; ?>
    
        <meta http-equiv="refresh" content="0; URL='cadastro.php?mensagem=ui'"/>

    <?php }else{  
        $_SESSION['login'] = true;
    ?>
        <meta http-equiv="refresh" content="0; URL='login.php'"/>
    <?php    }
    exit(1);   */

?>