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
<h1 align="center"><font color="#FFFFFF">Estrategia</font></h1>
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
  	<td width="180px" align="center"><img src="imagenes/juego7nintendo.jpg" width="180px" height="200px"/><br>Fire Emblem Fates: Conquista</td>
	<td align="justify">Tras el magnifico Fire Emblem: Awakening, Nintendo 3DS recibe la segunda entrega para Nintendo 3DS de la popular serie Fire Emblem, que en esta ocasión llega en dos videojuegos distintos (Estirpe y Conquista) más un DLC (Revelación), con diferentes campañas, misiones e historias.</td>
    <td align="center">Nintendo 3DS</td>
    <td align="center">Intelligent Systems</td>
    <td align="center">Estrategia</td>
    <td align="center">Textos en español y voces en inglés</td>
	<td align="center">20 de mayo de 2016</td>
	<td>Pieza</td>
	<td>$510</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego8nintendo.jpg" width="180px" height="200px"/><br>Fire Emblem: Awakening</td>
	<td align="justify">Nueva entrega dentro de la reputada serie Fire Emblem que apuesta por un cruce entre tradición y novedades para darnos más rol táctico, en esta ocasión acompañado por el potencial 3D de la portátil de Nintendo.</td>
    <td align="center">Nintendo 3DS</td>
    <td align="center">Intelligent Systems</td>
    <td align="center">Estrategia</td>
    <td align="center">Manual en español, textos en español y voces en inglés</td>
	<td align="center">19 de abril de 2013</td>
	<td>Pieza</td>
	<td>$445</td>
  </tr>
</table>

</body>
</html>
<?php
}else{
	echo '<script> window.location="pantallaInicial.php"; </script>';
}
?>
