<?php $__env->startSection('cabecalho'); ?>
	<div class="container ContentCoop">
		<div class="row">
			<div class="col-md-12">
				<?php $__empty_1 = true; $__currentLoopData = $coops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
					<h1><?php echo e($coop->nome); ?></h1>
					<p class="lead">Endereço: <?php echo e($coop->endereco); ?></p>
					<button class="btn btn-green" type="button" data-toggle="collapse" data-target="#collapse<?php echo e($coop->id); ?>">Mais Detalhes</button>
					<br>
					<br>
					<div class="collapse" id="collapse<?php echo e($coop->id); ?>">
					  <div class="panel panel-default">
					  	<div class="panel-body">
					  		<div class="row">
					  			<div class="col-md-4">
					  				<h3>Endereço</h3>
					  				<p><?php echo e($coop->endereco); ?></p>
					  			</div>
					  			<div class="col-md-4">
					  				<h3>Telefone</h3>
					  				<p>(15)<?php echo e($coop->telefone); ?></p>
					  			</div>
					  			<div class="col-md-4">
					  				<h3>Tipo de lixo que recolhe</h3>
					  				<?php if($coop->papel): ?>
          								<span class="glyphicon glyphicon-file green"></span><strong>Papel</strong><br>
          							<?php endif; ?>
          							<?php if($coop->plastico): ?>
          								<span class="glyphicon glyphicon-cd green"></span><strong>Plastico</strong><br>
          							<?php endif; ?>
          							<?php if($coop->vidro): ?>
          								<span class="glyphicon glyphicon-glass green"></span><strong>Vidro</strong>
          							<?php endif; ?>
					  			</div>
					  		</div>
					  	</div>
					  </div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
					<div id="CoopError">
						<h1>Desculpa Nenhuma Cooperativa Encontrada!</h1>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php echo $__env->make('site.includes.rodape', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('.site.template.cabecalho', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>