<?php
require_once "config.php";

session_start();

$mensagem = $_POST['mensagem'];
$login_usuario = $_POST['usuario'];
$nome = $_SESSION['nome'];
$foto = $_POST['foto'];
$data = $_POST['data'];


mysqli_query($con, "insert into comentarios_jogos (mensagem, usuario, nome, foto, data) values ('$mensagem','$login_usuario','$nome','$foto', NOW())");
echo "<meta http-equiv='refresh' content='0, url=comentarios_jogos.php?usuario=$login_usuario&foto=$foto'>";


?>