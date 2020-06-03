function validarRadio(){

	var validarPreto = document.getElementById('p').checked;
	var validarBranco = document.getElementById('b').checked;

	var validarRelogio = (validarPreto || validarBranco);
	
	
	if (validarRelogio == false){
		alert('Escolha Uma Das Opçoes Abaixo');
		return false;
	}

}