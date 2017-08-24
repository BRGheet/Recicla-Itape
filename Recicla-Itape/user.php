<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recicla Itapê</title>
  <!--************ Arquivos Css ****************-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="css/QueroReciclar.css"> -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-default navbar-green">
    <div class="container">
      <div class="navbar-header cor-branco">
        <!-- <a href="#" class="navbar-brand"><img src="img/logo.png" alt="Logo do Recicla Itapê"></a>-->
        <button type="button" onclick="openNav()" class="navbar-toggle pull-left">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
        <a href="index.html" class="navbar-brand hidden-xs">Recicla Itapê</a>
        <a href="index.html" class="navbar-brand hidden-sm hidden-md hidden-lg">Recicla Itapê</a>                
      </div>
      <div class="col-md-6 col-md-offset-3 hidden-xs">
        <ul class="nav navbar-nav">
          <li><a href="/index.html">Home</a></li>
          <li><a href="QueroReciclar.html">Quero Reciclar</a></li>
          <li><a href="cooperativas.html">Cooperativas</a></li>
        </ul>
      </div>
      <div class="btn-group">
      	<button type="button" class="btn btn-default dropdown-toggle btn btn-blue-outline navbar-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Olá, Miquéias <span class="caret"></span>
      	</button>
      	<ul class="dropdown-menu">
      		<li><a href="#">Minha Conta</a></li>
      		<li><a href="#">Meus Pontos</a></li>
      		<li role="separator" class="divider"></li>
      		<li><a href="#">Sair</a></li>
      	</ul>
      </div>
    </div>
  </nav>
  <nav id="mySidenav" class="sidebar">
    <div class="sidenav-image">
      <button class="btn btn-green">Cadastre-se</button>
    </div>
    <button class="closebtn" onclick="closeNav()">&times;</button>
    <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Informações</a>
    <a href="#"><i class="fa fa-play" aria-hidden="true"></i>Vídeos</a>
    <a href="QueroReciclar.html"><i class="fa fa-recycle" aria-hidden="true"></i>Quero Reciclar</a>
    <a href="#"><i class="fa fa-home" aria-hidden="true"></i>Cooperativas</a>
    <a href="#"><i class="fa fa-ticket" aria-hidden="true"></i>Recompensas</a>
    <a href="#"><i class="fa fa-comment" aria-hidden="true"></i>Dicas</a>
    <a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>Sobre</a>
  </nav>
  <!-- Pontos Usuario -->
  <div class="container">
  	
  </div>












    <!-- Script NavBar -->
    <script type="text/javascript" src="js/Navbar.js"></script>
    <!-- <script src="https://use.fontawesome.com/eb29782670.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>