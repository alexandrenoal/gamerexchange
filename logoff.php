<?php 
session_start();
session_name("perfil");
unset($_SESSION['usuario']);
session_destroy();
header("Location: index.php");
?>
