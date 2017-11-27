<?php $__env->startSection('content'); ?>

<h1>Nova Informação ou Tutorial</h1>
<p class="lead">Adicione alguma novidade ou informação ou tutorial para o usuário.</p>
<p class="lead">Opções com um "<span class="font-red">*</span>" são obrigatórias</p>
<div class="col-md-offset-2 col-md-7">
  <div class="panel panel-primary">
    <div class="panel-heading">
      Painel
    </div>
    <div class="panel-body">
        <?php $__currentLoopData = $infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form id="upload" enctype="multipart/form-data">
            <label for="id">ID</label>
            <input class="form-control" id="id" type="text" name="id" value="<?php echo e($info->id); ?>" readonly>
            <label for="titulo">Titulo(Min:56 Max:90)<span class="font-red">*</span></label>
            <input id="titulo" type="text" name="titulo" class="form-control" value="<?php echo e($info->titulo); ?>">
            <br>
            <label for="autor">Autor</label>
            <input id="autor" type="text" name="autor"  class="form-control" value="<?php echo e($info->autor); ?>">
            <br>
            <label for="video">Vídeo</label>
            <input type="text" name="video" id="video" class="form-control" value="<?php echo e($info->video); ?>">
            <br>
            <label for="imagem">Imagem (Não é obrigatório)</label>
            <input id="imagem" type="file" name="imagem">
            <br>
            <label for="resumo">Resumo do texto<span class="font-red">*</span></label>
            <textarea class="form-control" id="resumo" name="resumo"><?php echo e($info->resumo); ?></textarea>
            <br>
            <label for="texto">Texto<span class="font-red">*</span></label>
            <textarea id="texto" name="texto" class="form-control"><?php echo e($info->texto); ?></textarea>
            <br>
        </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button class="btn btn-green" data-cod="2" data-type="info">Submeter</button>
    </div>
  </div>
</div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.template.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>