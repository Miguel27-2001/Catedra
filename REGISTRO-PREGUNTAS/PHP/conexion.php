<?php 
//Datos de la base de datos
$usuario= "root";
$password= "";
$servidor= "localhost";
$basededatos= "bd_daw";
//Creación de la conexión a la base de datos
$conexion= mysqli_connect($servidor,$usuario,$password)or die("Error, no estas conectado al servidor");

//Seleccionar la base de datos a utilizar
$db= mysqli_select_db($conexion,$basededatos) or die("Error, no estas conectado a la base de datos");

 ?>