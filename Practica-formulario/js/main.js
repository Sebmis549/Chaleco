function validar(){
	var nom, ape, correo, tel, contra;
	nom = document.getElementById('first_name').value;
	ape = document.getElementById('last_name').value;
	correo = document.getElementById('email').value;
	tel = document.getElementById('phone').value;
	contra = document.getElementById('password').value;

	if(nom==''){
		alert("Falta ingresar el nombre");
		document.getElementById('first_name').focus();
		document.getElementById('first_name').style.background="purple";
		return false;
	}else 
	if(ape==''){
		alert("Falta ingresar el apellido");
		document.getElementById('last_name').focus();
		document.getElementById('last_name').style.background="purple";
		return false;
	}else 
	if(correo==''){
		alert("Falta ingresar el correo");
		document.getElementById('correo').focus();
		document.getElementById('correo').style.background="purple";
		return false;
	}else 
	if(tel==''){
		alert("Falta ingresar el telefono");
		document.getElementById('phone').focus();
		document.getElementById('phone').style.background="purple";
		return false;
	}else 
	if (isNaN(tel)){
		alert("Solo se aceptan numeros");
		return false;
	}
	if(contra==''){
		alert("Falta ingresar el contraseña");
		document.getElementById('password').focus();
		document.getElementById('password').style.background="purple";
		return false;
	}else if(nom.length>10){
		alert("Se aceptan 10 caracteres");
		return false;
	}else if(contra.length<8 || contra.length>15){
		alert("De 8 a 15 caracteres en contraseña");
		return false;
	}else if(tel.length != 10){
		alert("Solo telefonos con 10 digitos");
		return false;
	}else if(correo.length < 10){
		alert("Correo invalido");
		return false;
	}
}
