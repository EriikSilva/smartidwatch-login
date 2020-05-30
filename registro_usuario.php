<?php
		
	require_once('bd_sidw.php');

	$nome = $_POST['nome_registro']; //utilizando os names
	$email = $_POST['email_registro'];
	$senha = $_POST['senha_registro'];
	$cep = $_POST['cep_registro'];
	$rua = $_POST['rua_registro'];
	$cpf = $_POST['cpf_registro'];
	$rg = $_POST['rg_registro'];
	$cnh = $_POST['cnh_registro'];

	$objdb = new bd_sidw();
	$link = $objdb->conecta_mysql();


	$sql = "INSERT INTO usuarios(nome, email, senha, cep, rua, rg, cpf, cnh) VALUES ('$nome','$email','$senha','$cep', '$rua', '$rg','$cpf', '$cnh')";

	//, cep, rua, cpf, rg, cnh
	//,'$cep', '$rua', '$cpf','$rg','$cnh'

	//executar
 	//Conexao para função, dados do BD

	if(mysqli_query($link,$sql)){

		header("Location:sucesso.html");



		//echo "Usuario registrado";

		


	}else{

		echo "Erro ao registrar";
				
	}

?>