  <?php $__env->startSection('cabecalho'); ?>
    <?php $__env->startPush('estilos'); ?>
      <link rel="stylesheet" href="<?php echo e(URL::asset('css/jquery.sweet-modal.min.css')); ?>" />
      <script src="<?php echo e(URL::asset('js/tinymce/tinymce.min.js')); ?>"></script>
      <script type="text/javascript">
        tinymce.init({ selector: '#texto' });
      </script>
      <link rel="stylesheet" href="<?php echo e(URL::asset('css/font-awesome.min.css')); ?>">
      <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
      <script>
        $(document).ready(function(){
          $('.pagina').click(function(){

            var pagina = this.id;
            pagina = "/"+ pagina;


            $.ajax({
             type: "GET",
             url: pagina,
             success: function(data){
                $('#conteudo').html(data);
              }
            });
          });
       });
      </script>
    <?php $__env->stopPush(); ?>
    <div class="container-fluid">
      <div class='row row-same-height'>
        <nav id="mySidenav" class="sidebar">
          <div class="sidenav-image">
            <h1>ADMIN</h1>
          </div>
          <button class="closebtn" onclick="closeNav()">&times;</button>
          <a href="#" class="pagina" id="info">Nova Informação/Tutorial</a>
          <a href="#" class="pagina" id="ponto">Novo Marcador no mapa</a>
          <a href="#" class="pagina" id="coop">Nova Cooperativa</a>
          <a href="#" class="pagina" id="gift">Nova Recompensa</a>
        </nav>

        <nav class="col-md-2 sidebar-lg hidden-xs hidden-sm" id="adminSidenav">
          <h1>ADMIN</h1>
          <h2>Implementação</h2>
          <a class="pagina" id="add">Adicionar Ponto</a>
          <a class="pagina" id="check">Verificar Voucher</a>
          <a href="/admin">Nova Informação</a>
          <a class="pagina" id="ponto">Novo Marcador no mapa</a>
          <a class="pagina" id="coop">Nova Cooperativa</a>
          <a class="pagina" id="gift">Nova Recompensa</a>
          <h2>Modificação</h2>
          <a href="/admin/info/show">Editar Informações</a>
          <a href="/admin/ponto/show">Editar Marcadores no mapa</a>
          <a href="/admin/coop/show">Editar Cooperativas</a>
          <a href="/admin/gift/show">Editar Recompensas</a>
        </nav>
       <div class="col-md-3"></div>
        <div id="conteudo" class="container col-md-10 col-md-offset-2">
          <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <style type="text/css">
      html, body { height: 100%;overflow: hidden;}
    </style>
    <?php $__env->startPush('scripts'); ?>
    <!-- Script NavBar -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/eb29782670.js"></script>
    <script src="<?php echo e(URL::asset('js/jquery.sweet-modal.min.js')); ?>">
    </script>
    <script src="<?php echo e(URL::asset('js/jquery.sweet-modal.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/jspdf/jspdf.js')); ?>"></script>
    <script type="text/javascript">
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    </script>
    <script type="text/javascript">
      var file = null;
      $(document).on('click', '.btn-green', function(){
        var pagina = null;
        if ($('.btn-green').attr('data-cod') == 1) {
          pagina = $(this).attr('data-type');
          pagina = '/admin/'+pagina+'/store';
        }
        else{
          pagina = $(this).attr('data-type');
          pagina = '/admin/'+pagina+'/update';
        }
        if ($('#upload').length > 0){
          var form = $('#upload')[0];
          file = new FormData(form);
          if ($('#texto').length > 0){
            file.append('texto', tinymce.get('texto').getContent());
          }
        }
        $.ajax({
          type: 'POST',
          data: file,
          dataType: 'text',
          processData: false,
          contentType: false,
          url: pagina,
          success: function(data){
            $.sweetModal({
              content: data,
              icon: $.sweetModal.ICON_SUCCESS
            });
          },
        });
      });
    </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('.site.template.cabecalho', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>