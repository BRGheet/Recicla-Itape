<?php $__env->startSection('content'); ?>
<h1>Nova Cooperativa</h1>
<p class="lead">Adicione uma nova cooperativa no sistema</p>
<div class="col-md-offset-2 col-md-7">
	<div class="panel panel-primary">
		<div class="panel-heading">
      	Painel
    	</div>
    	<div class="panel-body">
    		<?php $__currentLoopData = $coops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    		<form id="upload" enctype="multipart/form-data">
    			<label for="id">ID</label>
            	<input class="form-control" id="id" type="text" name="id" value="<?php echo e($coop->id); ?>" readonly>
            	<br>
			    <label for="nome">Nome da cooperativa<span class="font-red">*</span></label>
				<input id="nome" type="text" name="nome"  class="form-control" value="<?php echo e($coop->nome); ?>">
				<br>
				<label for="end">Endereço<span class="font-red">*</span></label>
				<input id="end" type="text" name="endereco" class="form-control" value="<?php echo e($coop->endereco); ?>">
				<br>
				<label for="tel">Telefone<span class="font-red">*</span></label>
				<input id="tel" type="text" name="telefone" class="form-control" value="<?php echo e($coop->telefone); ?>">
				<br>
				<h3>Tipo de lixo que recolhe: <span class="font-red">*</span></h3>
				<?php if($coop->papel == 1): ?>
					<label class="checkbox-inline"><input type="checkbox" class="check" name="papel" checked>Papel</label>
				<?php else: ?>
					<label class="checkbox-inline"><input type="checkbox" class="check" name="papel">Papel</label>
				<?php endif; ?>

				<?php if($coop->plastico == 1): ?>
					<label class="checkbox-inline"><input type="checkbox" class="check" name="plastico" checked>Plastico</label>
				<?php else: ?>
					<label class="checkbox-inline"><input type="checkbox" class="check" name="plastico">Plastico</label>
				<?php endif; ?>

				<?php if($coop->vidro == 1): ?>
					<label class="checkbox-inline"><input type="checkbox" class="check" name="vidro" checked>Vidro</label>
				<?php else: ?>
					<label class="checkbox-inline"><input type="checkbox" class="check" name="vidro">Vidro</label>
				<?php endif; ?>
				<br>
				<br>
				<label for="imagem">Faça o Upload da imagem (Opcional)</label>
				<input id="imagem" type="file" name="imagem">
			</form>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<br>
			<button class="btn btn-green" data-type="coop" data-cod="2">Submeter</button>
    	</div>
  	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.template.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>