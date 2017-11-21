<?php $__env->startSection('cabecalho'); ?>

<div class="container">
  <img id="cad-bg" src="<?php echo e(URL::asset('img/registro.jpg')); ?>" alt="Background">
  <!-- <img style="transform: scale(0.5); text-align: center;" src="img/logo.png" alt="Logo do Recicla Itape"> -->
  <h1 class="title_LoginCadas">Faça o Login ou Cadastre-se</h1>
  <hr>
  <div class="row">
    <div class="cadastro col-md-5">
      <p class="lead">Ainda não tem um cadastro ?</p>
      <h1 class="green">Cadastre-se</h1>

      <?php if($errors->cadastro->first('name')): ?>
      <span class="help-block">
        <strong><?php echo e($errors->cadastro->first('name')); ?></strong>
      </span>
      <?php endif; ?>

      <?php if($errors->cadastro->first('email')): ?>
      <span class="help-block">
        <strong><?php echo e($errors->cadastro->first('email')); ?></strong>
      </span>
      <?php endif; ?>

      <?php if($errors->cadastro->first('password')): ?>
      <span class="help-block">
        <strong><?php echo e($errors->cadastro->first('password')); ?></strong>
      </span>
      <?php endif; ?>

      <?php if($errors->cadastro->first('Senha_Confirme')): ?>
      <span class="help-block">
        <strong><?php echo e($errors->cadastro->first('Senha_Confirme')); ?></strong>
      </span>
      <?php endif; ?>

      <form method="POST" action="<?php echo e(route('register')); ?>">

        <?php echo csrf_field(); ?>

        <label for="nome">Nome</label>
        <input id="nome" type="text" name="Nome" class="form-control"  value="<?php echo e(old('Nome')); ?>" placeholder="Digite seu nome completo" required="required"><br>

        <label for="email">E-mail</label>
        <input id="email" type="email" name="Email" class="form-control"  value="<?php echo e(old('Email')); ?>" placeholder="Digite seu e-mail" required="required"><br>

        <label for="senha">Senha</label>
        <input id="senha" type="password" name="Senha" class="form-control" placeholder="Ao menos 8 digitos" value="<?php echo e(old('Senha')); ?>" required="required">
        <br>

        <label for="senha2">Confirme a senha</label>
        <input id="senha2" type="password" class="form-control" placeholder="Digite novamente sua senha" name="Senha_Confirme" value="<?php echo e(old('Senha_Confirme')); ?>" required="required"><br>

        <button class="btn btn-green">Cadastrar</button>
      </form>
    </div>


    <div class="cadastro col-md-5 col-md-offset-2">
      <p class="lead">Caso já tenha uma conta,</p>
      <h1 class="blue">Entre Agora</h1>
      <form  method="POST" action="<?php echo e(route('login')); ?>">

        <?php echo csrf_field(); ?>

        <?php if($errors->LoginErrors->first('email')): ?>
          <span class="help-block">
            <strong><?php echo e($errors->LoginErrors->first('email')); ?></strong>
          </span>
        <?php endif; ?>
       
        <?php if($errors->LoginErrors->first('password')): ?>
          <span class="help-block">
            <strong><?php echo e($errors->LoginErrors->first('password')); ?></strong>
          </span>
        <?php endif; ?>
        <?php if($errors->any()): ?>
        <span class="help-block">
          <strong><?php echo e($errors->first()); ?></strong>
        </span>
        <?php endif; ?>
        <label for="nome">E-mail</label>
        <input id="nome" type="email" name="email" class="form-control"  placeholder="Digite seu email" value="<?php echo e(old('email')); ?>" required="required">
        <br>
        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
          <label for="senha">Senha</label>
          <input id="senha" type="password" name="password" class="form-control" placeholder="Digite sua senha" value="<?php echo e(old('password')); ?>" required="required">
          <br>

          <a href="<?php echo e(route('password.request')); ?>">Esqueci a minha senha</a>
          <br>
          <br>
          <button class="btn btn-green pull-right">Entrar</button>
        </form>
      </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('.site.template.cabecalho', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>