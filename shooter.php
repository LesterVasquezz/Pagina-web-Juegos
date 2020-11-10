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
<h1 align="center"><font color="#FFFFFF">Shooter</font></h1>
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
 </table>

</body>
</html>
<?php
}else{
	echo '<script> window.location="pantallaInicial.php"; </script>';
}

?>