<?php
require_once "config.php";

session_start();

$mensagem = $_POST['mensagem'];
$nome = $_SESSION['nome'];
$usuario = $_POST['usuario'];
$data = $_POST['data'];


mysqli_query($con, "insert into mensagem (mensagem, nome, usuario, data) values ('$mensagem','$nome','$usuario', NOW())");
echo "<meta http-equiv='refresh' content='0, url=mensagem.php?usuario=$usuario'>";


?>