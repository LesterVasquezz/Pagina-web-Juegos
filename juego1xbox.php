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
<br />
<table width="1250px" height="500px" cellpadding="10" cellspacing="0" border="0" align="center">
  <tr bgcolor="#C8F2E4">
  	<td width="180px" align="center"><img src="imagenes/juego1xbox360.jpg" width="210px" height="300px"/></td>
	<td><table>
	<tr><td align="center"><font size="60px">The Walking Dead: Michonne</font></td></tr>
		<tr><td align="justify"><strong>Sinopsis: </strong><i>En el primer episodio de Michonne tenemos un personaje capital y de muchas posibilidades rodeado de un argumento que no le hace demasiada justicia. Eso, en un juego de TellTale donde lo único que importa es lo narrativo, es difícil de entender; y al final nuestra capacidad para disfrutar de este In to Deep depende directa y exclusivamente de nuestro interés en la dura y áspera heroína.</i></td></tr>
    <tr><td align="center"><br /><strong>Plataforma: </strong>Xbox360</td></tr>
    <tr><td align="center"><strong>Plataforma: </strong>Telltale Games</td></tr>
    <tr><td align="center"><strong>Categoria </strong>Aventura</td></tr>
    <tr><td align="center"><strong>Idioma: </strong>Textos en español y voces en ingles	</td></tr>
	<tr><td align="center"><strong>Fecha de Lanzamiento: </strong>23 de febrero de 2016</td></tr>
	<tr><td align="center"><strong>Tipo: </strong>Pieza</td></tr>
	<tr><td align="center"><strong>Precio: </strong>$600</td></tr>
  </table></td>
</table>
</body>
</html>
<?php
}else{
	echo '<script> window.location="pantallaInicial.php"; </script>';
}
?>