<?php
	
	session_start();

	unset($_SESSION['nome']);          //UNSET ELIMINA A VARIAVEL SESSION ATUAL
  	unset($_SESSION['email']);
  	unset($_SESSION['rg']);
  	unset($_SESSION['cpf']);
  	unset($_SESSION['cnh']);


  	echo "LOGOUT REALIZADO";


?>

<br><br>

<a href="index.html" type="button">Voltar Para a Pagina Principal</a>
