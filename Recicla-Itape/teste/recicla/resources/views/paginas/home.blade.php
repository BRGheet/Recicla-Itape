<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recicla Itapê</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="css/QueroReciclar.css">
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
            <div class="nav navbar-nav navbar-right">
              <div class="dropdown hidden-xs">
                  <button class="btn btn-blue-outline navbar-btn">Entrar</button>
              </div>
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
    <!-- Carousel -->
   <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
      <!-- Overlay -->
      <div class="overlay" id="carousel"></div>

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
      </ol>
      
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item slides active">
          <div class="slide-1"></div>
          <div class="hero">
            <hgroup>
                <h1>Recicle seu Lixo</h1>        
                <h3>Ajude o Meio Ambiente</h3>
            </hgroup>
            <button class="btn btn-hero btn-lg" role="button">Procure No Mapa</button>
          </div>
        </div>
        <div class="item slides">
          <div class="slide-2"></div>
          <div class="hero">        
            <hgroup>
                <h1>Lixo no Lixo</h1>        
                <h3>Ganhe Recompensas</h3>
            </hgroup>       
            <button class="btn btn-hero btn-lg" role="button">Veja Agora</button>
          </div>
        </div>
        <div class="item slides">
          <div class="slide-3"></div>
          <div class="hero">        
            <hgroup>
                <h1>Algo Aqui!</h1>        
                <h3>Aprenda a Reciclar</h3>
            </hgroup>
            <button class="btn btn-hero btn-lg" role="button">Clique Aqui</button>
          </div>
        </div>
      </div>
    </div> 
    <section id="one" class="container-fluid">
      <div class="container">
        <div class="textos titulo">
          <h1>Tutoriais sobre a reciclagem</h1>
          <p>Aprenda a reciclar de forma correta!</p>
        </div>
        

    </section>
    <!-- Script NavBar -->
    <script type="text/javascript" src="js/Navbar.js"></script>
    <script src="https://use.fontawesome.com/eb29782670.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>