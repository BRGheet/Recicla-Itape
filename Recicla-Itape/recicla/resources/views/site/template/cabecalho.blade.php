<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$title or 'Recicla Itapê'}}</title>
  <!--************ Arquivos Css ****************-->
  <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
  @stack('estilos')
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
        <a href="/" class="navbar-brand hidden-xs">Recicla Itapê</a>
        <a href="/" class="navbar-brand hidden-sm hidden-md hidden-lg">Recicla Itapê</a>                
      </div>
      <div class="col-md-6 col-md-offset-3 hidden-xs">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/reciclar">Quero Reciclar</a></li>
          <li><a href="/cooperativas">Cooperativas</a></li>
        </ul>
      </div>
      <div class="nav navbar-nav navbar-right">
        <div class="dropdown hidden-xs">
          @if (Auth::guest())
          <a href="{{url('cadastro/login')}}"><button class="btn btn-blue-outline navbar-btn">Entrar</button></a>
          @else
          <div class="btn-group">
            <button type="button" class="btn btn-blue-outline navbar-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name }} <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="#">Resgatar Vouchers</a></li>
              <li><a href="/vouchers">Vouchers</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="/minha_conta">Minha Conta</a></li>
              <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Sair</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}</form>
            </li>
          </ul>
        </div>
        @endif
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
  <a href="reciclar"><i class="fa fa-recycle" aria-hidden="true"></i>Quero Reciclar</a>
  <a href="cooperativas"><i class="fa fa-home" aria-hidden="true"></i>Cooperativas</a>
  <a href="#"><i class="fa fa-ticket" aria-hidden="true"></i>Recompensas</a>
  <a href="#"><i class="fa fa-comment" aria-hidden="true"></i>Dicas</a>
  <a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>Sobre</a>
</nav>

@yield('cabecalho')

<!-- <div class="container-fluid rodapeMain">
  <div class="rodape-menus col-md-10">
    <section class="col-md-2 listasRodape">
      <h2>Recicla Itapê</h2>
      <ul>
        <li><span class="glyphicon glyphicon-chevron-right"></span><a href=""> Home</a></li>

        <li><span class="glyphicon glyphicon-chevron-right"></span><a href=""> Quero Reciclar</a></li>

        <li><span class="glyphicon glyphicon-chevron-right"></span><a href=""> Cooperativas</a></li>

        <li><span class="glyphicon glyphicon-chevron-right"></span><a href=""> Entrar</a></li>
      </ul>
    </section>
    <section class="col-md-2 listasRodape">
      <h2>Redes Sociais</h2>
      <ul>
        <li><span class="glyphicon glyphicon-chevron-right"></span><a href=""> Facebook</a></li>

        <li><span class="glyphicon glyphicon-chevron-right"></span><a href=""> Instagram</a></li>

        <li><span class="glyphicon glyphicon-chevron-right"></span><a href=""> Twitter</a></li>

        <li><span class="glyphicon glyphicon-chevron-right"></span><a href=""> Youtube</a></li>
      </ul>
    </section>
    <section class="col-md-2 listasRodape">
      <h2>Contato</h2>
      <ul>
        <li><span class="glyphicon glyphicon-chevron-right"></span><a href=""> Ajuda</a></li>

        <li><span class="glyphicon glyphicon-chevron-right"></span><a href=""> Reclamação</a></li>

        <li><span class="glyphicon glyphicon-chevron-right"></span><a href=""> Telefones</a></li>

        <li><span class="glyphicon glyphicon-chevron-right"></span><a href=""> Email</a></li>
      </ul>
    </section>
  </div>
</div> -->
<!-- Script NavBar -->
<script type="text/javascript" src="{{ URL::asset('js/Navbar.js') }}"></script>
<script src="https://use.fontawesome.com/6a84f90556.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
@stack('scripts')
</body>
</html>