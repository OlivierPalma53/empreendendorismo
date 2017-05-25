<?php
session_start();

$_SESSION['pontos'] = 100;


?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>
	 <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Teste de Empreendedorismo</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

  </head>

  <body>

 <nav class="navbar navbar-default barra_navegacao">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">
        <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>

      </a>
    </div>
  </div>
</nav>

  		<div class="borda" id="perguntas">
  			<h3>Teste de Empreendedorismo</h3><br></br>
        <form>
        	<h4>1- Tem uma ideia formada sobre o projeto que você deseja iniciar ?</h4>
          <div class="form-group">
            <input class="form-control" type="radio" name="diminui" value="0">Sim
          	<input class="form-control" type="radio" name="diminui" value="5">Nao
            <input type="hidden" name="acao" value="1" />
          </div>
          <input type="submit" value="proxima" class="btn btn-primary" />
        </form>
        <?php
          $acao = isset($_GET['acao'])? $_GET['acao'] : null;

          if($acao != null){
            $diminui = $_GET['diminui'];
            $_SESSION['pontos'] = $_SESSION['pontos'] - $diminui;
            header("Location: pergunta2.php");
          }
        ?>
  		</div>


<div id="rodape">
		<div class="container">
			<div class="row">

      <div class="col-md-2 rodape2">
          <ul class="nav">
            <li class="rede-social" title="Siga-nos no Instagram"> <a href="#"><img src="img/facebook.png"/></a></li>
            <li class="rede-social" title="Siga-nos no Twitter"> <a href="#"><img src="img/twitter.png"/>  </a></li>
            <li class="rede-social" title="Siga-nos no Instagram"> <a href="#"><img src="img/instagram.png"/> </a></li>
          </ul>
        </div>

				<div class="col-md-2">
					<h4>PLANEJAMENTO</h4>
					<ul class="nav nav-rodape">
						<p>Dábrio</p>
            <p>Gustavo</p>
            <p>Geovane</p>
            <p>Andreia</p>
            <p>Suelen</p>
            <p>Weverton</p>
            <p>Lara</p>
            <p>Maria</p>
					</ul>
				</div>

        <div class="col-md-2">
          <h4>DESIGN</h4>
          <ul class="nav nav-rodape">
            <p>Henrique Brandão</p>
            <p>John Cunha</p>
            <p>João Vitor Soares</p>
            <p>Letícia</p>
            <p>Manuella Brandão</p>
            <p>Matheus José</p>
          </ul>
        </div>

        <div class="col-md-2">
          <h4>DESENVOLVEDORES</h4>
          <ul class="nav nav-rodape">
            <p>Cristtiano Witor</p>
            <p>Matheus da Costa</p>
            <p>Mayquel Phílipe</p>
            <p>Vitor Lepesqueur</p>
          </ul>
        </div>

			</div>
		</div>
	</div>
  <script src="jquery/jquery-3.2.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
  </html>
