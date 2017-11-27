<?php $__env->startSection('cabecalho'); ?>
<?php echo $__env->make('.site.includes.sidebarUser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="col-md-9 InformMain">
	<div class="row">
		<div class="IformTitle">
			<h2>ALTERAR DADOS</h2>
		</div>
		<div class="col-md-12 formUserUpda">
			<form>
				<label>
					Nome:<br>
					<input type="text" name="" value=<?php echo e(Auth::user()->name); ?>>
				</label>
				<label>
					Email:<br>
					<input type="email" name="" readonly="true" style="width: 270px;" value=<?php echo e(Auth::user()->email); ?>>
				</label><br>
				<label>Senha:<br>
					<input type="password" name="" placeholder="***************">
				</label>
				<label>
					Confirmar nova senha:<br>
					<input type="password" name=""  placeholder="***************">
				</label>
			</form>
			<button type="button" class="btn btn-primary">Atualizar Dados</button>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('.site.template.cabecalho', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>