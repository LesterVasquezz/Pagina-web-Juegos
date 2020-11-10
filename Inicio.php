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
body{
background:url(imagenes/bg.jpg);
background-position:center;
}
.Estilo5 {
	color: #99FF66;
	font-size: 18px;
	font-family: "Courier New", Courier, monospace;
}
.Estilo6 {color: #66CCFF}
.Estilo7 {color: #66CCFF; font-size: 18px; font-family: "Courier New", Courier, monospace; }
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
<table width="1250px" align="center" border="0">
  <tr>
    <th scope="col" align="center"><h2 align="center" class="Estilo5 Estilo6">Somos una peque&ntilde;a empresa istme&ntilde;a , dedicada a la venta y renta de videojuegos en diferentes categorias y plataformas.Nuestro pr&oacute;posito es innovar en variedad como ning&uacute;n otro en el Istmo!</h2>
      <h2 align="center" class="Estilo7">Videogaming Juegos!T&uacute; pagina web especializada en videojuegos y videoconsolas.</h2>
    <h2 align="center" class="Estilo7">Conocenos! Contamos con una enorme variedad acorde a gustos y edades!</h2>
    <h2 align="center" class="Estilo7">Mediante tu registro puedes acceder a nuestros cat&aacute;logos, actualmente solo manejamos compras directas, ubica cualquiera de nuestras sucursales y adquiere diversi&oacute;n digital!</h2>
    <h2 align="center" class="Estilo7">Espera nuestras pr&oacute;ximas categor&iacute;as y opciones de renta.</h2>
    <h2 align="center" class="Estilo5"><span class="Estilo6">&iquest;Dudas?Env&iacute;anos tu comentario;)</span>
      </p>
    </h2></th>
  <tr>
	<th><p><img src="imagenes/pacman.gif" width="400" height="150" align="baseline" /><br />
	<h3><marquee><font color="#FFFFFF"><i>Creado por Lester Vasquez Galvan & Joana Bolaños Cruz 4°A Programacion</i></font></marquee></h3></th>
	</p>
	</tr>
  </tr>
</table>

</body>
</html>
<?php
}else{
	echo '<script> window.location="pantallaInicial.php"; </script>';
}
?>
