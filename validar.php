<?php
session_start();
?>
<?php
$usuario=$_POST['usuario'];
$contrasenia=$_POST['password'];
if(empty($usuario) or empty($contrasenia)){
header("Location:pantallaInicial.php");
exit();
}
$servidor="localhost";
$usuarioB="root";
$contrasena="123";
$bd="registro";
$conexion=mysql_connect($servidor,$usuarioB,$contrasena);
$cbd=mysql_select_db($bd,$conexion);
if (!$cbd)
{
echo "Error de conexion a la base de datos";
exit();
}
	$log=mysql_query("SELECT Nombre,Contrasenia from usuarios WHERE Nombre='$usuario' AND Contrasenia='$contrasenia' ");
if (mysql_num_rows($log)>0) {
					$row = mysql_fetch_array($log);
					$_SESSION["usuario"] = $row['usuario'];
					echo '<script> window.location="Inicio.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="pantallaInicial.php"; </script>';
				}

?>
