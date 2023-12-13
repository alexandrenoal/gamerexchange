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

    <title>GamerExchange</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>

   
  </head>

  <body>

    <!-- Static navbar -->
    <div class="topo">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <img src="images/logotipo.png">
          <!--<a class="navbar-brand" href="index.php">GamerExchange</a>-->
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">

		  <div class="foto">
                    <img class="foto" src="images/renove.png" alt="">
                </div>

		  <!--<img src="images/renove.png">-->
           <!-- <li><h4><b><font color="#ff7843">Renove sem gastar</font></b></h4></color></li>-->
          </ul>
        </div><!--/.nav-collapse -->
		
      </div>
    </div>

	<div class="linha">
	</div>

<!--SLIDES-->

<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />


<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

</script>

<center>

<div id="templatemo_body_wrapper">
 
        <div id="templatemo_slider">
           <div id="slider-wrapper">
           
                <div id="slider" class="nivoSlider">
                    <img src="images/slider/01.jpg" alt="Slider 01" title="Descubra novos amigos." />
                    <a href="#"><img src="images/slider/02.jpg" alt="Slider 02" title="Divirta-se. " /></a>
                	<img src="images/slider/03.jpg" alt="Slider 03" title="Fortaleça suas amizades." /></div>
						<div id="htmlcaption" class="nivo-html-caption">
               
               
                
                   		
                		</div>
         				</div>
          				<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
         			    <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
          				<script type="text/javascript">
          				  $(window).load(function() {
               			  $('#slider').nivoSlider();
          				  });
            			</script>
        				</div>
       			 <div id="templatemo_main">
         	 <div class="cleaner"></div>
    	</div>
  </div>
    
<center>
</div>


<!--Termina slides -->

	<div id="ww">
	<div class="container pt">
			<center>
			<h3> Efetue seu login ou cadastre-se</h3><br>
				<div id="cadastro">
					<form method="post" action="senha.php">
						<table id="login_table">
							<tr>
								<td><input type="text" name="usuario" id="usuario" class="txt" maxlength="15" placeholder="Login" /></td>
							</tr>
							<tr>							
								<td><input type="password" name="senha" id="senha" class="txt" maxlength="15" placeholder="Senha" /></td>
							</tr>
							<tr>
								<td colspan="2"><input type="submit" value="Entrar" class="btn" id="btnEntrar"> 
								<a href="formulario_cadastrar_usuario.php"><input type="button" value="Cadastrar" class="btn" id="btnCad"></a>
							</td>
						</tr>	
						</table>
					</form>
         	</center>
		 	 <br>
			</div>
		</div>
	</div><!-- /container -->

	<div class="linha">
	</div>
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4>Contatos</h4>
					<p>
						gamerextange@gmail.com<br/>
						suporte@gmail.com <br/>						
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>Links</h4>
					<p>
						<a href="#">Instagram</a><br/>
						<a href="#">Twitter</a><br/>
						<a href="#">Facebook</a>
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>Sobre GamerExchange</h4>
					<p>Criado para troca de games com facilidade e segurança.</p>
				</div><!-- /col-lg-4 -->
			
				</div>		
			</div>
		</div>
	</body>
</html>