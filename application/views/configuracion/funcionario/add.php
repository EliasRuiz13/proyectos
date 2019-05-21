
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
          Funcionario
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
     <form action="<?php echo base_url();?>Funcionarios/store" method="POST">
      <div class="from-group <?php echo !empty(form_error("fun_razonsocial"))? 'has-error':'';?>">
        <label for="fun_razonsocial"><h5>Nombres / Apellidos :</h5></label>
        <br>
        <input type="text" class="from-control input-sm" id="fun_razonsocial" name="fun_razonsocial" value="<?php echo set_value("fun_razonsocial");?>">
        <?php echo form_error("fun_razonsocial","<span class='help-block'>","</span>");?>
      </div>
      <div class="from-group <?php echo !empty(form_error("fun_nrodoc"))? 'has-error':'';?>">
        <label for="fun_nrodoc"><h5>Nro de Documento :</h5></label>
        <br>
        <input type="text" class="from-control input-sm" id="fun_nrodoc" name="fun_nrodoc" value="<?php echo set_value("fun_nrodoc");?>">
        <?php echo form_error("fun_nrodoc","<span class='help-block'>","</span>");?>
      </div>
      <div class="from-group <?php echo !empty(form_error("fun_telefono"))? 'has-error':'';?>">
        <label for="fun_telefono"><h5>Telefono :</h5></label>
        <br>
        <input type="text" class="from-control input-sm" id="fun_telefono" name="fun_telefono" value="<?php echo set_value("fun_telefono");?>"> 
        <?php echo form_error("fun_telefono","<span class='help-block'>","</span>");?>
      </div>
      <div class="from-group <?php echo !empty(form_error("fun_direccion"))? 'has-error':'';?>">
        <label for="fun_direccion"><h5>Direccion :</h5></label>
        <br>
        <input type="text" class="from-control input-sm" id="fun_direccion" name="fun_direccion" value="<?php echo set_value("fun_direccion");?>">
        <?php echo form_error("fun_direccion","<span class='help-block'>","</span>");?>
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