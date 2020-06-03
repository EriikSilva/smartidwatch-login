function login(){



	var login = document.getElementById("login").value;
	var pass = document.getElementById("senha").value;


	var email = Array("exemplo@gmail.com") 
	var senha = Array("Senha123");

	var index = 0;
	var logged = false;

	for(;index < 1;++index){

		if (login == ""){
			alert('PREENCHA O CAMPO LOGIN');
		}else if (pass == ""){
			alert('PREENCHA O CAMPO SENHA');
		}
		else if(login == email[index] && pass == senha[index]){
			logged = true;
		}else{
			alert('TALVEZ VOCÊ NÃO ESTEJA CADASTRADO!!!!, (DIGITE O LOGIN ABAIXO)');
		}

		if (logged){
			window.location = 'login.html';
		}

	}




}
