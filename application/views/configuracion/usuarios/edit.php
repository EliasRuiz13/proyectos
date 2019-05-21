
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
       <form action="<?php echo base_url();?>Usuarios/update" method="POST">
        <input type="hidden" value="<?php echo $usuarios->idusuario;?>" name="idusuario">
        <div class="from-group <?php echo !empty(form_error("usu_nombre"))? 'has-error':'';?>">
          <label for="usu_nombre"><h5>Nombre :</h5></label>
          <br>
          <input type="text" class="from-control input-sm" id="usu_nombre" name="usu_nombre" value="<?php echo !empty(form_error("usu_nombre")) ? set_value('usu_nombre'):$usuarios->usu_nombre?>">
          <?php echo form_error("usu_nombre","<span class='help-block'>","</span>");?>
            </div>
            <div class="from-group">
          <label for="roles"><h5>Id Rol :</h5></label>
          <br>
          <select name="roles" id="roles" class="from-control">
            <?php foreach($roles as $roles):?>
              <?php if($roles->idroles == $roles->idroles):?>
               <option value="<?php echo $roles->idroles?>" selected>
                <?php echo $roles->rol_descripcion;?></option>
                <?php else:?>
                  <option value="<?php echo $roles->idroles?>">
                    <?php echo $roles->rol_descripcion;?></option>
                  <?php endif;?>
                <?php endforeach;?>
              </select>
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