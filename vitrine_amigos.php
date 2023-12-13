<?php
   include "menu.php";
   ?>
<?php
   include "config.php"; 
   
   session_start();
   
   ?>
<div id="ww">
   <center>
      <div class="container">
         <h1>Vitrine <?php $usuario = $_GET['usuario']; echo "$usuario";?></h1>
         <?php
         echo "<h3><a href=\"mensagem.php?usuario=$usuario\"> Enviar mensagem</a><br /></h3>";
         ?>
         <h3>Disponíveis para troca</h3>
         <br>
         <h4>Games</h4>
         <?php
            $usuario = $_GET['usuario']; // PEGA O USUARIO RECEBIDO ATRAVES DA URL, selecionada através da página amigos.php, linha 68 do codigo
            
            $selbanco = "SELECT * FROM cadastro_jogo WHERE usuario = '$usuario'";	
            $querybanco = mysqli_query($con, $selbanco);	
            
            while($l=mysqli_fetch_array($querybanco)){
            	
            	$nome = $l['nome'];
            	$foto = $l['foto'];	
            	$login_usuario = $l['usuario'];	
            	
            	echo "<img src= 'img/$foto' width='150' height='170' style='margin:28px 28px; border-radius:0px; border:px solid #ddd'>";
                           		
            }
            ?>	
         <br><br>
         <div style="clear: both;"></div>
         <h4>Consoles</h4>
         <?php
            $usuario = $_GET['usuario']; 
            
            $selbanco = "SELECT * FROM cadastro_console WHERE usuario = '$usuario'";	
            $querybanco = mysqli_query($con, $selbanco);	
            
            while($l=mysqli_fetch_array($querybanco)){
            	
            	$nome = $l['nome'];
            	$foto = $l['foto'];	
            	$usuario = $l['usuario'];	
            				
            	echo "<img src= 'img/$foto' width='287,3' height='205' style='margin:28px 28px; border-radius:0px; border:px solid #ddd'>";
            	
            }
            ?>	
         <div style="clear: both;"></div>
         <b>
            <hr>
         </b>
         <h3>Interesses</h3>
         <br>
         <h4>Games</h4>
         <br>
         <?php
            $usuario = $_GET['usuario']; // PEGA O USUARIO RECEBIDO ATRAVES DA URL, selecionada através da página amigos.php, linha 68 do codigo
            
            $selbanco = "SELECT * FROM vitrine_interesse_jogo WHERE usuario = '$usuario'";	
            $querybanco = mysqli_query($con, $selbanco);	
            
            while($l=mysqli_fetch_array($querybanco)){
            	
            	$jogo = $l['nome'];
            	$foto_jogo = $l['foto'];	
            	$login_usuario = $l['usuario'];	
            	
            	echo "<strong><img src= 'img/$foto_jogo' width='150' height='170' style='margin:28px 28px; border-radius:0px; border:px solid #ddd'>";
                           
            }
            ?><br><br>
         <div style="clear: both;"></div>
         <h4>Consoles</h4>
         <?php
            $usuario = $_GET['usuario']; 
            
            $selbanco = "SELECT * FROM vitrine_interesse_console WHERE usuario = '$usuario'";	
            $querybanco = mysqli_query($con, $selbanco);	
            
            while($l=mysqli_fetch_array($querybanco)){
            	
            	$console = $l['nome'];
            	$foto_console = $l['foto'];	
            	$login_usuario = $l['usuario'];	
            				
            	echo "<img src= 'img/$foto_console' width='287,3' height='205' style='margin:28px 28px; border-radius:0px; border:px solid #ddd'>";
            	
            }
            ?>
   </center>
   </div>
</div>
<?php
   include "rodape.php";
   ?>