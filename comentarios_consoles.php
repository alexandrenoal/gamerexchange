<!DOCTYPE html>
<?php
   include "menu.php";
   ?>
<?php
   require_once "config.php";
   ?>
<?php
   session_start();
   
   ?>
<div id="ww">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-lg-offset-2 centered">
            <h1>Deixe seu comentário</h1>
            <td>
               <h2><a href="postagem_console.php">Postagens Consoles</a></p><br></h2>
            </td>
            <?php $usuario = $_GET['usuario'];?>
            <?php $foto = $_GET['foto'];?>
            <?php
               $foto = $_GET['foto'];
               echo "<img src='img/$foto' width='580' height='430' style='border-radius:0px; border:5px solid #ddd'><br /><br />";
               ?>	
            <form method="post" action="cadastrar_comentarios_consoles.php" enctype="multipart/form-data">			
               <textarea name="mensagem" id="textarea"  cols="45" rows="5"></textarea><br><br>
               <input type="submit" name="button" id="button" class="btn" value="Enviar Mensagem" />								
               <input type="hidden" name="usuario" value="<?php echo $usuario?>" />
               <input type="hidden" name="foto" value="<?php echo $foto?>" />
            </form>
            <br><br>	
            <?php
               $usuario = $_GET['usuario'];
               $foto = $_GET['foto'];
               $selbanco = "SELECT * FROM comentarios_consoles WHERE '$usuario' = usuario && '$foto' = foto";
               $querybanco = mysqli_query($con, $selbanco);
               
               while($l=mysqli_fetch_array($querybanco)){
               	
               	$mensagem = $l['mensagem'];
               	$login_usuario =$l['usuario'];		
               	$nome =$l['nome'];
                  $data = $l ['data'];
                   
               	echo "<a href=\"vitrine_amigos.php?usuario=$nome\"><strong>$nome: </strong></a> $mensagem <br />";
                  echo "<i><h5>$data</h5></i>";
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