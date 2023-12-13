<?php
   include "menu.php";
   ?>
<?php require_once "config.php";
   ?>
<!DOCTYPE html>
<div class="container">
   <div class="row">
      <div class="col-lg-8 col-lg-offset-2 centered">
         <br><br>
            <?php
            $foto = $_GET['foto'];
            echo "<img src= 'img/$foto' width='550' height='700' style='border-radius:0px; border:px solid #ddd'><br /><br />";
            ?>	
            <?php
            $usuario = $_GET['usuario'];
            $foto = $_GET['foto'];
           
            $selbanco = "SELECT * FROM cadastro_jogo WHERE '$usuario' = usuario && '$foto' = foto ";
            $querybanco = mysqli_query($con, $selbanco);
            
            while($l=mysqli_fetch_array($querybanco)){            	
            	
            	$login_usuario =$l['usuario'];				
            	$nome =$l['nome'];
               $id = $l['id'];               
            	//echo "$id"; DEBUG DO ID	

               echo ' 
               <center>
               <form method="post" action="vitrine.php">
                  <table>
                     <tr>
                        <td><input type="submit" value="Voltar" class="btn" id="btnEntrar">                
                        <a href="deletar.php?del='.$l['id'].'"><input type="button" value="Deletar" class="btn" id="btnCad"></a>
                        </td>
                     </tr>
                  </table>
               </form>'
            ;
            }	       
                                             	
            ?>	
        
      </div>
   </div>
</div>
<?php
include "rodape.php";
?>