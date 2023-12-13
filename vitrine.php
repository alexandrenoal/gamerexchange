<!DOCTYPE html>
<?php
   include "menu.php";
   ?>
<?php
   require_once "config.php";
   ?>
<?php
   session_start();
   if($_SESSION['validacao'] == 1){		
   }else{
   header("Location: index.php");

}
   ?>
<div id="ww">
   <center>
      <div class="container">
         <h1>Vitrine</h1>
         <a href="formulario_cadastrar_vitrine_jogo.php" input type="submit" value="Cadastrar" class="btn">Cadastrar Game</a> 
         <a href="formulario_cadastrar_vitrine_console.php" input type="submit" value="Cadastrar" class="btn">Cadastrar Console</a>							
         <!--<a href="formulario_cadastrar_interesse.php" input type="submit" value="Cadastrar" class="btn">Cadastrar Interesse</a></p>-->
         <td>
            <h4>Meus Games</h4>
         </td>
         <?php 
            $nome = $_SESSION['nome']; //o nome no session na verdade pega o user
            
            $selbanco = "SELECT * FROM cadastro_jogo WHERE usuario = '$nome'";
            $querybanco = mysqli_query($con, $selbanco);	
            
            while($l=mysqli_fetch_array($querybanco)){
            	
               $id= $l['id'];
            	$nome= $l['nome'];
            	$foto = $l['foto'];	
            	$usuario = $l['usuario'];	
            	
            	echo "<a href=\"foto_jogo.php?usuario=$usuario&foto=$foto&id=$id\"><img src= 'img/$foto' width='150' height='170' style='margin:28px 28px; border-radius:0px; border:0px solid #ddd';></a>";              
            }
            ?>      
         <br><br>	
         <div style="clear: both;"></div>
         <h4>Meus consoles</h4>
         <?php
            $nome = $_SESSION['nome']; //o nome no session na verdade pega o user
            
            $selbanco = "SELECT * FROM cadastro_console WHERE usuario = '$nome'";	
            $querybanco = mysqli_query($con, $selbanco);	
            
            while($l=mysqli_fetch_array($querybanco)){
            	
            	$nome = $l['nome'];
            	$foto = $l['foto'];	
            	$usuario = $l['usuario'];	
            	
            	echo "<a href=\"foto_console.php?usuario=$usuario&foto=$foto\"><img src= 'img/$foto' width='287,3' height='205' style='margin:28px 28px; border-radius:0px; border:1px solid #ddd'></a>";		
            	
            }
            ?>	
         <div style="clear: both;"></div>
         <b>
            <hr>
         </b>
         <h3>Meus interesses</h3>
         <br>
         <a href="formulario_cadastrar_vitrine_interesse_jogo.php" input type="submit" value="Cadastrar" class="btn">Cadastrar Game</a>	
         <a href="formulario_cadastrar_vitrine_interesse_console.php" input type="submit" value="Cadastrar" class="btn">Cadastrar Console</a>
         <h4>Games</h4>
         <?php
            $nome = $_SESSION['nome']; //o nome no session na verdade pega o user
            
            $selbanco = "SELECT * FROM vitrine_interesse_jogo WHERE usuario = '$nome'";	
            $querybanco = mysqli_query($con, $selbanco);	
            
            while($l=mysqli_fetch_array($querybanco)){
            	
            	$jogo = $l['nome'];
            	$foto = $l['foto'];	
            	$usuario = $l['usuario'];	
            	
            	echo "<a href=\"foto_jogo_interesse.php?usuario=$usuario&foto=$foto\"><img src= 'img/$foto' width='150' height='170' style='margin:28px 28px; border-radius:0px; border:1px solid #ddd'></a>";	
            	
            }
            ?><br><br>
         <div style="clear: both;"></div>
         <h4>Consoles</h4>
         <?php
            $nome = $_SESSION['nome']; //o nome no session na verdade pega o user
            
            $selbanco = "SELECT * FROM vitrine_interesse_console WHERE usuario = '$nome'";	
            $querybanco = mysqli_query($con, $selbanco);	
            
            while($l=mysqli_fetch_array($querybanco)){
            	
            	$console = $l['nome'];
            	$foto = $l['foto'];	
            	$usuario = $l['usuario'];	
            	
            	echo "<a href=\"foto_console_interesse.php?usuario=$usuario&foto=$foto\"><img src= 'img/$foto' width='287,3' height='205' style='margin:28px 28px; border-radius:0px; border:1px solid #ddd'></a>";
            	 
            }
            ?>
   </center>
   </div>	
</div>
<?php
   include "rodape.php";
   ?>