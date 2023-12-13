<?php
include "menu.php";
?>
<?php require_once "config.php";  
?>


<?php            
               $selbanco = "SELECT * FROM usuario ORDER BY id DESC";
               $querybanco = mysqli_query($con, $selbanco);                          
               
               while($l=mysqli_fetch_array($querybanco)){
               	
               	$nome = $l['nome'];
               	$id = $l['id'];
               	            	
               	echo "<center>";
               	echo "<strong>$nome</strong>  <br />";              	
               	echo "<strong>$id:</strong>  <br />";
                echo '<strong><a href="deletar.php?del='.$l['id'].'">Deletar</a>';   
                //echo "<a href=\"excluir.php\"><strong>Deletar:</strong></a><br /><br />";		               	
                echo "<hr />";
                echo "</center>";
               }
               ?>	


<?php
include "rodape.php";
?>