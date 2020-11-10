<?php
$v1=$_POST[usuario];
$v2=$_POST[correo];
$v3=$_POST[comentario];

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
if(!$v1=="" and !$v2=="" and !$v3==""){
$sql="insert comentarios values('','$v1','$v2','$v3')";
$estado=mysql_query($sql);
echo '<script> alert("Comentario Enviado Correctamente");</script>';
echo'<script> window.location="Inicio.php"; </script>';
}
else{ 
echo '<script> alert("Datos Incorrectos");</script>';
echo'<script> window.location="comentarios.php"; </script>';
}?>
