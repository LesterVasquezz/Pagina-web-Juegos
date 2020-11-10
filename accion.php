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
<h1 align="center"><font color="#FFFFFF">Accion</font></h1>
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
</table>

</body>
</html>
<?php
}else{
	echo '<script> window.location="pantallaInicial.php"; </script>';
}
?>