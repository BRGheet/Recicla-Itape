<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo e(isset($title) ? $title : 'Recicla Itapê'); ?></title>
  <!--************ Arquivos Css ****************-->
  <link href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/font-awesome.min.css')); ?>">
  <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
  <?php echo $__env->yieldPushContent('estilos'); ?>
</head>
<body>
  <?php echo $__env->yieldContent('html'); ?>
  <!-- Script NavBar -->
  <script type="text/javascript" src="<?php echo e(URL::asset('js/Navbar.js')); ?>"></script>
  <script src="https://use.fontawesome.com/eb29782670.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>
  <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>