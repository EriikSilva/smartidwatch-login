<?php
	
	session_start();

	if(!isset($_SESSION['nome'])){
		header('Location: index.php?erro=1');   //verifica a autenticação ou seja se a variavel de sessão não foi iniciada
		 										//a pagina ira redirecionar para inder erro=1

	}
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bem-Vindo - ID WATCH</title>

    <link rel="icon"  href="img/logo-governo.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href=" css/estiloLogin.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

         

          <a href="login.html" class="navbar-brand">
             <span class="img-logo">Logo-examples</span>
         </a>
         
         <h2 class="cor-titulo">ID WATCH</h2>

        </div>
        <!--Barra de navegação-->
        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right">
            
            
            <li><a class="btn btn-warning" href="encomendar-terminal.html">Encomendar Terminal</a></li> 
            <li><a class="btn btn-primary" href="sair.php">Sair</a></li>
          
          </ul>
        </div>
        


      </div><!--Container-->
    </nav><!--Navbar-->


 <!--Menu-->
    <div class="container">
      <div class="jumbotron"> <!--Formatação da parte cinza-->
        <div align="center"> 
       
          <img class="formatacao-imagem" src="img/user.png">
          <br><br><br>

          <h1 align="center">Bem-Vindo <?= $_SESSION['nome']; ?></h1>
          <h3><?=	$_SESSION['email']; ?></h3>
          <div align="center">
         	<br><br><br><br> 
 
         	<h1>REGISTROS</h1> 


          </div>          

        

          <p>________________________________________________________________________________________</p>
      

          <p></p>


 <!--         <h2>Documentos Cadastrados</h2>
          <div class="img-doc">
          <img class="img-tam-doc" src="img/RG.png">

          <img class="img-tam-doc" src="img/CNH.png">

          <img class="img-tam-doc" src="img/titulo.png">

-->     

<center>  
		<h2>
		RG: 
			<?= $_SESSION['rg']; ?>
		</h2>

		<h2>
		CPF:
			<?= $_SESSION['cpf']; ?>
		</h2>

		<h2>
		CNH:
			<?= $_SESSION['cnh']; ?>
		</h2>

</center>
        <div class="clear"></div>

          </div>

  
        <div class="clear"></div>

       

    

        </div>  <!--Container-->
      </div><!--Jumbotron-->
  </div><!--Necessario-->

  <!--Rodape do site-->
  <div class="rodape footer" style="background-color: rgba(250,250,250,0.8)" >
  <p align="center">
    &copy; Todos os direitos SIDW
    <br>
Este site tem como reponsabilidade exercer o direito do cidadao ter seu proprio Smart ID, os documentos foram feitos em detalhes e todos as instruçoes e documentações estao localizadas na aba de documentos, onde se encontram basicamente o que ele é o que ele faz e etc, todos os direitos estao reservados para a empresa ficticia SIDW.
  </p>
</div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
 
</body>
</html>