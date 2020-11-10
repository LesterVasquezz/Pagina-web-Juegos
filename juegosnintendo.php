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
<h1 align="center"><font color="#FFFFFF">Nintendo 3DS</font></h1>
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
  	<td width="180px" align="center"><img src="imagenes/juego1nintendo.jpg" width="180px" height="200px"/><br>
Phoenix Wright: Ace Attorney</td>
	<td align="justify">Phoenix Wright se resiste al retiro de la abogacía. Sexta entrega de la mítica franquicia de investigación portátil.</td>
    <td align="center">Nintendo 3DS</td>
    <td align="center">Capcom</td>
    <td align="center">Aventura</td>
    <td align="center">Textos en español y voces en ingles	</td>
	<td align="center">2016 (Por determinar)</td>
	<td align="center">Pieza</td>
	<td align="center">$400</td>
  </tr>

  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego2nintendo.jpg" width="180px" height="200px"/><br>Zero Time Dilemma</td>
	<td align="justify">Zero Time Dilemma es la tercera entrega de la querida saga de aventuras interactivas que contará con el regreso de cara conocidas, múltiples finales, cinemáticas dobladas y puzles vitales para la supervivencia en el juego. En el videojuego los jugadores deben escapar de un lugar misterioso, un objetivo que implicará tomar difíciles decisiones.</td>
    <td align="center">Nintendo 3DS</td>
    <td align="center">ChunSoft</td>
    <td align="center">Aventura</td>
    <td align="center">Textos en español y voces en ingles	</td>
	<td align="center">28 de junio de 2016</td>
	<td>Pieza</td>
	<td>$625</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego3nintendo.jpg" width="180px" height="200px"/><br>Kirby: Planet Robobot</td>
	<td align="justify">Videojuego de plataformas protagonizado por el simpático Kirby, que nos presenta a una Dream Land mecanizada por los invasores a los que Kirby no duda en plantar cara usando la propia tecnología invasora. Kirby: Planet Robobot para 3DS cuenta con cooperativo para cuatro jugadores, y además es compatible con todas las figuras amiibo, algunas de las cuales otorgan a Kirby habilidades especiales.</td>
    <td align="center">Nintendo 3DS</td>
    <td align="center">HAL Laboratory, Inc.</td>
    <td align="center">Accion</td>
    <td align="center">Textos en español</td>
	<td align="center">10 de junio de 2016</td>
	<td>Pieza</td>
	<td>$600</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego4nintendo.jpg" width="180px" height="200px"/><br>Hyrule Warriors: Legends</td>
	<td align="justify">El intenso Hyrule Warriors de Wii U se adapta a Nintendo 3DS conservando intacta su esencia jugable, que combina la acción hack ‘n slash propia de los Dynasty Warriors con el universo Zelda. El título trae consigo dos nuevos personajes sacados directamente del clásico Wind Waker: Tetra y el rey de Hyrule, además de los 4 DLCs del juego de Wii U y nuevos enemigos.</td>
    <td align="center">Nintendo 3DS</td>
    <td align="center">Omega Force</td>
    <td align="center">Accion</td>
    <td align="center">Textos en español y voces en inglés</td>
	<td align="center">24 de marzo de 2016</td>
	<td>Pieza</td>
	<td>$780</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego5nintendo.jpg" width="180px" height="200px"/><br>Resident Evil: Revelations</td>
	<td align="justify">Nuevo episodio de la saga Resident Evil que en esta entrega presenta un regreso al género "survival horror".</td>
    <td align="center">Nintendo 3DS</td>
    <td align="center">Capcom</td>
    <td align="center">Shooter</td>
    <td align="center">Manual en español, textos en español y voces en español
</td>
	<td align="center">27 de enero de 2012 </td>
  	<td>Pieza</td>
	<td>$710</td>
  </tr>
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego6nintendo.jpg" width="180px" height="200px"/><br>Metroid Prime: Federation Force</td>
	<td align="justify">Vídeojuego de acción cooperativa para 4 jugadores basado en misiones. Su propuesta cuenta también con Blastball (un original deporte futurista parecido al fútbol) como parte de su fórmula jugable entre encargo y encargo, elemento que estuvo incluido en el Nintendo World Championships. </td>
    <td align="center">Nintendo 3DS</td>
    <td align="center">Next Level Games</td>
    <td align="center">Shooter</td>
    <td align="center">Manual en español, textos en español y voces en español</td>
	<td align="center">2 de septiembre de 2016 </td>
 	<td>Pieza</td>
	<td>$890</td>
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