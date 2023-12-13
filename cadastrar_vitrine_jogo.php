<?php
require_once "config.php";
?>
<?php
	session_start();	

	$nome = $_POST['nome'];
	$plataforma = $_POST['plataforma'];
	$descricao = $_POST['descricao'];
	$endereco = $_POST['endereco'];
	$login_usuario = $_SESSION['nome'];		
	$data = $_POST['data'];
	
	$uploaddir = 'img/';		
	$uploadfile = $uploaddir . "" . $_FILES['foto']['name'];
	
	$nome_da_imagem = $_FILES['foto']['name'];

    (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile));
		
	if(empty($nome)){
		echo "<script>alert('Preencha todos os campos.'); history.back();</script>";
	}elseif(empty($plataforma)){
		echo "<script>alert('Preencha todos os campos.'); history.back();</script>";
	}elseif(empty($descricao)){
		echo "<script>alert('Preencha todos os campos.'); history.back();</script>";
	}elseif(empty($endereco)){
		echo "<script>alert('Preencha todos os campos.'); history.back();</script>";
		
		}else{
			mysqli_query($con, "insert into cadastro_jogo (nome, plataforma, descricao, endereco, foto, usuario, data) values ('$nome','$plataforma','$descricao','$endereco','$nome_da_imagem','$login_usuario', NOW())");
			echo "<script>alert('Game cadastrado com sucesso.');</script>";			
			echo "<meta http-equiv='refresh' content='0, url=vitrine.php'>";
		}
	
?>