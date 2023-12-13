<?php
   include "menu.php";
   ?>
<?php
   session_start();
   //session_name('perfil');
   if($_SESSION['validacao'] == 1){		
   	}else{
   	header("Location: index.php");
   
   }
   ?>
<div id="ww">
   <br>
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-lg-offset-2 centered">
            <h2>
				<?php
					$nome = $_SESSION['nome'];
					$selbanco = "SELECT * FROM usuario WHERE usuario = '$nome' ";	
					$querybanco = mysqli_query($con, $selbanco);	
               
					while($l=mysqli_fetch_array($querybanco)){               
               
						$foto = $l['foto'];	                       
               
						echo "<strong><img src= 'img/$foto' width='150' height='155'</strong><br /><br />";                        
               }
               
					echo " Encontrar interessados!<br><br>";
               
               ?>
            </h2>            
            <div aling="center" id="busca">                              
               <form action="procurar_interesse_jogos.php" enctype="multipart/form-data" name="busca" method="post">
                  <input type="text" name="buscar" placeholder="Games"/>
                  <input type="submit" neme="enviar" class="btn" value="Buscar" /><br><br>							
               </form>
               <form action="procurar_interesse_consoles.php" enctype="multipart/form-data" name="busca" method="post">
                  <input type="text" name="buscar" placeholder="Consoles"/>
                  <input type="submit" neme="enviar" class="btn" value="Buscar" /><br><br>							
               </form>
            </div>
            <td><a href="perfil.php">Voltar ao home</a></p></td>
            <td><a href="notificacoes.php">Notificações</a></p></td>
            <td><a href="minhas_mensagens.php">Mensagens</a></p></td>
         </div>         
      </div>      
   </div>   
</div>
<?php
   include "rodape.php";
   ?>