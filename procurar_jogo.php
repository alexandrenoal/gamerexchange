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
         <h2><?php echo " Pesquisa games!<br>"?></h2>
         <br>
         <div aling="center" id="busca">
            <form action"procurar_jogo.php" enctype="multipart/form-data" name="busca" method="post">
               <input type="text" name="buscar"/>
               <input type="submit" name="enviar" class="btn" value="Procurar game" /><br><br><br>
               <?php	
                  $buscar_jogo = $_POST['buscar'];
                  $resultado = "SELECT * FROM cadastro_jogo WHERE nome LIKE '%$buscar_jogo%'";									
                  $resultado_jogos = mysqli_query($con, $resultado);
                  
                  $numRegistros = mysqli_num_rows($resultado_jogos);
                  
                  if ($numRegistros !=0) {
                  
					   while($rows_jogos = mysqli_fetch_array($resultado_jogos)){									
                  	
						$nome = $rows_jogos['nome'];
						$foto = $rows_jogos['foto'];
						$usuario = $rows_jogos['usuario'];
						$endereco = $rows_jogos['endereco'];
					  
						echo "$nome <br />";
						echo "<center><strong><img src= 'img/$foto' width='220' height='240' style='border-radius:0px; border:5px solid #ddd'></strong></center>";
						echo "<strong>Endereço: </strong>$endereco</a><br />";
						echo "<a href=\"vitrine_amigos.php?usuario=$usuario\"><strong>Usuario: </strong>$usuario</a><br /><br />";
						echo "<hr>";                                  
					}
                    }else{
                         echo "Nenhum jogo encontrado!<br><br><br>";
                    }
                  ?>
            </form>
         </div>
         <!-- /col-lg-8 -->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</div>
<!-- /ww -->
<?php
   include "rodape.php";
   ?>