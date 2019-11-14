<?php
include("conexion.php");
mysqli_set_charset($conexion,"utf8");


	//Recibo datos del formulario
	$Carne= $_POST["TCarnet"];
	$Contraseña= $_POST["CONTRASENA"];
	//Establecer y realizar una consulta MYSQL
	$Consulta="INSERT INTO `login_profesores`(`CARNE`, `CONTRASEÑA`) VALUES ('".$Carne."','".$Contraseña."')";

	$resultado= mysqli_query($conexion,$Consulta) or die('<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>');

  echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong> Datos almacenados correctamente.
</div>';
header('Location:../Menu.html');

	//cierro la conexión
	mysqli_close($conexion);

 ?>
