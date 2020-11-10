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
body{
background:url(imagenes/bg.jpg);
background-position:center;
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
.Estilo20 {
	color: #FFFF33;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.Estilo24 {
	color: #FF0000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.Estilo26 {color: #FF0000}
.Estilo27 {font-family: Verdana, Arial, Helvetica, sans-serif}
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






<p>&nbsp;</p>
<table width="1250px"  align="center" border="0">
  <tr>
    <th scope="col"><p align="left" class="Estilo20">Consola: <span class="Estilo26">NINTENDO DS</span></p></th></tr>
     <tr><th> <p align="left" class="Estilo20">Colores disponibles: <span class="Estilo26">Rosa/Azul/Rojo</span></p></th></tr>
  <th>  <p align="left" class="Estilo20">Caracteristicas:<span class="Estilo26">Pantalla TFT/LCD reflectora semitransparente a color, de 3 pulgadas, con luz incorporada, con una resolución de 256x192 píxeles y 0,24 mm de tamaño de punto.
Pantalla táctil,Igual que la pantalla superior, pero con pantalla táctil transparente de tipo analógico.
Capacidad para mostrar 260.000 colores. 
El rango de comunicación inalámbrica varía de 10 a 30 metros, dependiendo de las circunstancias.  <br />
	<th><img src="imagenes/nintendods.png"  width="200" height="250" /></th>
    </span>
   <tr> <th><p align="left" class="Estilo20">Precio:<span class="Estilo26">$4000</span></p></th></tr>
   <tr><th> <p align="left" class="Estilo20">Stock: <span class="Estilo26">2 Rosa/2 azul/1 rojo </span></p></th>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?php
}else{
	echo '<script> window.location="pantallaInicial.php"; </script>';
}
?>