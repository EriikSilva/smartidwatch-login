<?php
	
	session_start();             ////DA ACESSO AS VARIAVEIS DE SESSÃO

	require_once('bd_sidw.php');


			//name
	$usuario = $_POST['usuario_login'];
	$senha = $_POST['senha_login'];


	$sql = "SELECT nome, email, rg, cpf, cnh FROM usuarios WHERE nome = '$usuario' AND senha = '$senha'";
	
	$objdb = new bd_sidw();
	$link = $objdb->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql); //retorna uma consulta,, caso for false retorna erro
	



	if($resultado_id){

	$dados_usuario = mysqli_fetch_array($resultado_id);

	if(isset($dados_usuario['nome'])){

		$_SESSION['nome'] = $dados_usuario['nome'];	
		$_SESSION['email'] = $dados_usuario['email'];
		$_SESSION['rg'] = $dados_usuario['rg'];
		$_SESSION['cpf'] = $dados_usuario['cpf'];
		$_SESSION['cnh'] = $dados_usuario['cnh'];

		header('Location: home.php');
		
	}else{	
		header('Location: index.php?erro=1');  //ERRO 1 = usuario nao existe (GET)
	}

	}else{
		echo "ERROR NA CONSULTA ou ERRO DE SINTAX";
	}

	

	



?>