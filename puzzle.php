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
					<li><a href="juegosnintendo.php">Nintendo 3DS</a></li>
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
<h1 align="center"><font color="#FFFFFF">Puzzle</font></h1>
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
   <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego9pst.jpg" width="180px" height="200px"/><br>Capitán América: Super Soldier</td>
	<td align="justify">Videojuego basado en la nueva película del Superhéroe del universo Marvel, Capitán América en el que se nos plantea una experiencia con elementos de plataformas y movimientos acrobáticos, en el que el escudo de nuestro héroe tomará un papel fundamental, a la hora de enfrentarnos tanto a los enemigos, como a los retos y puzles que se nos planteen.</td>
    <td align="center">PlayStation 3</td>
    <td align="center">SEGA</td>
    <td align="center">Puzzle</td>
    <td align="center">Español</td>
	<td align="center">15 de julio de 2011</td>
	<td>Pieza</td>
	<td>$300</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego10pst.jpg" width="180px" height="200px"/><br>Portal 2</td>
	<td align="justify">Segunda entrega del exitoso juego de Valve, Portal, el original FPS que nos plantea una hábil sucesión de puzzles que deben ser resueltos mediante la creación de portales para viajar de una estancia a otra.</td>
    <td align="center">PlayStation 3</td>
    <td align="center">Valve</td>
    <td align="center">Puzzle</td>
    <td align="center">Manual en español, textos en español y voces en español</td>
	<td align="center">19 de abril de 2011</td>
	<td>Pieza</td>
	<td>$390</td>
  </tr>
    <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego9nintendo.jpg" width="180px" height="200px"/><br>Profesor Layton y el Legado de los Ashalanti</td>
	<td align="justify">Sexta aventura protagonizada por el carismático detective creado por level 5. En este tercer juego de la segunda trilogía del profesor Layton, el avispado erudito viajará por el mundo resolviendo enigmas de una civilización antigua.</td>
    <td align="center">Nintendo 3DS</td>
    <td align="center">Level 5</td>
    <td align="center">Puzzle</td>
    <td align="center">Textos en español y voces en español</td>
	<td align="center">8 de noviembre de 2013</td>
	<td>Pieza</td>
	<td>$520</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego10nintendo.jpg" width="180px" height="200px"/><br>Puzzle & Dragons Z & Super Mario Bros</td>
	<td align="justify">El fenómeno puzzle japonés se alía con la franquicia Super Mario en un nuevo episodio exclusivo de Nintendo 3DS. El juego incluye la versión Z del exitoso Puzzle & Dragons, así como la Super Mario Bros. Edition especialmente diseñada para 3DS.</td>
    <td align="center">Nintendo 3DS</td>
    <td align="center">GungHo</td>
    <td align="center">Puzzle</td>
    <td align="center">Textos en español</td>
	<td align="center">8 de mayo de 2015</td>
	<td>Pieza</td>
	<td>$560</td>
  </tr>
</table>

</body>
</html>
<?php
}else{
	echo '<script> window.location="pantallaInicial.php"; </script>';
}
?>
