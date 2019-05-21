
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
          Usuario
          <small>Modificar Contraseña</small>
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
       <form action="<?php echo base_url();?>Usuarios/update" method="POST">
        <input type="hidden" value="<?php echo $usuarios->idusuario;?>" name="idusuario">
        <div class="from-group <?php echo !empty(form_error("usu_pass"))? 'has-error':'';?>">
          <label for="usu_pass"><h5>Nueva Contraseña :</h5></label>
          <br>
          <input type="text" class="from-control input-sm" id="usu_pass" name="usu_pass" value="<?php echo !empty(form_error("usu_pass")) ? set_value('usu_pass'):$usuarios->usu_pass?>">
          <?php echo form_error("usu_pass","<span class='help-block'>","</span>");?>
            </div>
            <br>
            <div class="from-group">
              <button type="submit" class="btn btn-success bt-flat"><span class="fa fa-undo"></span> Modificar</button>
            </div>
          </form>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </div>  

    </section>
    <!-- /.content -->
  </div>