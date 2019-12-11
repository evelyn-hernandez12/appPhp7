<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Science Technology Engineerig & Mathematics</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
    <section id="contenedor">
    <header id="gridHeader">
    <h1>Science Technology Engineerig & Mathematics</h1>
    <h2>Resolver problemas de Ciencia e Ingeniería con JS</h2>
    <h2>Nombre: Evelyn Monserrat Hernández Sagal  No. de control: 17091068</h2>
    <img src="selfie.jpeg" alt="su foto" width="120px" height="100px">
    </header>
    </section>
    <section id="problema"  class="gridProblema">
      <section id=descripcion>
            <h2><center>Problema: Calcular la aceleración angular.</center></h2>
            <p>Descripción:</p>
            <p>La hélice de una turbina adquirió una velocidad angular cuya magnitud es de 6500 rad/s en 4 segundos.
            ¿Cuál fue la magnitud de su aceleración angular? <br>
      </section>
      <section id="datos">
            <h2>Datos:</h2>
            w = 6500 rad/s <br>
            t = 4 s <br>
            θ = 26000 rad <br>
      </section>
      <section id="formulas">
            <h2>Fórmulas:</h2>
            w = θ/t
            α = w/t
      </section>
      <section id="solucion">
            <h2>Solución:</h2>
            <p>La aceleración angular es:<br>
             w = 6500/4</p> 
      </section>

      <section id="resultado">
        <h2>Resultado:</h2>
        <p>¿Cuál fue la magnitud de su aceleración angular? </p>
		<?php
		function solucion(){
        $velocidad=6500;
        $tiempo=4;
        $aceleracion=$velocidad/$tiempo;
        echo "α = ".$aceleracion." rad/s²";
        }
		solucion();
		?>
      </section>
    </section>
    <footer id="gridPie">
        <p>Solution Science Problems. 2019 Creative Commons 3.0</p>
    </footer>
</body>
</html>
