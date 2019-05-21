
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card card-info card-outline">
      <div class="card-header">
        <h1 class="text-capitalize text-center">
          Empresa
          <small>Modificar</small>
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
       <form action="<?php echo base_url();?>Empresa/update" method="POST">
        <input type="hidden" value="<?php echo $empresa->idempresa;?>" name="idempresa">
        <div class="from-group <?php echo !empty(form_error("telefono"))? 'has-error':'';?>">
          <label for="telefono"><h5>Telefono :</h5></label><br>
          <input type="text" class="from-control input-sm" id="telefono" name="telefono" value="<?php echo !empty(form_error("telefono"))? set_value("telefono"):$empresa->telefono?>">
          <?php echo form_error("telefono","<span class='help-block'>","</span>");?>
        </div>
        <br>
        <div class="from-group <?php echo !empty(form_error("email"))? 'has-error':'';?>">
          <label for="email"><h5>Email :</h5></label><br>
          <input type="text" class="from-control input-sm" id="email" name="email" value="<?php echo !empty(form_error("email"))? set_value("email"):$empresa->email?>">
          <?php echo form_error("email","<span class='help-block'>","</span>");?>
        </div>
        <br>
        <div class="from-group <?php echo !empty(form_error("direccion"))? 'has-error':'';?>">
          <label for="direccion"><h5>Direccion :</h5></label><br>
          <input type="text" class="from-control input-sm" id="direccion" name="direccion" value="<?php echo !empty(form_error("direccion"))? set_value("direccion"):$empresa->direccion?>">
          <?php echo form_error("direccion","<span class='help-block'>","</span>");?>
        </div>
        <br>
        <div class="from-group">
          <button type="submit" class="btn btn-info bt-flat"><span class="fa fa-undo"></span> Modificar</button>
        </div>
      </form>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</div>  

</section>
<!-- /.content -->
</div>