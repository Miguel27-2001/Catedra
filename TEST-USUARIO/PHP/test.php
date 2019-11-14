<?php

$conexion=mysqli_connect('localhost','root','','bd_daw');

?>


<html>
<head>
<title>T E S T</title>
<script type="text/javascript" src="resultado.js"></script>

<link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

<header><h2>PRUEBA.PAES 2018 LENGUAJE</h2></header>
<script type="text/javascript">
    function Timer(){
    /*alert("El tiempo para realizar la prueba ha finalizado");
    alert("Las respuesyas correctas son : \n PREGUNTA 1:A. Luego de narrar cómo fundaron el pueblo sin molestar al gobierno.\n PREGUNTA 2 : D.Argumentar sobre lo innecesario de un corregidor.\n PREGUNTA 3.A. Mostrar su desaprobación por la presencia del corregidor.\n PREGUNTA 4:D.El calentamiento global.")*/
        alert("En este momento, se cerrara la sesion de su cuenta");
        window.location="../INICIO.html";

    }
    setTimeout(Timer,600000);

    var cronometro;
    function carga(){
       contador_s=0;
     contador_m=0;
        s= document.getElementById("segundos");
        m= document.getElementById("minutos");
        var cronometro = setInterval(
            function(){
                if (contador_s==60) {
                    contador_s=0;
                    contador_m++;
                    m.innerHTML =contador_m;

                    if (contador_m==60) {
                         contador_m=0;
                    }
                }
                
            s.innerHTML =contador_s;
            contador_s++;
            },
            1000)
    }
    function CERRAR(){
        alert("En este momento, se cerrara la sesion de su cuenta");
        window.location="../INICIO.html";
    }
</script>
<center>
<body onload="carga()">
    <span>Tiempo :</span>
<span id="minutos">0</span>:<span id="segundos">0</span>



<table class="preguntas">
    <tr>
        <thead><tr><td id="tema">CUESTIONARIO</td></tr></thead>
        <tbody id="preguntas"><tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
    </tbody>
    </tr>

 

<?php
$sql="SELECT * FROM datos_preguntas";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){



?>
        <tr class="preguntas">
           <thead  class="pregunta"><tr><td><?php echo $mostrar['Pregunta']?></td></tr></thead> 
            <tbody><tr><td>A) <?php echo $mostrar['Respuesta1']?> </td></tr>
            <tr><td>B) <?php echo $mostrar['Respuesta2']?> </td></tr>
            <tr><td>C) <?php echo $mostrar['Respuesta3']?> </td></tr>
            <tr><td>D) <?php echo $mostrar['Respuesta4']?> </td></tr></tbody>
            
        </tr>

        <?php
}
?>
</table>
<br><br><br>
<div class="respuestasf">
    <h1>Seleccionar respuesta correcta</h1>
<center><article class="respuestas1">
    Pregunta 1: <br>
A) <input type="radio" name="p1" value="a" onClick="Motor(1, this.value)">
B) <input type="radio" name="p1" value="b" onClick="Motor(1, this.value)">
C) <input type="radio" name="p1" value="c" onClick="Motor(1, this.value)">
D) <input type="radio" name="p1" value="d" onClick="Motor(1, this.value)">
</article><br>
<article class="respuestas2">
Pregunta 2: <br>
A) <input type="radio" name="p2" value="a" onClick="Motor(2, this.value)">
B) <input type="radio" name="p2" value="b" onClick="Motor(2, this.value)">
C) <input type="radio" name="p2" value="c" onClick="Motor(2, this.value)">
D) <input type="radio" name="p2" value="d" onClick="Motor(2, this.value)">
</article><br>
<article class="respuestas3">
Pregunta 3: <br>
A) <input type="radio" name="p3" value="a" onClick="Motor(3, this.value)">
B) <input type="radio" name="p3" value="b" onClick="Motor(3, this.value)">
C) <input type="radio" name="p3" value="c" onClick="Motor(3, this.value)">
D) <input type="radio" name="p3" value="d" onClick="Motor(3, this.value)">
</article><br>
<article class="respuestas4">
Pregunta 4: <br>
A) <input type="radio" name="p4" value="a" onClick="Motor(4, this.value)">
B) <input type="radio" name="p4" value="b" onClick="Motor(4, this.value)">
C) <input type="radio" name="p4" value="c" onClick="Motor(4, this.value)">
D) <input type="radio" name="p4" value="d" onClick="Motor(4, this.value)">
</article><br>
<article class="respuestas5">
Pregunta 5: <br>
A) <input type="radio" name="p5" value="a" onClick="Motor(5, this.value)">
B) <input type="radio" name="p5" value="b" onClick="Motor(5, this.value)">
C) <input type="radio" name="p5" value="c" onClick="Motor(5, this.value)">
D) <input type="radio" name="p5" value="d" onClick="Motor(5, this.value)">
</article><br>
<article class="respuestas6">
Pregunta 6: <br>
A) <input type="radio" name="p6" value="a" onClick="Motor(6, this.value)">
B) <input type="radio" name="p6" value="b" onClick="Motor(6, this.value)">
C) <input type="radio" name="p6" value="c" onClick="Motor(6, this.value)">
D) <input type="radio" name="p6" value="d" onClick="Motor(6, this.value)">
</article><br>
<article class="respuestas7">
Pregunta 7: <br>
A) <input type="radio" name="p7" value="a" onClick="Motor(7, this.value)">
B) <input type="radio" name="p7" value="b" onClick="Motor(7, this.value)">
C) <input type="radio" name="p7" value="c" onClick="Motor(7, this.value)">
D) <input type="radio" name="p7" value="d" onClick="Motor(7, this.value)">
</article><br>
<article class="respuestas8">
Pregunta 8: <br>
A) <input type="radio" name="p8" value="a" onClick="Motor(8, this.value)">
B) <input type="radio" name="p8" value="b" onClick="Motor(8, this.value)">
C) <input type="radio" name="p8" value="c" onClick="Motor(8, this.value)">
D) <input type="radio" name="p8" value="d" onClick="Motor(8, this.value)">
</article><br>
<article class="respuestas9">
Pregunta 9: <br>
A) <input type="radio" name="p9" value="a" onClick="Motor(9, this.value)">
B) <input type="radio" name="p9" value="b" onClick="Motor(9, this.value)">
C) <input type="radio" name="p9" value="c" onClick="Motor(9, this.value)">
D) <input type="radio" name="p9" value="d" onClick="Motor(9, this.value)">
</article><br>
<article class="respuestas10">
Pregunta 10: <br>
A) <input type="radio" name="p10" value="a" onClick="Motor(10, this.value)">
B) <input type="radio" name="p10" value="b" onClick="Motor(10, this.value)">
C) <input type="radio" name="p10" value="c" onClick="Motor(10, this.value)">
D) <input type="radio" name="p10" value="d" onClick="Motor(10, this.value)">
</article><br>
<input type="button" value="RESULTADO" class="btn btn-gr" onClick="Puntuacion()">
<a href="../INICIO.html"><input type="button" value=" FINALIZAR TEST " class="btn btn-gr"/></a>
</center>
</div>

</body>
</center>
</html>
