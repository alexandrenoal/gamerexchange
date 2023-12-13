<?php
   include "menu.php";
   ?>
<?php
   session_start();
   
   ?>
<!DOCTYPE html>
<div id="ww">
<br>
<div class="container">
<h1>Cadastrar Game</h1>
<br>
<form method="post" action="cadastrar_vitrine_interesse_jogo.php" enctype="multipart/form-data">
   <table id="cad_table">
      <tr>         
         <td><input type="text" name="nome" id="jogo" class="txt" placeholder="Game"/></td>
      </tr>
         <td>Foto:            
         <Label for="arquivo">Enviar arquivo</Label>
         <input type="file" name="foto" id="arquivo" />
         </td>
      </tr>	
      <tr>
         <input type="hidden" value="<?php $_SESSION['nome'] ?>" />
      </tr>
      <tr>
         <td colspan="2"><input type="submit" value="Cadastrar" class="btn" id="btnCad"> 
            <a href="vitrine.php">
            <input type="button" value="Voltar" class="btn" id="btnCancelar">
            </a>
         </td>
      </tr>
   </table>
</form>
<br><br><br><br><br><br><br><br><br><br>
</div>
</div>
<?php
   include "rodape.php";
   ?>