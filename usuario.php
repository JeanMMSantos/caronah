<?php

include_once("conecta.php"); // Inclui a classe conecta


function insereUsuario($nome, $cpf, $endereco, $email, $senha) {
     echo "Aqui insere";
     // Define o comando SQL  (insert)
     $sql = "INSERT INTO usuario(nome, cpf, endereco, email, senha) 
         VALUES('$nome', '$cpf', '$endereco', '$email', '$senha')";
     $conexao = abreConexao(); // Abre a conexão com o BD
     $conexao->query($sql); // Executa o comando SQL
     $conexao->close(); 	// Fecha a conexão com o BD
 }

 function retornaUsuario() {
	$sql = "SELECT * FROM cursos ORDER BY nome";
	$conexao = abreConexao(); # Abre a conexão com o BD
	$resultado = $conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
	if (mysqli_num_rows($resultado) > 0) {
		 while ($row = mysqli_fetch_array($resultado)) {
			  $curso[] = $row;
		 }
		 return $curso;
	} else {
		 return null;
	} 
}

function validaUsuario($email, $senha) {
	$sql = "SELECT * FROM usuario WHERE email = '".$email."' AND senha = '".$senha."';";
	$conexao = abreConexao(); // Abre a conexão com o BD
	$resultado = $conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
	if (mysqli_num_rows($resultado) > 0) {
		$pessoa = mysqli_fetch_array($resultado);
		return $pessoa;
	} else {
		return null;
	} 
}

?>