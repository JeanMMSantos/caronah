<?php
    include_once("veiculo.php");
        
    $placa = $_POST["placa"];
    $cor = $_POST["cor"];
    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];
    $tipo = $_POST["tipo"];

    insereVeiculo($placa, $cor, $modelo, $ano, $tipo);
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