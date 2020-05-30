<?php
	
	class bd_sidw{

		//host
		private $host = 'localhost';
		
		//usuario
		private $usuario = 'root';
		
		//senha
		private $senha = '';
		
		//banco de dados
		private $database = 'db_sidw';

		public function conecta_mysql(){

			//criar conexão
			$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

			//setar linguagem
			mysqli_set_charset($con, 'utf8'); 

			//verifica se houve erro
			if (mysqli_connect_errno()) { //mysqli_connect_errno() "apresenta o erro"
				echo "Error". mysqli_connect_error();
			}

			return $con;

		}

	}

	
?>