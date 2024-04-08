<?php
session_start();
session_destroy();
header("Location: ../../Vistas/SignInUp.php");
exit; // Añadido para asegurar que el script termine aquí
?>
