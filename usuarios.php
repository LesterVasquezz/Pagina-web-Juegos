<?php
$v1=$_POST[nombre];
$v2=$_POST[apellidos];
$v3=$_POST[contrasena];
$v4=$_POST[correo];
$v5=$_POST[ciudad];

$servidor="localhost";
$usuario="root";
$contrasena="123";
$bd="registro";
$conexion=mysql_connect($servidor,$usuario,$contrasena);
if(!$conexion)
{
echo "Error de conexion con el servidor MySQL";
exit();
}
$cbd=mysql_select_db($bd,$conexion);
if (!$cbd)
{
echo "Error de conexion a la base de datos";
exit();
}
if(!$v1=="" and !$v2=="" and !$v3=="" and !$v4=="" and !$v5==""){
$sql="insert usuarios values('','$v1', '$v2','$v3','$v4','$v5')";
$estado=mysql_query($sql);
echo '<script> alert("Registrado Correctamente");</script>';
echo'<script> window.location="pantallaInicial.php"; </script>';
}
else{ 
echo '<script> alert("Datos Incorrectos");</script>';
echo'<script> window.location="registrar.php"; </script>';
}?>
