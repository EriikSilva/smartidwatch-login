<?php
	

?>

<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registro - ID WATCH</title>

    <link rel="icon"  href="img/logo-governo.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estiloRegistro.css"></head>



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

         

          <a href="index.php" class="navbar-brand">
             <span class="img-logo">Logo-examples</span>
         </a>
         
         <h2 class="cor-titulo">ID WATCH</h2>

        </div>
        <!--Barra de navegação-->
        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right">
            
            <li><a class="btn btn-success" href="index.php">Logar</a></li>
            <li><a class="btn btn-info" href="about.html">Documentos</a></li>
            <li><a class="btn btn-primary" href="index.html">SAIR</a></li>
          
          </ul>
        </div>
        


      </div><!--Container-->

    </nav><!--Navbar-->

	

    <!--Menu-->
    <div class="container">
      <div class="jumbotron"> <!--Formatação da parte cinza-->
        <div align="center"> 

	  <h2>PÁGINA DE CADASTRO</h2>
        <br><br>


	<form method="post" action="registro_usuario.php" id="formRegistro">

<!--			<label>
				Nome:
					<input type="text" id="usuario" name="nome_registro">
			</label>
-->
		  <div class="form-group">
          		<label for="usuario">NOME:</label>
         	 	<input class="form-control" type="text" id="usuario" name="nome_registro" placeholder="Nome Completo">
      	  </div>

<!--			
				Email:
					<input type="Email" id="email" name="email_registro">
	-->		
      	<div class="form-group">
          <label for="email">EMAIL:</label>  
          <input  class="form-control" type="email" id="email" name="email_registro" placeholder="Ex:Email@gmail.com">
      	</div>


<!--
			<label>
				Senha:
					<input type="password" id="senha" name="senha_registro">
			</label>
		-->	
      <div class="form-group">
          <label for="senha">SENHA:</label>
          <input class="form-control" type="password" id="senha" name="senha_registro">
      </div>	

    <br><br>
      <h2>INFORMAÇÕES PESSOAIS</h2>
      <br><br>

      <div class="form-group">
          <label for="cep">CEP</label>
          <input type="text" class="form-control" name="cep_registro" id="cep_registro" placeholder="Obrigatório" maxlength="8">
      </div>

       <div class="form-group">
           <label for="rua">Rua</label>
           <input type="text" class="form-control" name="rua_registro" id="rua_registro" placeholder="Ex:Rua Cézar Mariano">
       </div>

        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input id="complemento" type="text" class="form-control"  name="complemento" id="complemento" placeholder="Ex: Apto. Bloco. Prédio">
        </div>

        <br>

     <h2>DOCUMENTOS</h2>


<!--		<label>
				RG:
					<input type="text" name="rg_registro">
			</label>
-->
		<div class="form-group">
              <label for="id_rg">RG</label>
             <input class="form-control" type="text" id="id_rg" name="rg_registro"  placeholder="Obrigatório" maxlength="8">
        </div>

<!--
			<label>
				CPF:
					<input type="text" name="cpf_registro">
			</label>
-->			
		  <div class="form-group">
              <label for="id_cpf">CPF</label>
              <input  class="form-control"type="numbers" id="id_cpf" name="cpf_registro"  maxlength="11" placeholder="Obrigatório">
         </div>	

<!--			<label>
				CNH:
					<input type="text" name="cnh_registro">
			</label>
-->			
         <div class="form-group">
              <label for="id_cnh">CNH</label>
              <input class="form-control" type="text" id="id_cnh" name="cnh_registro" placeholder="Numero do Registro"  maxlength="8">
        </div>

			<!--
			<label>
				CEP:
					<input type="text" name="cep_registro">
			</label>
			<br>
			<label>
				Rua:
					<input type="text" name="rua_registro">
			</label>
			
			<br>

				-->


        <br><br>

        <h3>Sexo</h3>

        <input type="radio" name="opcoes" id="m"> 
           
          <label> Masculino </label>           
             <input type="radio" id="f" name="opcoes" > 
          <label>Feminino</label>

             <br><br>

              <label>
                <input type="checkbox" id="aceite" name="aceitar" > Aceito os termos do serviço
              </label>


          <br><br>
				<br>

			<button class="btn btn-primary" type="submit" onclick="return validar()">Registre-se</button>
	</form>

       </div> <!--Jumbotron-->
      </div> <!--Container-->
  </div><!--Necessario-->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
   

</body>
</html>