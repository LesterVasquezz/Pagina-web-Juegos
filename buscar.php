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
<h1 align="center"><font color="#FFFFFF">Xbox 360</font></h1>
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
<?php 

include ("conexion.php");
  $con=conectar();
$palClave=$_POST['dato'];
$sqlb="select* from juegos where Titulo LIKE '%".$palClave."%'";
  $resultado=mysql_query($sqlb,$con);
  if(!$resultado)
  echo "error no existe la tabla";
  else{
	while($datos=mysql_fetch_object($resultado)){
  
echo "
    <tr bgcolor='#C8F2E4'>
    <td>$datos->Titulo</td>
    <td>$datos->Descripcion</td>
    <td>$datos->Plataforma</td>
    <td>$datos->Desarrollador</td>
    <td>$datos->Categoria</td>
	<td>$datos->Idioma</td>
	<td>$datos->Lanzamiento</td>
	<td>$datos->Tipo</td>
	<td>$datos->Precio</td>
  </tr>
	"; 
  }//fin del while
echo"</table>";
}//fin del else
?>
</body>
</html>
<?php
}else{
	echo '<script> window.location="pantallaInicial.php"; </script>';
}
?>