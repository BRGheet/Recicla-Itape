<!--********************** -->
<!--   Include Cabecalho   -->
<!--***********************-->
<?php
  include("cabecalho.php");
?>

    <nav id="mySidenav" class="sidebar">
    	<div class="sidenav-image">
    		<button class="btn btn-green">Cadastre-se</button>
    	</div>
    	<button class="closebtn" onclick="closeNav()">&times;</button>
    	<a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Informações</a>
    	<a href="#"><i class="fa fa-play" aria-hidden="true"></i>Vídeos</a>
    	<a href="#"><i class="fa fa-recycle" aria-hidden="true"></i>Quero Reciclar</a>
    	<a href="#"><i class="fa fa-home" aria-hidden="true"></i>Cooperativas</a>
    	<a href="#"><i class="fa fa-ticket" aria-hidden="true"></i>Recompensas</a>
    	<a href="#"><i class="fa fa-comment" aria-hidden="true"></i>Dicas</a>
    	<a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>Sobre</a>
    </nav>

    <!-- Conteudo -->
    <div class="nav-side-menu">
    <div class="brand">Filtro</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">

                <li>
                  <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i>Papel</a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed">
                  <a href="#"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Plastico</a>
                </li>

                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-database" aria-hidden="true"></i> Metal</a>
                </li>  

                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i> Oleo</a>
                </li>

                <li>
                  <a href="#"><i class="fa fa-glass" aria-hidden="true"></i> Vidro</a>
                </li>

                 <li>
                    <a href="#"><i class="fa fa-desktop" aria-hidden="true"></i> Eletrônicos</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="map"></div>






    <!-- Script Google Maps -->
    <script type="text/javascript" src="js/GoogleMaps.js"></script>
     <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKTFiIq0LFTvHk92BdJ1qnyUf_U3AGDOE&callback=initMap">
    </script>


    
    <!-- Script NavBar -->
    <script type="text/javascript" src="js/Navbar.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
</html>