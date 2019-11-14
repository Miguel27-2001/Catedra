<?php



//HACES UNA CONSULTA PARA VER TODOS LOS REGISTROS QUE EXISTEN EN ESTA TABLA USUARIO
$sql="SELECT * FROM usuario";
$resultado = $conexion->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Registros</h1>

	<table>
          <thead>
            <tr align="center">
              <th>ID</th>
              <th>USUARIO</th>
              <th>CONTRASEÑA</th>
              <th>NOMBRE</th>
              <th>CORREO</th>
              <th>TIPO USUARIO</th>
              
            </tr>
          </thead>
          <tbody>
          <?php
          //LOS CAMPOS QUE ESTAN EN AMARILLO SON LOS NOMBRES QUE ESTAN EN LA BASE DE DATOS
          //TIENEN QUE IR EXACTAMENTE IGUAL
          while ($fila=$resultado->fetch_ASSOC()){?>
            <tr align="center">

                   <td><?php echo $fila['id'];?></td>
                   <td><?php echo $fila['usuario'];?></td>  
                   <td><?php echo $fila['password'];?></td>  
                   <td><?php echo $fila['nombre'];?></td>  
                   <td><?php echo $fila['correo'];?></td>  
                   <td><?php echo $fila['id_tipo'];?></td>
                   
            </tr>
        </tbody>
        </table>
          <?php } ?>

</body>
</html>