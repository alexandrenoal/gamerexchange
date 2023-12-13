<?php
   include "menu.php";
   ?>
<?php
   include "config.php";
   
   session_start();
   
   ?>
<!DOCTYPE html>
<div id="ww">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-lg-offset-2 centered">
            <h1>Postagens de Consoles</h1>
            <td>
               <h2><a href="formulario_cadastrar_console.php">Postar Console</a></p><br></h2>
            </td>
            <?php
               $selbanco = "SELECT * FROM cadastro_console ORDER BY id DESC";
               $querybanco = mysqli_query($con, $selbanco);
               
               while($l=mysqli_fetch_array($querybanco)){
               	
               	$nome = $l['nome'];
               	$desenvolvedora = $l['desenvolvedora'];
               	$descricao = $l['descricao'];
               	$endereco = $l['endereco'];
               	$foto = $l['foto'];		
                  $login_usuario =$l['usuario'];
                  $data = $l['data'];
               			
               	echo "<strong>$nome </strong> <br />";
               	echo "<a href=\"comentarios_consoles.php?usuario=$login_usuario&foto=$foto\"><img src='img/$foto' width='580' height='430' style='border-radius:0px; border:0px solid #ddd'></a><br />";
               	echo "<strong>Desenvolvedora:</strong> $desenvolvedora <br />";
               	echo "<strong>Descricao:</strong> $descricao <br />";
               	echo "<strong>Cidade:</strong> $endereco <br />";
                  echo "<strong>Data:</strong> $data <br />";
               	echo "<a href=\"vitrine_amigos.php?usuario=$login_usuario\"><strong>Usuario: </strong>$login_usuario</a><br /><br />";		
               	echo "<hr />";
               }
               ?>	
         </div>
      </div>
   </div>
</div>
<?php
   include "rodape.php";
   ?>