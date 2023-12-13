<?php
require_once "config.php";
?>
<?php
	session_start();	

	$nome = $_POST['nome'];
	$desenvolvedora = $_POST['desenvolvedora'];
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
	}elseif(empty($desenvolvedora)){
		echo "<script>alert('Preencha todos os campos.'); history.back();</script>";
	}elseif(empty($descricao)){
		echo "<script>alert('Preencha todos os campos.'); history.back();</script>";
	}elseif(empty($endereco)){
		echo "<script>alert('Preencha todos os campos.'); history.back();</script>";
		
		}else{
			mysqli_query($con, "insert into cadastro_console (nome, desenvolvedora, descricao, endereco, foto, usuario, data) values ('$nome','$desenvolvedora','$descricao','$endereco','$nome_da_imagem','$login_usuario', NOW())");
			echo "<script>alert('Console cadastrado com sucesso.');</script>";
			header("Location: vitrine.php");			
		}
	
?>