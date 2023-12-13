<!DOCTYPE html>
<?php
   include "menu.php";
   ?>
<?php
   include "config.php";
   session_start();
    
   ?>
<div id="ww">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-lg-offset-2 centered">
            <h1>Lista de usuarios</h1>
            <?php
               $selbanco = "SELECT * FROM usuario";
               $querybanco = mysqli_query($con, $selbanco);
               
               while($l=mysqli_fetch_array($querybanco)){
               	
               	$usuario = $l['usuario'];
               	
               	
               	echo "<a href=\"vitrine_amigos.php?usuario=$usuario\"> $usuario</a><br />"; //LEGA O NOME DO USUARIO SELECIONADO PARA NO LINK ATRAVÉS DA URL
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