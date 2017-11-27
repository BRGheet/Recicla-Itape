<?php $__env->startSection('content'); ?>
<h1>Novo Ponto no Mapa</h1>
<p class="lead">Adicione um ponto no mapa que represente uma nova cooperativa</p>
<div class="col-md-offset-2 col-md-7">
	<div class="panel panel-primary">
		<div class="panel-heading">
      	Painel
    	</div>
    	<div class="panel-body">
    		<?php $__currentLoopData = $pontos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ponto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    		<form id="upload" enctype="multipart/form-data">
    			<label for="id">ID</label>
            	<input class="form-control" id="id" type="text" name="id" value="<?php echo e($ponto->id); ?>" readonly>
            	<br>
			    <label for="nome">Nome da cooperativa</label><span class="font-red">*</span>
				<input id="nome" type="text" name="nome"  class="form-control" value="<?php echo e($ponto->name); ?>">
				<br>
				<label for="descricao">Descrição</label><span class="font-red">*</span>
				<textarea id="descricao" class="form-control" name="descricao"><?php echo e($ponto->content); ?></textarea>
				<br>
				<label for="endereco">Endereço</label><span class="font-red">*</span>
				<input id="endereco" type="text" name="endereco" class="form-control" value="<?php echo e($ponto->address); ?>">
				<br>
				<label for="lat">Latitude</label><span class="font-red">*</span>
				<input id="lat" type="text" name="latitude" placeholder="Latitude do local: " class="form-control" value="<?php echo e($ponto->lat); ?>">
				<br>
				<label for="lng">Longitude</label><span class="font-red">*</span>
				<input id="lng" type="text" name="longitude" placeholder="Longitude do local: " class="form-control" value="<?php echo e($ponto->lng); ?>">
				<h3>Tipo de lixo que recolhe: </h3>
				<?php if($ponto->papel == 1): ?>
					<label class="checkbox-inline"><input type="checkbox" class="check" name="papel" checked>Papel</label>
				<?php else: ?>
					<label class="checkbox-inline"><input type="checkbox" class="check" name="papel">Papel</label>
				<?php endif; ?>

				<?php if($ponto->plastico == 1): ?>
					<label class="checkbox-inline"><input type="checkbox" class="check" name="plastico" checked>Plastico</label>
				<?php else: ?>
					<label class="checkbox-inline"><input type="checkbox" class="check" name="plastico">Plastico</label>
				<?php endif; ?>

				<?php if($ponto->vidro == 1): ?>
					<label class="checkbox-inline"><input type="checkbox" class="check" name="vidro" checked>Vidro</label>
				<?php else: ?>
					<label class="checkbox-inline"><input type="checkbox" class="check" name="vidro">Vidro</label>
				<?php endif; ?>
				<br>
				<br>
			</form>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<button class="btn btn-green" data-type="ponto" data-cod="2">Submeter</button>
    	</div>
  	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.template.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>