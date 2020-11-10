<?php
session_start();
$servidor="localhost";
	$usuarioB="root";
	$contrasena="123";
	$bd="registro";
	$conexion=mysql_connect($servidor,$usuarioB,$contrasena);
$cbd=mysql_select_db($bd,$conexion);

if(isset($_SESSION['usuario'])){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
.wrap {
	width: 1250px;
	margin:auto;
	z-index:0;
}
nav{
background:#333333;
position:relative;
}
nav ul{
list-style:none;
padding: 10px 30px;
margin:0px;
border-radius: 10px;
overflow:hidden;
}
body{
background:url(imagenes/bg.jpg);
background-position:center;
}
nav > ul>li{
float:left;
}
nav ul li a{
text-decoration:none;
color:#CCCCCC;
display:table;
padding:2px 35px;
}
nav ul li a:hover{
background:#5476CF;
}
nav>ul>li:hover div{
display:table;
}

/*submenu*/
nav ul li div{
width:100px;
z-index:0;
position:absolute;
background:#009999;
box-sizing:border-box;
display:none;
}
.tabla tr:hover{
background:#DAF0FE;
}
</style>
</head>
<body>
<table align="center" width="1250px">
	<tr >
		<td width="20%"><img src="imagenes/mario.jpg" width="164" /></td>
		<td width="20"><img src="imagenes/capcom-logo.jpg" width="160"></td>
		<td width="40" align="center"><img src="imagenes/logo.png"></td>
		<td width="20"><img src="imagenes/pac-man.jpg" width="160"></td>
	</tr>
</table>
<div class="wrap">
		<nav>
		<ul>
			<li><a href="Inicio.php">Inicio</a></li>
			<li><a href="">Consolas</a>
				<div><ul>
					<li><a href="xbox360.php">Xbox360</a></li>
					<li><a href="playstation.php">PlayStation 3 y 4</a></li>
					<li><a href="nintendods.php">Nintendo</a></li>
				</ul></div>
			</li>
			<li><a href="">Categorias</a>
				<div><ul>
					<li><a href="accion.php">Acción</a></li>
					<li><a href="aventura.php">Aventura</a></li>
					<li><a href="puzzle.php">Puzzle</a></li>
					<li><a href="shooter.php">Shooter</a></li>
					<li><a href="estrategia.php">Estragia</a></li>
				</ul></div>
			</li>
			<li><a href="sucursales.php">Sucursales</a></li>
			<li><a href="">Plataforma</a>
				<div><ul>
					<li><a href="ventasxbox360.php">Xbox 360</a></li>
					<li><a href="juegosnintendo">Nintendo 3DS</a></li>
					<li><a href="ventasplay.php">PlayStation 3 y 4</a></li>
				</ul></div>
			</li>
			<li><a href="comentarios.php">Comentarios</a></li>
			<li><form action="buscar.php" method="post" name="buscar">
			  <input type="text" name="dato" />
			  <input name="submit" type="submit" value="buscar" /></form>
		  </li>
		  <li><a href="salir.php">Salir</a></li>
		</ul>
	</nav>
</div>
<h1 align="center"><font color="#FFFFFF">Xbox 360</font></h1>
<table  class="tabla" width="1250px" cellpadding="10" cellspacing="0" border="1" align="center">
  <tr bgcolor="#0099FF">
    <th scope="col"><font color="#0000FF">Titulo</font></th>
	<th scope="col" width="300px" ><font color="#0000FF">Descripción</font></th>
    <th scope="col"><font color="#0000FF">Plataforma</font></th>
    <th scope="col"><font color="#0000FF">Desarrollador</font></th>
    <th scope="col"><font color="#0000FF">Categoria</font></th>
    <th scope="col"><font color="#0000FF">Idioma</font></th>
	<th scope="col"><font color="#0000FF">Lanzamiento</font></th>
	<th scope="col"><font color="#0000FF">Tipo</font></th>
	<th scope="col"><font color="#0000FF">Precio</font></th>
  </tr>
  <tr bgcolor="#C8F2E4" onclick="location.href='juego1xbox.php'">
  	<td width="180px" align="center"><img src="imagenes/juego1xbox360.jpg" width="180px" height="200px"/><br>The Walking Dead: Michonne</td>
	<td align="justify">En el primer episodio de Michonne tenemos un personaje capital y de muchas posibilidades rodeado de un argumento que no le hace demasiada justicia. Eso, en un juego de TellTale donde lo único que importa es lo narrativo, es difícil de entender; y al final nuestra capacidad para disfrutar de este In to Deep depende directa y exclusivamente de nuestro interés en la dura y áspera heroína.</td>
    <td align="center">Xbox360</td>
    <td align="center">Telltale Games</td>
    <td align="center">Aventura</td>
    <td align="center">Textos en español y voces en ingles	</td>
	<td align="center">23 de febrero de 2016</td>
	<td align="center">Pieza</td>
	<td align="center">$600</td>
  </tr>

  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego2xbox360.jpg" width="180px" height="200px"/><br>Minecraft: Story Mode</td>
	<td align="justify">Minecraft: Story Mode es un juego de Telltale, sí, pero lo disfrutarán mucho más los grandes aficionados a Minecraft que quieran ver otra perspectiva de su juego favorito, que los fans de la compañía cuenta-cuentos por excelencia.</td>
    <td align="center">Xbox360</td>
    <td align="center">Telltale Games</td>
    <td align="center">Aventura</td>
    <td align="center">Textos en español y voces en ingles	</td>
	<td align="center">13 de octubre de 2015</td>
	<td>Pieza</td>
	<td>$590</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego3xbox360.jpg" width="180px" height="200px"/><br>Grand Theft Auto V</td>
	<td align="justify">Rockstar ha sido uno de los grandes triunfadores de la actual generación, y han vuelto a demostrar el por qué con el inabarcable GTA V. Hacer justicia con un análisis a todo lo que ofrece es imposible, y sencillamente calificamos de imprescindible su compra a cualquier usuario amante de las experiencias adultas de calidad.</td>
    <td align="center">Xbox360</td>
    <td align="center">RockStar Games</td>
    <td align="center">Accion</td>
    <td align="center">Textos en español y voces en ingles	</td>
	<td align="center">17 de septiembre de 2013</td>
	<td>Pieza</td>
	<td>$700</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego4xbox360.jpg" width="180px" height="200px"/><br>Destiny</td>
	<td align="justify">Destiny, con sus fortalezas y sus debilidades, es ante todo un gran videojuego de acción con contenidos como para mantenernos entretenidos muchas horas, y con un buen equilibrio entre campaña cooperativa y multijugador competitivo.</td>
    <td align="center">Xbox360</td>
    <td align="center">Bungie</td>
    <td align="center">Accion</td>
    <td align="center">Textos en español y voces en español</td>
	<td align="center">9 de septiembre de 2014</td>
	<td>Pieza</td>
	<td>$680</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego5xbox360.jpg" width="180px" height="200px"/><br>Gears of War 3</td>
	<td align="justify">Con la acción por bandera y con la calidad por absoluta norma. Así llega el épico final de la trilogía Gears of War, con un episodio a la altura de los más grandes títulos de acción de la generación. Montones de horas de entretenimiento, multijugador impecable, campaña dramática y poderosa... ¿Más de lo mismo? Seguro, pero a quién le importa cuando es tan bueno.</td>
    <td align="center">Xbox360</td>
    <td align="center">Epic Games</td>
    <td align="center">Shooter</td>
    <td align="center">Textos en español y voces en español</td>
	<td align="center">20 de septiembre de 2011</td>
  	<td>Pieza</td>
	<td>$750</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego6xbox360.jpg" width="180px" height="200px"/><br>Left 4 Dead 2</td>
	<td align="justify">Left 4 Dead 2 dividirá a los usuarios que se acerquen a él. Los sedientos de nuevas masacres Zombie no dudarán en comprarlo y disfrutar de él como con el original, aunque a buen seguro echarán en falta más novedades. </td>
    <td align="center">Xbox360</td>
    <td align="center">Valve</td>
    <td align="center">Shooter</td>
    <td align="center">Manual en español, textos en español y voces en español</td>
	<td align="center">19 de noviembre de 2009</td>
 	<td>Pieza</td>
	<td>$590</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego7xbox360.jpg" width="180px" height="200px"/><br>Minecraft</td>
	<td align="justify">Cada cierto tiempo aparecen títulos que marcan de forma notoria a la industria del videojuego, y tenemos muy claro que Minecraft es uno de los elegidos. Es verdad que esta adaptación a Xbox 360 está lejos del alcance y las enormes posibilidades de juego del original; pero también es cierto que son muy pocos los títulos capaces de hacerle sombra cuando se trata de divertir.</td>
    <td align="center">Xbox360</td>
    <td align="center">Mojang</td>
    <td align="center">Estrategia</td>
    <td align="center">Textos en español</td>
	<td align="center">9 de mayo de 2012</td>
	<td>Pieza</td>
	<td>$800</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego8xbox360.jpg" width="180px" height="200px"/><br>XCOM: Enemy Unknown</td>
	<td align="justify">Con Enemy Unknown la saga XCOM vuelve a gozar de la buena forma que los fans de la estrategia por turnos llevaban años demandando. Tras varios capítulos decepcionantes, los creadores de Civilization se hacen cargo de la nueva entrega y logran grandes resultados.</td>
    <td align="center">Xbox360</td>
    <td align="center">Firaxis Games</td>
    <td align="center">Estrategia</td>
    <td align="center">Manual en español, textos en español y voces en español</td>
	<td align="center">12 de octubre de 2012</td>
	<td>Pieza</td>
	<td>$645</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego9xbox360.png" width="180px" height="200px"/><br>Braid</td>
	<td align="justify">Desarrollado por el diseñador experimental Jonathan Blow, ganador del "Independent Games Festival", Braid es un juego que mezcla plataformas 2D con elementos puzle dentro de un sistema de juego que permite manipular el tiempo de la acción.</td>
    <td align="center">Xbox360</td>
    <td align="center">Hothead Games, Number None, Inc.</td>
    <td align="center">Puzzle</td>
    <td align="center">Español</td>
	<td align="center">6 de agosto de 2008</td>
	<td>Pieza</td>
	<td>$400</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego10xbox360.png" width="180px" height="200px"/><br>Puzzle Quest: Galactrix</td>
	<td align="justify">Con Galactrix, la afamada saga Puzzle Quest plantea una nueva ambientación en un mundo de ciencia ficción, pero manteniendo su sabia mezcla de juego puzzle con elementos de rol y estrategia.</td>
    <td align="center">Xbox360</td>
    <td align="center">Infinite Interactive</td>
    <td align="center">Puzzle</td>
    <td align="center">Español</td>
	<td align="center">24 de febrero de 2009</td>
	<td>Pieza</td>
	<td>$350</td>
  </tr>
</table>

</body>
</html>
<?php
}else{
	echo '<script> window.location="pantallaInicial.php"; </script>';
}
?>