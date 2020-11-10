<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro</title>
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
<form action="usuarios.php" method="post">
	<h1>Registrate</h1>
	<input style="width:143px;height:35px;padding:0px 15px;color:#6d6d6d;border-radius:5px;text-align:center;" name="nombre" type="text" id="nombre" maxlength="35"placeholder="Nombre" />
	<input style="width:143px;height:35px;padding:0px 15px;color:#6d6d6d;border-radius:5px;text-align:center;" name="apellidos" type="text" id="apellidos" maxlength="40" placeholder="Apellidos"/>
	<input style="width:143px;height:35px;padding:0px 15px;color:#6d6d6d;border-radius:5px;text-align:center;" name="contrasena" type="password" id="contrasena" maxlength="25" placeholder="Contraseña"/>
	<input style="width:143px;height:35px;padding:0px 15px;color:#6d6d6d;border-radius:5px;text-align:center;"name="correo" type="text" id="correo" maxlength="50" placeholder="Correo Electronico"/>
	<input style="width:143px;height:35px;padding:0px 15px;color:#6d6d6d;border-radius:5px;text-align:center;" name="ciudad" id="ciudad" type="text" maxlength="30" placeholder="Ciudad" />
	<button type="button" onclick="location.href='pantallaInicial.php'">Iniciar Session</button>
	<button type="submit">Registrar</button>
</form>

</body>
</html>
