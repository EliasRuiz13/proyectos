
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
          Usuario
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
       <form action="<?php echo base_url();?>Usuarios/store" method="POST">
        <div class="from-group">
          <label for="funcionario"><h5>Nombre / Apellido :</h5></label>
          <br>
          <select name="funcionario" id="funcionario" class="from-control">
            <?php foreach($funcionario as $funcionario):?>
             <option value="<?php echo $funcionario->idfun?>">
              <?php echo $funcionario->fun_razonsocial;?></option>
            <?php endforeach;?>
          </select>
        </div>
          <br>
        <div class="from-group <?php echo !empty(form_error("usu_funmenu"))? 'has-error':'';?>">
          <label for="usu_funmenu"><h5>Nombre logueado :</h5></label><br>
          <input type="text" class="from-control input-sm" id="usu_funmenu" name="usu_funmenu" value="<?php echo set_value("usu_funmenu");?>">
          <?php echo form_error("usu_funmenu","<span class='help-block'>","</span>");?>
        </div><br>
        <div class="from-group <?php echo !empty(form_error("usu_nombre"))? 'has-error':'';?>">
          <label for="usu_nombre"><h5>Usuario :</h5></label>
          <br>
          <input type="text" class="from-control input-sm" id="usu_nombre" name="usu_nombre" value="<?php echo set_value("usu_nombre");?>">
          <?php echo form_error("usu_nombre","<span class='help-block'>","</span>");?>
        </div><br>
        <div class="from-group <?php echo !empty(form_error("usu_pass"))? 'has-error':'';?>">
          <label for="usu_pass"><h5>Contraseña :</h5></label>
          <br>
          <input type="text" class="from-control input-sm" id="usu_pass" name="usu_pass" value="<?php echo set_value("usu_pass");?>">
          <?php echo form_error("usu_pass","<span class='help-block'>","</span>");?>
        </div><br>
        <div class="from-group">
        <label for="roles"><h5>Id Rol :</h5></label>
        <br>
        <select name="roles" id="roles" class="from-control">
          <?php foreach($roles as $roles):?>
           <option value="<?php echo $roles->idroles?>">
            <?php echo $roles->rol_descripcion;?></option>
          <?php endforeach;?>
        </select>
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