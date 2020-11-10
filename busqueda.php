<?php 
include ("conexion.php");
  $con=conectar();
$palClave=$_POST['dato'];
$sqlb="select* from xbox360 where Titulo LIKE '%".$palClave."%'";
  $resultado=mysql_query($sqlb,$con);
  if(!$resultado)
  echo "error no existe la tabla";
  else{
	while($datos=mysql_fetch_object($resultado)){
  
echo '<script> window.location="buscar.php"; </script>';
  
  }//fin del while
echo"</table>";
}//fin del else
?>