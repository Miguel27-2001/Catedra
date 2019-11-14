<?php  
session_start();
include('conexion.php');




$carnet = $_POST["TCarnet"];
$password =$_POST["CONTRASENA"];

$query= mysqli_query($conexion,"SELECT * FROM login_alumnos WHERE CARNE = '".$carnet."' and CONTRASEÑA ='". 
	$password."'");
$nr=mysqli_num_rows($query);

if($nr==1){

	header('Location:../../TEST-USUARIO/INICIO.html');

}else{
	echo "Registro no encontrado";
	
};







?>