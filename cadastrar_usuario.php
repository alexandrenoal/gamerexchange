<?php
require_once "config.php";
?>
<?php

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$user = $_POST['usuario'];
	$senha = $_POST['senha'];	
	
	$uploaddir = 'img/';
	
	$uploadfile = $uploaddir . "" . $_FILES['foto']['name'];	
	$nome_da_imagem = $_FILES['foto']['name'];
         
	(move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile));
 
	if(empty($nome)){
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}elseif(empty($email)){
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}elseif(empty($user)){
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}elseif(empty($senha)){
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}else{

        $query1 = mysqli_num_rows(mysqli_query($con, "SELECT * FROM usuario WHERE usuario = '$user'"));
		  if($query1 == 1){
			echo "<script>alert('Usuário já existe.'); history.back();</script>"; 
	        }else{		
			mysqli_query($con, "insert into usuario (nome, email, usuario, senha, foto) values ('$nome','$email','$user','$senha','$nome_da_imagem')");
			echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
			echo "<meta http-equiv='refresh' content='0, url=index.php'>";
		}
	}

?>