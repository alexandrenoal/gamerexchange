<?php
require_once "config.php";


$nome = $_POST['usuario']; 
$senha = $_POST['senha'];
$usuario = $_POST['usuario']; 

session_start();
//session_name("perfil");
$_SESSION['validacao']=1;
$_SESSION['nome']=$nome;

echo " Bem-vindo, ".$_SESSION['nome']."!<br><br>";

if(empty($usuario)){
		echo "<script>alert('Preencha todos os campos para logar-se.'); history.back();</script>";
	}elseif(empty($senha)){
		echo "<script>alert('Preencha todos os campos para logar-se.'); history.back();</script>";
	}else{
		$query1 = mysqli_num_rows(mysqli_query($con, "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'"));
		if($query1 == 1){						
			echo "<meta http-equiv='refresh' content='0, url=perfil.php'>";
		}else{
			echo "<script>alert('Usuário e senha não correspondem.'); history.back();</script>";
			
		}
	}

	
?>	
