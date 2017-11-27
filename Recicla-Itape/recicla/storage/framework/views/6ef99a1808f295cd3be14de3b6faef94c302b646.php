<nav class="navbar navbar-default navbar-green">
    <div class="container">
      <div class="navbar-header cor-branco">
        <button type="button"  class="navbar-toggle pull-left">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
        <a href="/" class="navbar-brand hidden-xs">Recicla Itapê</a>
        <a href="/" class="navbar-brand hidden-sm hidden-md hidden-lg">Recicla Itapê</a>                
      </div>
      <div class="col-md-5 col-md-offset-3 hidden-xs">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/reciclar">Quero Reciclar</a></li>
          <li><a href="/cooperativas">Cooperativas</a></li>
        </ul>
      </div>
      <div class="nav navbar-nav navbar-right">
        <div class="dropdown hidden-xs">
          <?php if(!Auth::guard('web')->check() and !Auth::guard('admin')->check()): ?>
            <a href="<?php echo e(url('cadastro/login')); ?>"><button class="btn btn-blue-outline navbar-btn">Entrar</button></a>
          <?php elseif(Auth::guard('web')->check() and Auth::guard('admin')->check()): ?>
            <div class="btn-group">
              <button type="button" class="btn btn-blue-outline navbar-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="/vouchers">Vouchers</a></li>
                <li><a href="/minha_conta">Minha Conta</a></li>
                <li><a href="/admin">DashBoard</a></li>
                <li><a href="<?php echo e(route('logout')); ?>"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Sair</a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?></form></li>
              </ul>
            </div>
          <?php endif; ?>
          <?php if(Auth::guard('web')->check() and !Auth::guard('admin')->check()): ?>
          <div class="btn-group">
            <button type="button" class="btn btn-blue-outline navbar-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="/vouchers">Vouchers</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="/minha_conta">Minha Conta</a></li>
              <li><a href="<?php echo e(route('logout')); ?>"  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Sair</a>
              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
              <?php echo e(csrf_field()); ?></form>
            </li>
          </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>
