<?php 
        session_start();
		
?>
<?php
    $usuario = $_SESSION['nome']; 	
	$foto = $_GET['foto'];
             
       $selbanco = "DELETE FROM cadastro_jogo WHERE '$usuario' = usuario && '$foto' = foto "; 

       header("Location: excluir.php");


       
       /*if(!empty($_GET['id'])) //verifica se o parâmetro não está vazio
    
       include_once ('config.php');
    
       $id = $_GET['id'];
    
       $sqlSelect = "SELECT * FROM cadastro_jopo WHERE id=$id";
    
       $result = $conexao->query($sqlSelect); */
    
       

?>	
	


	