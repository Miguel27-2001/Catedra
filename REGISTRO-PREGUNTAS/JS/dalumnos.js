//Arreglo para guardar todos los registros
registro=[];
//variables para contar alumanos
contador=0;
suma=0;

function agregarAlumnos(){
	//Agregar datos a registro
	pre= document.getElementById('pregunta').value;
	res1= document.getElementById('respuesta1').value;
	res2= document.getElementById('respuesta2').value;
	res3= document.getElementById('respuesta3').value;
	res4= document.getElementById('respuesta4').value;
	tiempo=document.getElementById('tiempo').value;
	datos= new Array(pre,res1,res2,res3,res4,tiempo);
	registro[contador]=datos;
	contador++;
}


function mostrar_registro(){
	
	texto="<table class='table'>"
	for (i=0; i<registro.length; i++) {
		
		texto+="<center><tr><td colspan='5'>¿"+registro[i][0]+"?</td></tr></center>"
		for (j=0; j<1; j++) {
		texto+="<td>a) "+registro[i][1]+"</td>"
		texto+="<td>b) "+registro[i][2]+"</td>"
		texto+="<td>c) "+registro[i][3]+"</td>"
		texto+="<td>d) "+registro[i][4]+"</td>"
		texto+="<td>Tiempo de respuesta: "+registro[i][5]+" Segundos</td>"
	}
	}
	
	texto+="</table>"
	document.getElementById('mostrar').innerHTML=texto;
	
	

}

function Extraer_alumno(){
	texto1=registro[i][3];
	document.getElementById('mostrar1').innerHTML=texto1;
}
