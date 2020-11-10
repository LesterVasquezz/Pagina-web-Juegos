<?php
	session_start();
	$servidor="localhost";
	$usuarioB="root";
	$contrasena="123";
	$bd="registro";
	$conexion=mysql_connect($servidor,$usuarioB,$contrasena);
$cbd=mysql_select_db($bd,$conexion);
	if(isset($_SESSION['usuario'])){
	echo '<script> window.location="Inicio.php"; </script>';
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PantallaInicial</title>
<link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
<style type="text/css">
*{
margin:0px;
padding:0px;
}
body{
background:url(imagenes/bg.jpg);
background-position:center;
}
form{
background:#333333;
width:360px;
border:1px solid #4e4d4d;
border-radius:3px;
box-shadow:inset 0 0 10px #000;
margin:100px auto;
}
form h1{
text-align:center;
color:#FFFFFF;
font-weight:normal;
font-size:40pt;
margin:30px 0px;
font-family: 'Tangerine', cursive;
}
form input{
width:280px;
height:35px;
padding:0px 15px;
color:#6d6d6d;
margin:10px 30px;
border-radius:5px;
text-align:center;
}
form button{
width:135px;
margin:20px 0px 30px 30px;
height:50px;
border 1px solid #fff;
border-radius:0px 10px;
box-shadow:0px 10px 10px #000;
}
form button:hover{
background:#666666;
}
form button:active{
background:#CCCCCC;
}

</style>


</head>
<body>
<form method="post" action="validar.php">
<h1>Bienvenido</h1>
<input type="text" maxlength="35" placeholder="Ingrese su Nombre" name="usuario"/>
<input type="password" maxlength="25" placeholder="Contraseña" name="password"/>
<button type="button" onclick="location.href='registrar.php'">Registrarse</button>
<button type="submit">Iniciar Session</button>
</form>
</body>
</html>
