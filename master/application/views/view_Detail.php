<style type="text/css">

  #buangLine{
    border: none;
    background-color: transparent;
    resize: none;
    outline: none;
  }

</style>

<?php foreach ($output as $data): ?>
  <!-- Horizontal Form -->
  <div class="box-header with-border">
    <div class="col-md-6">
      <h3 class="box-title">Detalles de la noticia</h3>
    </div>

    <div class="col-md-6">
      <span class="pull-right">

        <button class="btn btn-default" id = "butangBack"><i class="fa fa-arrow-left"> </i> Atras</button>

      </span>
    </div>
  </div>
  <!-- /.box-header -->
  <!-- form start -->


  <form class="form-horizontal" id="dataCryo" method="post" enctype="multipart/form-data">

    <div class="box-body">

      <div class="form-group">
        <label for="" class="col-sm-2 control-label">Titulo : </label>

        <div class="col-sm-6">
          <h5 class="col-sm-6 "><?php echo $data->Titulo; ?></h5>
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-2 control-label">Contenido : </label>

        <div class="col-sm-6">
          <h5 class="col-sm-6 "><?php echo $data->Contenido; ?></h5>
        </div>
      </div>


      <div class="form-group">
        <label for="" class="col-sm-2 control-label">Clasificacion : </label>

        <div class="col-sm-6">
          <h5 class="col-sm-6 "><?php echo $data->Clasificacion; ?></h5>
        </div>
      </div>


      <div class="form-group">
        <label for="" class="col-sm-2 control-label">imagen : </label>

        <div class="col-sm-6">
          <h5 class="col-sm-6 "><?php echo $data->imagen; ?></h5>
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-2 control-label">fecha: </label>

        <div class="col-sm-6">
          <h5 class="col-sm-6 "><?php echo $data->fecha; ?></h5>
        </div>
      </div>







    <?php endforeach; ?>


  </div>
</form>
<!-- /.box -->



<script>
$(document).ready(function () {

  $('#butangBack').unbind('click').click(function () {
    $.ajax({
      url : "<?php echo base_url();?>welcome/Load_Teacher",
      success: function (result) {
        $('#haha').empty().html(result).fadeIn('slow');
      }});
  })
})
</script>

