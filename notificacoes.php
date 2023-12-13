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
<center>
   <div class="container">
      <h1>Minhas notificações</h1>
      <h4>GAMES</h4>
      <?php 
         $nome = $_SESSION['nome']; //o nome no session na verdade pega o user
         
         $selbanco = "SELECT * FROM comentarios_jogos WHERE usuario = '$nome' ORDER BY id DESC";
         $querybanco = mysqli_query($con, $selbanco);	
         
         while($l=mysqli_fetch_array($querybanco)){
         	
         	$nome= $l['nome'];
         	$foto = $l['foto'];	
         	$usuario = $l['usuario'];
            $mensagem = $l['mensagem'];	
            $data = $l ['data'];  
         	
         	echo "<img src= 'img/$foto' width='220' height='240' style='margin:28px 28px; border-radius:0px; border:5px solid #ddd';><br />";
            echo "<a href=\"vitrine_amigos.php?usuario=$nome\"><strong>$nome: </strong></a>";                            
         	echo "$mensagem<br />";
            echo "<i><h5>$data</h5></i>";
            echo "<hr />";
         }
         ?>      
      <br><br>	
      <div style="clear: both;"></div>
      <h4>CONSOLES</h4>
      <?php
         $nome = $_SESSION['nome']; //o nome no session na verdade pega o user
         
         $selbanco = "SELECT * FROM comentarios_consoles WHERE usuario = '$nome' ORDER BY id DESC";	
         $querybanco = mysqli_query($con, $selbanco);	
         
         while($l=mysqli_fetch_array($querybanco)){
         	
         	$nome= $l['nome'];
         	$foto = $l['foto'];	
         	$usuario = $l['usuario'];
            $mensagem = $l['mensagem'];	
            $data = $l ['data'];  	
         	
         	echo "<img src= 'img/$foto' width='320' height='250' style='margin:28px 28px; border-radius:0px; border:5px solid #ddd';><br />";	
         	echo "<a href=\"vitrine_amigos.php?usuario=$nome\"><strong>$nome: </strong></a>"; 
         	echo "$mensagem<br />";
            echo "<i><h5>$data</h5></i>";
            echo "<hr />";
         }
         ?>	
</center>
<div style="clear: both;"></div>
</div>
<?php
   include "rodape.php";
   ?>