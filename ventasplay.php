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
<h1 align="center"><font color="#FFFFFF">PlayStation</font></h1>
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
  	<td width="180px" align="center"><img src="imagenes/juego1pst.jpg" width="180px" height="200px"/><br>Beyond: Dos Almas</td>
	<td align="justify">Videojuego de los creadores de Heavy Rain que vuelve a sumergirnos en una aventura adulta que apuesta por el realismo y autenticidad de sus personajes, la emotividad y las consecuencias de nuestros actos.</td>
    <td align="center">PlayStation 3 y 4</td>

    <td align="center">Quantic Dream</td>
    <td align="center">Aventura</td>
    <td align="center">Textos en español y voces en iEspañol</td>
	<td align="center">9 de octubre de 2013 </td>
	<td align="center">Pieza</td>
	<td align="center">$710</td>
  </tr>

  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego2pst.jpg" width="180px" height="200px"/><br>Heavy Rain</td>
	<td align="justify">Heavy Rain es le segundo juego desarrollado por Quantic Dream, los afamados creadores de Fahrenheit, una nueva a aventura que sigue el mismo patrón de acción, misterio y estilo cinematográfico de su primera obra.</td>
    <td align="center">PlayStatio 3 y 4</td>
    <td align="center">Quantic Dream</td>
    <td align="center">Aventura</td>
    <td align="center">Textos en español y voces en Español</td>
	<td align="center">25 de febrero de 2010</td>
	<td>Pieza</td>
	<td>$490</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego3pst.jpg" width="180px" height="200px"/><br>The Last of Us</td>
	<td align="justify">The Last of Us es un videojuego de acción, aventura y supervivencia desarrollado por Naugthy Dog, los creadores de Uncharted. TLoU nos presenta un escenario en el que la población ha sido diezmada por una terrible plaga, y los supervivientes se están matando entre sí por la comida y las armas. Los protagonistas son Joel, y Ellie una valiente adolescente, que deberán colaborar para sobrevivir en su peligroso viaje a través de los EE.UU. </td>
    <td align="center">PlayStation 3 y 4</td>
    <td align="center">Naughty Dog</td>
    <td align="center">Accion</td>
    <td align="center">Textos en español y voces en español</td>
	<td align="center">14 de junio de 2013</td>
	<td>Pieza</td>
	<td>$600</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/jueg4pst.jpg" width="180px" height="200px"/><br>Metal Gear Solid V: The Phantom Pain</td>
	<td align="justify">La última aventura de Snake bajo las órdenes de Hideo Kojima, tras la controvertida salida de éste de Konami, se cuenta entre los episodios más arriesgados y potentes de la franquicia de espionaje, ciencia ficción y, ahora, también mundo abierto. Acompañado por personajes como Quiet, Ocelot o el ya entrañable perro, el modo historia nos permite escoger quién deseamos que nos acompañe en sus distintas misiones, puesto que cada uno de los personajes tiene sus habilidades propias. 
</td>
    <td align="center">PlayStation 3 y 4</td>
    <td align="center">Kojima Productions</td>
    <td align="center">Accion</td>
    <td align="center">Textos en español y voces en inglés</td>
	<td align="center">1 de septiembre de 2015</td>
	<td>Pieza</td>
	<td>$850</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego5pst.jpg" width="180px" height="200px"/><br>Uncharted 3: Drake's Deception</td>
	<td align="justify">Tercera entrega del juego de acción y aventura exclusivo de PlayStation 3, protagonizada por el carismático buscador de reliquias, Nathan Drake.
</td>
    <td align="center">PlayStation 3</td>
    <td align="center">Naughty Dog</td>
    <td align="center">Shooter</td>
    <td align="center">Manual en español, textos en español y voces en español</td>
	<td align="center">2 de noviembre de 2011</td>
  	<td>Pieza</td>
	<td>$650</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego6pst.jpg" width="180px" height="200px"/><br>Red Dead Redemption</td>
	<td align="justify">Sandbox clásico firmado por Rockstar, creadores de la saga Grand Theft Auto, que, en esta ocasión, traslada sus fórmulas de acción y libertad total a un sugerente telón de fondo relacionado con el salvaje Oeste. En el videojuego somos John Marston, todo un icono ya de los anti-héroes de la historia del entretenimiento interactivo, que se ve involucrado en una historia de venganza y justicia contra un grupo de bandoleros para proteger a su familia en peligro.</td>
    <td align="center">PlayStation 3</td>
    <td align="center">RockStar Games</td>
    <td align="center">Shooter</td>
    <td align="center">Manual en español, textos en español y voces en inglés</td>
	<td align="center">19 de noviembre de 2009</td>
 	<td>Pieza</td>
	<td>$350</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego7pst.jpg" width="180px" height="200px"/><br>FIFA 15: Ultimate Team</td>
	<td align="justify">Modo extra de juego incluido en FIFA 15, que permite a los jugadores jugar con cromos virtuales y hacer equipos de ensueño con los hombres, nombres y equipaciones que deseen. Hay un sistema de compra-venta virtual en el que participan amantes del fútbol de todo el mundo.</td>
    <td align="center">PlayStation 3 y 4</td>
    <td align="center">EA Sports</td>
    <td align="center">Estrategia</td>
    <td align="center">Textos en español y voces en español</td>
	<td align="center">25 de septiembre de 2014</td>
	<td>Pieza</td>
	<td>$630</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego8pst.jpg" width="180px" height="200px"/><br>Plants vs. Zombies</td>
	<td align="justify">Una inmensa horda de divertidos zombis se dispone a invadir tu casa, y tu única línea de defensa es un arsenal de 49 plantas "atrapazombis". Este es el divertido plateamiento de este interesante juego mezcla de estrategia, acción y puzle.</td>
    <td align="center">PlayStation 3</td>
    <td align="center">PopCap</td>
    <td align="center">Estrategia</td>
    <td align="center">Textos en español</td>
	<td align="center">9 de febrero de 2011</td>
	<td>Pieza</td>
	<td>$245</td>
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
</table>

</body>
</html>
<?php
}else{
	echo '<script> window.location="pantallaInicial.php"; </script>';
}
?>
