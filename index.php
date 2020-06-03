<?php
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0; 
				//condição         caso falso    : caso verdadeira
	//BUG FIXED: pagina principal relatava um erro ao iniciar
	

	
?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login - ID WATCH</title>

    <link rel="icon"  href="img/logo-governo.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

	<script>  
			$(document).ready(function (){ //checa se a query esta pronta   (JQUERY)

				//preencher login e senha
				$('#btn_login').click( function(){

				

					if($('#campo_usuario').val() == ''){
 						alert('Preencha o Campo Usuário');
 					
					}

					if($('#campo_senha').val() == ''){
 						alert('Preencha o Campo Senha');

					}

					

				});


			});	

	</script>

</head>
<body>

	  <!--Titulo-->
    <nav class="nav navbar-sticky-top navbar-inverse navbar-edit">

      <div class="container">

        <!--Header-->
        <div class="navbar-header ">

          <!--Botao Toggle/Responsivo-->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">  
            <span class="sr-only">Alternar Navegação</span>

            <span class="icon-bar"></span>  
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

         

          <a href="index.html" class="navbar-brand">
             <span class="img-logo">Logo-examples</span>
         </a>
         
         <h2 class="cor-titulo">ID WATCH</h2>

        </div>
        <!--Barra de navegação-->
        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right">
            
           
            <li><a class="btn btn-info" href="about.html">Documentos</a></li>
            <li><a class="btn btn-primary" href="index.html">Principal</a></li>
          
          </ul>
        </div>
        
      </div><!--Container-->
    </nav><!--Navbar-->


    <!--Menu-->
<center>    
    <div class="container">
      <div class="jumbotron"> <!--Formatação da parte cinza-->
        <div align="center"> 

       <form method="post" action="validar_acesso.php" id="formLogin">

          <div class="form-group">

            <label>NOME:</label>
            <input  class="form-control " type="text" name="usuario_login" id="campo_usuario">

          </div>

          <div class="form-group"> 
              
            <label>SENHA:</label>
            <input class="form-control " type="password" name="senha_login" id="campo_senha">

          </div>

          <input class="btn btn-primary" type="submit" id="btn_login" onclick="return login()" value="Entrar">
          <br><br>
          <a  class="btn btn-info" href="registro.php">Registre-se</a>

        
          </form>

        </div> <!--Jumbotron-->
      </div> <!--Container-->
  </div><!--Necessario-->

</center>







<!--
	<h1>Pagina Principal</h1>
		<br><br>

	<form method="post" action="validar_acesso.php" id="formLogin">
		<label>
			Usuario:
				<input type="text" name="usuario_login" id="campo_usuario">
		</label>

		<label>
			Senha:
				<input type="password" name="senha_login" id="campo_senha">
		</label>

		<button type="submit" id="btn_login" >Login</button>

		<a href="registro.php">Registre-se</a>
	</form>
-->

	<!--Caso senha ou user sejam incorretas-->

	<?php
		if($erro == 1){
			echo "<br><br>";
			echo "<font color = '#FF0110'>
			 Usuário e ou Senha Invalidos(s)
			 		 </font>";
		}
	?>
	

	



</body>
</html>