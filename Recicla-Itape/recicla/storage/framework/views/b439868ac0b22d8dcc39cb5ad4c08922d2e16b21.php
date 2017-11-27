<?php $__env->startSection('cabecalho'); ?>
<div class="container-fluid TutoriaisMain">
	<div class="Title">
		<?php $__empty_1 = true; $__currentLoopData = $tutoriais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
		<h1><?php echo e($news->titulo); ?></h1>
		<p>
			<i class="fa fa-user" aria-hidden="true"> Autor: Miqueias</i> 

			<i class="fa fa-calendar-check-o" aria-hidden="true"> Data:<?php echo e(date('d/m/Y', strtotime($news->dataHora ))); ?></i>

			<i class="fa fa-clock-o" aria-hidden="true"> Hora:<?php echo e(date('H:i', strtotime($news->dataHora ))); ?></i>
		</p>	
	</div>

	<div class="row">
		<div class="col-md-2 tutoLeft">
			 <!-- <img src="<?php echo e(URL::asset('img/teste.jpg')); ?>" alt="profile Pic" height="300" width="200"> -->
		</div>
		<div class="col-md-8 tutoCenter">
			<div class="VideoPlay col-md-12">
				<iframe src="<?php echo e($news->LinkVideo); ?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-md-12 textTutorial">
				<p><?php echo e($news->texto); ?></p>
			</div>
		</div>
		<div class="col-md-2 tutoRight"></div>
	</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<h1>Desculpa Nenhuma Noticia Encontrada!</h1>
<?php endif; ?>
<style type="text/css">
	body{
		background-color: #FFFAFA;
	}
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('.site.template.cabecalho', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>