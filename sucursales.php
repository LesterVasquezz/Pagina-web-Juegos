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
.Estilo1 {
	font-family: "Courier New", Courier, monospace;
	font-style: italic;
	font-size: 24px;
	color: #FF3300;	

}
.Estilo6 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #0066FF;
	font-size: 24px;
}
.Estilo8 {
	font-family: "Courier New", Courier, monospace;
	font-size: 18px;
}
.Estilo10 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #3366FF;
	font-size: 24px;
}
.Estilo11 {color: #FF33CC; font-style: italic; }
.Estilo16 {font-size: 18px; font-family: Geneva, Arial, Helvetica, sans-serif; }
.Estilo19 {font-weight: bold; color: #FF0000;}
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
</div><br /><table align="center"><tr><td><img src="imagenes/barra-colores.jpg" width="1255" height="47" /></td></tr></table><br />
<h1 align="center"><font color="#FFFFFF">Contamos con dos sucursales vastas en variedad! Ven y Conocenos!</h1>
<table align="center">
  <tr>
    <th scope="col"><div align="left" class="Estilo8">UBICANOS EN: </div></th>
  </tr>
  <tr>
    <td><span class="Estilo10">*Sucursal juchit&aacute;n: </span></td>
  </tr>
  <tr>
    <td><span class="Estilo16">Direcci&oacute;n: Mercado de juchit&aacute;n, en diagonal a la casa de la cultura </span></td>
  </tr>
  <tr>
    <td><span class="Estilo16">o llega con google maps:</span> <a href="https://www.google.com.mx/maps/place/Mercado+2+de+Noviembre/@16.4593542,-95.0448329,14z/data=!4m8!1m2!2m1!1smercado+de+Juchit%C3%A1n+de+Zaragoza!3m4!1s0x859554fc3ec0054b:0x29b16c1e037d3085!8m2!3d16.4350822!4d-95.0145911"  target="_blank"class="Estilo11">IR CON GOOGLE</a></td>
  </tr>
  <tr>
    <td><span class="Estilo6">*Sucursal ixtepec: </span></td>
  </tr>
  <tr>
    <td><span class="Estilo16">Direcci&oacute;n: Plaza garibaldi, arriba de paleter&iacute;a La cascada </span></td>
  </tr>
  <tr>
    <td><span class="Estilo16">o llega con google maps:</span> </font><a href="https://www.google.com.mx/maps/@16.5559459,-95.0958204,19.51z" target="_blank"class="Estilo11">IR CON GOOGLE</a></td>
  </tr>
</table>
<table align="center"><tr><td><img src="imagenes/dragon2.gif" width="263" height="143" align="middle" /><img src="imagenes/dragon.gif"  width="320" height="145" align="right" /></td><td>&nbsp;</td>
</tr></table>
<table align="center"><tr><td><img src="imagenes/barra-colores.jpg" width="1255" height="47" /></td></tr></table>
</body>
</html>
<?php
}else{
	echo '<script> window.location="pantallaInicial.php"; </script>';
}
?>