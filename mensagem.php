<?php
   include "menu.php";
   session_start();
   ?>
<?php require_once "config.php";?>
<!DOCTYPE html>
<div id="ww">
   <br>
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-lg-offset-2 centered">
            <?php $usuario = $_GET['usuario']; 
               $selbanco = "SELECT * FROM usuario WHERE usuario = '$usuario'";	
               $querybanco = mysqli_query($con, $selbanco);	
               
               while($l=mysqli_fetch_array($querybanco)){
               
                    $foto = $l['foto'];				
                                                  
                    echo "<strong><img src= 'img/$foto' width='150' height='155' style='border-radius:0px; border:5px solid #ddd'></strong><br />";
               
               }                                          
            ?> 
            <h4> Envie uma mensagem para <?php echo "$usuario"; ?></h4>
               <form method="post" action="cadastrar_mensagem.php" enctype="multipart/form-data">								 
                  <textarea name="mensagem" id="textarea"  cols="45" rows="5"></textarea><br><br>																
                  <input type="submit" name="button" id="button" class="btn" value="Enviar Mensagem" />								
                  <input type="hidden" name="usuario" value="<?php echo $usuario?>" />								
               </form>
               <br>									
               <?php	
               $usuario = $_GET['usuario'];
               $nomesession = $_SESSION['nome'];               
                  
               $selbanco = "SELECT * FROM mensagem WHERE '$usuario' = usuario ORDER BY id DESC"; 
               $querybanco = mysqli_query($con, $selbanco);
               
               while($l=mysqli_fetch_array($querybanco)){
               	
					$mensagem = $l['mensagem'];
               $nome = $l['nome'];
               $data = $l['data'];  
               			
               echo "<a href=\"vitrine_amigos.php?usuario=$nome\"><strong>$nome: </strong></a> $mensagem <br />";
               echo "<strong>Data:</strong> $data <br />";
					echo "<hr>";	
               }		

               
               ?>		
         </div>
      </div>
   </div>
</div>
<?php
   include "rodape.php";
   ?>