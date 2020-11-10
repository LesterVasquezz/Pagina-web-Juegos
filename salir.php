<?php
session_start();
session_destroy();
echo '<script> alert("Cerraste Session.");</script>';
echo '<script> window.location="pantallaInicial.php"; </script>';
?>