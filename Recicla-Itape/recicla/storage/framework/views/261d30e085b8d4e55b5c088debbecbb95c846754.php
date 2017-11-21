<?php $__env->startSection('content'); ?>
<h1>Veja, edite e delete as informações feitas</h1>
<hr>
<?php if(!$gifts->isEmpty()): ?>
<table class="table table-bordered table-hover">
	<tr>
		<th>ID</th>
		<th>Imagem</th>
		<th>Nome</th>
		<th>Pontos</th>
	</tr>
	<?php $__currentLoopData = $gifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($gift->id); ?></td>
		<td><img width="60" height="60" src="../../../uploads/gift/<?php echo e($gift->imagem); ?>"></td>
		<td><?php echo e($gift->nome); ?></td>
		<td><?php echo e($gift->pontos); ?></td>
		<td><a href="/admin/gift/edit=<?php echo e($gift->id); ?>" class="btn btn-warning btn-sm">Editar</a></td>
		<td><a href="/admin/gift/delete=<?php echo e($gift->id); ?>" class="btn btn-danger btn-sm">Deletar</a></td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php else: ?>
	<h3>Não há nenhum registro para editar</h3>
<?php endif; ?>

<?php if(Session::has('success')): ?>
	<p class="alert alert-success">Marcador apagado com sucesso</p>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.template.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>