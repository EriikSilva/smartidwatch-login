function validar() {
var nome = formUser.nome.value;
var email = formUser.email.value;
var senha = formUser.senha.value;
var rep_senha = formUser.rep_senha.value;
var CEP = formUser.cep.value;
var CPF = formUser.cpf.value;
var RG = formUser.rg.value;
var valide = document.getElementById('aceite').checked;

var validRadioMasc = document.getElementById('m').checked;
var validRadioFem = document.getElementById('f').checked;

var radioCheck = (validRadioMasc || validRadioFem);


// NOME ////
	if (nome == "") {
		alert('PREENCHA O CAMPO COM SEU NOME COMPLETO');
		formUser.nome.focus();
		return false;
	}


// EMAIL ////
	if (email == ""){
		alert('PREENCHA O CAMPO EMAIL');
		formUser.email.focus();
		return false;
	}else if(!email.includes('@')){
		alert('EMAIL INVALIDO, INCLUA O @');
		formUser.email.focus();
		return false;
	}

	///SENHA///

	if (senha != rep_senha || senha == "") {
	alert('SENHAS NAO IGUAIS');
	formUser.senha.focus();
	return false;
	}
	//CEP///
	
	if(CEP == ""){
		alert('PREENCHA O CAMPO CEP!');
		formUser.cep.focus();
		return false;
	}
	

	if (CPF == ""){
		alert('PREENCHA O CAMPO CPF');
		formUser.cpf.focus();
		return false;
	}else if(CPF.length < 11){
		alert('DIGITE SEU CPF COMPLETO');
		formUser.cpf.focus();
		return false;
	}
	

	if(RG == ""){
		alert('PREENCHA SEU RG');
		formUser.rg.focus();
		return false;
	}else if(RG.length < 8){
		alert('PREENCHA O CAMPO RG COM TODOS OS 8 DIGITOS');
		formUser.rg.focus();
		return false;
	}
	
	if (radioCheck == false) {
	alert('ESCOLHA MASCULINO OU FEMININO');
	return false;
}
	if (valide == false){
			alert('Aceite os termos do serviço');
			formUser.aceitar.focus();
			return false;
	}







}
