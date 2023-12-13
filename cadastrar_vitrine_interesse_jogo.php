<?php
require_once "config.php";
?>
<?php
	session_start();	

	$jogo = $_POST['nome'];
	$login_usuario = $_SESSION['nome'];
	
	$uploaddir = 'img/';	
	$uploadfile = $uploaddir . "" . $_FILES['foto']['name'];
	
	$nome_da_imagem = $_FILES['foto']['name'];

	(move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile));
		
	if(empty($jogo)){
		echo "<script>alert('Preencha todos os campos.'); history.back();</script>";		
		
		}else{
			mysqli_query($con, "insert into vitrine_interesse_jogo (nome, usuario, foto) values ('$jogo','$login_usuario','$nome_da_imagem')");
			echo "<script>alert('Jogo cadastrado com sucesso.');</script>";
			echo "<meta http-equiv='refresh' content='0, url=vitrine.php'>";
		}
	
?>