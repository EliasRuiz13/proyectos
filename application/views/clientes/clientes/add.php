
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
          Cliente
          <small>Nuevo</small>
        </h1>
      </div>
      <div class="card-body">  

        <?php if($this->session->flashdata("error")):?>

        </button> <div class="alert alert-danger alert-dismissible">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
           &times;
           <p><i class="icon fa fa-ban"></i><?php if($this->session->flashdata("error"));?></p>

         </div> 
       <?php endif;?> <?php if($this->session->flashdata("success")):?>
       
     </button> <div class="alert alert-danger alert-dismissible">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
         &times;
         <p><i class="icon fa fa-ban"></i><?php if($this->session->flashdata("success"));?></p>

       </div> 
     <?php endif;?>

     <!-- /.card-header -->
     <form action="<?php echo base_url();?>Clientes/store" method="POST">
      <div class="from-group <?php echo !empty(form_error("cli_razonsocial"))? 'has-error':'';?>">
        <label for="cli_razonsocial"><h5>Nombres / Apellidos :</h5></label>
        <br>
        <input type="text" class="from-control input-sm" id="cli_razonsocial" name="cli_razonsocial" value="<?php echo set_value("cli_razonsocial");?>">
        <?php echo form_error("cli_razonsocial","<span class='help-block'>","</span>");?>
      </div>
      <div class="from-group <?php echo !empty(form_error("cli_nrodoc"))? 'has-error':'';?>">
        <label for="cli_nrodoc"><h5>Nro de Documento :</h5></label>
        <br>
        <input type="text" class="from-control input-sm" id="cli_nrodoc" name="cli_nrodoc" value="<?php echo set_value("cli_nrodoc");?>">
        <?php echo form_error("cli_nrodoc","<span class='help-block'>","</span>");?>
      </div>
      <div class="from-group <?php echo !empty(form_error("cli_telefono"))? 'has-error':'';?>">
        <label for="cli_telefono"><h5>Telefono :</h5></label>
        <br>
        <input type="text" class="from-control input-sm" id="cli_telefono" name="cli_telefono" value="<?php echo set_value("cli_telefono");?>" required="required">
        <?php echo form_error("cli_telefono","<span class='help-block'>","</span>");?>
      </div>
      <div class="from-group">
        <label for="cli_direccion"><h5>Direccion :</h5></label>
        <br>
        <input type="text" class="from-control input-sm" id="cli_direccion" name="cli_direccion">
      </div>
      <br>
      <div class="from-group">
        <button type="submit" class="btn btn-green bt-flat"><span class="fa fa-save"></span> Guardar</button>
      </div>
    </form>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>  
</section>
<!-- /.content -->
</div>