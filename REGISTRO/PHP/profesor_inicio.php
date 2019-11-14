<?php  
session_start();

include('conexion.php');

$carnet = $_POST["TCarnet"];
$password =$_POST["CONTRASENA"];

$query= 
mysqli_query($conexion,"SELECT * FROM login_profesores WHERE CARNE = '".$carnet."' and CONTRASEÑA ='".
	$password."'");
$nr=mysqli_num_rows($query);

if($nr==1){

	header('Location:../../REGISTRO-PREGUNTAS/docente_inicio.html');

}else{
	echo "Registro no encontrado";
	
	
};




?>