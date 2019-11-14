function REGISTRAR(){
	var Carne= document.getElementById('TCarnet').value;
	var Contraseña=document.getElementById("CONTRASEÑA").value;




for (var i = 0; i <5 ; i++) {
	var BD_JSON = {
      "Carne" : Carne,
      "Contraseña":Contraseña
	};
}


		console.log(BD_JSON);

}


