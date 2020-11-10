<?php 
function conectar()
{
//Parametros de conexión
$servidor="localhost";
$usuario="root";
$contasena="123";
$bd="Ventas";
//Funcion de conexion al servidor mysql
 $conexion = mysql_connect($servidor, $usuario, $contasena);
if (!$conexion)
{
  echo "ERROR DE CONEXION CON EL SERVIDOR MYSQL";
  exit();
}
$cbd=mysql_select_db($bd, $conexion);
if (!$cbd)
{
  echo "ERROR DE CONEXION CON LA BASE DE DATOS";
  exit();
}
 return($conexion);
}
?>
