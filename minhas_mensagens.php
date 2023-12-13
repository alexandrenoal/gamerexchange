<?php
   include "menu.php";
   ?>
<!DOCTYPE html>
<?php
   require_once "config.php";
   session_start();
   	
   ?>
<div id="ww">
   <center>
      <div class="container">
         <h1>Minhas mensagens</h1>
         <br>		
         <?php
            $usuario = $_SESSION['nome']; //o nome no session na verdade pega o user
                   
            
            $selbanco = "SELECT * FROM mensagem WHERE usuario = '$usuario' ORDER BY id DESC";
            $querybanco = mysqli_query($con, $selbanco);	
            
            while($l=mysqli_fetch_array($querybanco)){
            	
            	$nome = $l['nome'];
            	$mensagem = $l['mensagem'];	
            	$data = $l ['data'];             	
            	
            	echo "<a href=\"vitrine_amigos.php?usuario=$nome\"><strong>$nome: </strong></a>"; 
            	echo "$mensagem ";
            	echo "<i><h5>$data</h5></i>";
               echo "<hr><br/>";
                          		
            }
            ?>      
   </center>
   </div>		
</div>
<?php
   include "rodape.php";
   ?>