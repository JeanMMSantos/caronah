<?php
    include_once("carona.php");
        
    $horario = $_POST["horario"];
    $valor = $_POST["valor"];
    $vagas = $_POST["vagas"];
    $saida = $_POST["saida"];
    $destino = $_POST["destino"];
    $parada1 = $_POST["parada1"];
    $parada2 = $_POST["parada2"];
    $parada3 = $_POST["parada3"];
    $parada4 = $_POST["parada4"];
    $parada5 = $_POST["parada5"];
    $veiculo = $_POST["veiculo"];

    insereCarona($horario, $valor, $vagas, $saida, $destino, $parada1, $parada2, $parada3, $parada4, $parada5, $veiculo);
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