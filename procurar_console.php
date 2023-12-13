<?php
include "menu.php";
require_once "config.php";
?>
<?php
session_start();

?>
<div id="ww">
<br>
<div class="container">
   <div class="row">
      <div class="col-lg-8 col-lg-offset-2 centered">
         <h2><?php echo " Pesquisa consoles!<br>"?></h2>
         <br>
         <div aling="center" id="busca">
            <form action"procurar_jogo.php" enctype="multipart/form-data" name="busca" method="post">
               <input type="text" name="buscar"/>
               <input type="submit" name="enviar" class="btn" value="Procurar jogo" /><br><br><br>
               <?php	
                  $buscar_console = $_POST['buscar'];
                  $resultado = "SELECT * FROM cadastro_console WHERE nome LIKE '%$buscar_console%'";									
                  $resultado_consoles = mysqli_query($con, $resultado);
                  
                  $numRegistros = mysqli_num_rows($resultado_consoles);
                  
                  if ($numRegistros !=0) {
                  
						   while($rows_consoles = mysqli_fetch_array($resultado_consoles)){									
                  	
                     $nome = $rows_consoles['nome'];
                     $foto = $rows_consoles['foto'];
							$usuario = $rows_consoles['usuario'];
							$endereco = $rows_consoles['endereco'];
                  
                     echo "$nome<br />";
                     echo "<center><strong><img src= 'img/$foto' width='320' height='250' style='border-radius:0px; border:5px solid #ddd'></strong></center>";
							echo "<strong>Endereço: </strong>$endereco</a><br />";
							echo "<a href=\"vitrine_amigos.php?usuario=$usuario\"><strong>Usuario:</strong>$usuario</a><br /><br />";
                     echo "<hr>";
                                                                                 
						   }     
							}else{
                            echo "Nenhum jogo encontrado!<br><br><br>";
                     }
                ?>
            </form>
         </div>
      </div>
      <!-- /col-lg-8 -->
   </div>
   <!-- /row -->
</div>
<!-- /container -->
<?php
   include "rodape.php";
   ?>