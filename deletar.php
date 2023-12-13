<?php require_once "config.php";

$del = "DELETE FROM cadastro_jogo WHERE id = '".$_GET['del']."'";
$apagar = mysqli_query($con, $del);

$del = "DELETE FROM cadastro_console WHERE id = '".$_GET['del']."'";
$apagar = mysqli_query($con, $del);

$del = "DELETE FROM vitrine_interesse_jogo WHERE id = '".$_GET['del']."'";
$apagar = mysqli_query($con, $del);

$del = "DELETE FROM vitrine_interesse_console WHERE id = '".$_GET['del']."'";
$apagar = mysqli_query($con, $del);

//$del = "DELETE FROM usuario WHERE id = '".$_GET['del']."'";
//$apagar = mysqli_query($con, $del);

header("Location: vitrine.php");	

?>