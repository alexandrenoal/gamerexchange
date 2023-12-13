<!DOCTYPE html>
<?php
require_once "config.php";
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>GamerExchange </title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>

   
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">GamerExchange</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Renove sem gastar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
</body>

      <!-- +++++ Projects Section +++++ -->
      <div id="ww">
      <div class="container pt">
         <div id="cadastro">
            <h1>Insira seus dados para cadastro</h1>
            <br><br>
            <form method="post" action="cadastrar_usuario.php" enctype="multipart/form-data">
               <table id="cad_table">
                  <tr>
                     <td><input type="text" name="nome" id="nome" class="txt" placeholder="Nome"/></td>
                  </tr>
                  <tr>
                     <td><input type="text" name="email" id="email" class="txt" placeholder="Email"/></td>
                  </tr>
                  <tr>
                     <td><input type="text" name="usuario" id="usuario" class="txt" maxlength="15" placeholder="Usuario"/></td>
                  </tr>
                  <tr>
                     <td><input type="password" name="senha" id="senha" class="txt" maxlength="15" placeholder="Senha"/></td>
                  </tr>
                  </tr>	
                  <td>Foto:		
                  <Label for="arquivo">Enviar arquivo</Label>
                  <input type="file" name="foto" id="arquivo" /></td>	
                  </tr>	
                  <tr>
                     <td colspan="2"><input type="submit" value="Cadastrar" class="btn" id="btnCad"> 
                        <a href="./">
                        <input type="button" value="Cancelar" class="btn" id="btnCancelar">
                        </a>
                     </td>
                  </tr><br>
               </table>
            </form>
         </div>   
         </div>
      </div>
<?php
  include "rodape.php";
  ?>
      