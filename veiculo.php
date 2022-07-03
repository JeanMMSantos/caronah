<?php

include_once("conecta.php"); // Inclui a classe conecta


function insereVeiculo($placa, $cor, $modelo, $ano, $tipo) {
     echo "Aqui insere";
     // Define o comando SQL  (insert)
     $sql = "INSERT INTO veiculos(placa, cor, modelo, ano, tipo) 
         VALUES('$placa', '$cor', '$modelo', '$ano', '$tipo')";
     $conexao = abreConexao(); // Abre a conexão com o BD
     $conexao->query($sql); // Executa o comando SQL
     $conexao->close(); 	// Fecha a conexão com o BD
 }

 function retornaVeiculo() {
	$sql = "SELECT * FROM veiculos ORDER BY placa";
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