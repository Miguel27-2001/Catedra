<?php
include("conexion.php");
mysqli_set_charset($conexion,"utf8");


	//Recibo datos del formulario
	$Pregunta= $_POST["pregunta"];
    $R1= $_POST["respuesta1"];
	$R2= $_POST["respuesta2"];
	$R3= $_POST["respuesta3"];
	$R4= $_POST["respuesta4"];
	//Establecer y realizar una consulta MYSQL
	$Consulta="INSERT INTO `datos_preguntas`(`Pregunta`,`Respuesta1`, `Respuesta2`, `Respuesta3` , `Respuesta4`) VALUES ('".$Pregunta."','".$R1."','".$R2."','".$R3."','".$R4."')";

	$resultado= mysqli_query($conexion,$Consulta) or die('<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>');

  echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong> Datos almacenados correctamente.
</div>';


header('Location:../Ingresar_preguntas.html');

	//cierro la conexión
	mysqli_close($conexion);

 ?>
