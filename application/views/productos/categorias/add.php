
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card card-success card-outline">
      <div class="card-header">
        <h1 class="text-capitalize text-center">
          Categorias
          <small>Nuevo</small>
        </h1>
      </div>
      <div class="card-body"> 
       
        <?php if($this->session->flashdata("error")):?>
         <div class="alert alert-danger alert-dismissible">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
             &times;
           </button>
           <p><i class="icon fa fa-ban"></i><?php if($this->session->flashdata("error"));?></p>

         </div> 
       <?php endif;?>

       <!-- /.card-header -->
       <form action="<?php echo base_url();?>Categorias/store" method="POST">
        <div class="from-group <?php echo !empty(form_error("nombre"))? 'has-error':'';?>">
          <label for="cat_descripcion"><h5>Nombre:</h5></label>
          <input type="text" class="from-control input-sm" id="cat_descripcion" name="cat_descripcion" value="<?php echo set_value("cat_descripcion");?>">
          <?php echo form_error("cat_descripcion","<span class='help-block'>","</span>");?>
        </div>
        <br>
        <form method="POST" id="form">
        <div class="from-group">
          <button type="submit" class="btn btn-green bt-flat"><span class="fa fa-save"></span> Guardar</button>
        </div>
        </form>
      </form>
      
      <!-- /.box-body -->
    </div>
  </div>
  <!-- /.box -->
</section>
<!-- /.content -->
</div>