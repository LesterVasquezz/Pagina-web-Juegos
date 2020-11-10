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
<h1 align="center"><font color="#FFFFFF">Aventura</font></h1>
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
</table>

</body>
</html>
<?php
}else{
	echo '<script> window.location="pantallaInicial.php"; </script>';
}
?>
