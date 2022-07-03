<?php

include_once("conecta.php"); // Inclui a classe conecta


function insereCarona($horario, $valor, $vagas, $saida, $destino, $parada1, $parada2, $parada3, $parada4, $parada5, $veiculo) {
     echo "Aqui insere";
     // Define o comando SQL  (insert)
     $sql = "INSERT INTO caronas(horario, valor, vagas, saida, destino, parada1, parada2, parada3, parada4, parada5, veiculo) 
         VALUES('$horario', '$valor', '$vagas', '$saida', '$destino', '$parada1', '$parada2', '$parada3', '$parada4', '$parada5', '$veiculo')";
     $conexao = abreConexao(); // Abre a conexão com o BD
     $conexao->query($sql); // Executa o comando SQL
     $conexao->close(); 	// Fecha a conexão com o BD
 }

 function retornaCarona() {
	$sql = "SELECT * FROM caronas WHERE horario>CURTIME() ORDER BY horario";
	$conexao = abreConexao(); # Abre a conexão com o BD
	$resultado = $conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
	if (mysqli_num_rows($resultado) > 0) {
		 while ($row = mysqli_fetch_array($resultado)) {
			  $veiculo[] = $row;
		 }
		 return $veiculo;
	} else {
		 return null;
	} }

?>