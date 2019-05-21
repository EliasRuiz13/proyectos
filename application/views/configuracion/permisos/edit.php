
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
          Permiso
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
       <form action="<?php echo base_url();?>Permisos/update" method="POST">
        <input type="hidden" name="idpermisos" value="<?php echo $permisos->idpermisos;?>">
        <div class="from-group">
          <label for="read"><h5>Roles :</h5></label>
          <select name="roles" id="roles" class="from-control" disabled="disabled">
            <?php foreach($roles as $roles):?>
              <option value="<?php echo $roles->idroles;?>"<?php echo $roles->idroles == $permisos->idroles? "selected":"";?>>
                <?php echo $roles->rol_descripcion;?>
              </option>
            <?php endforeach;?>
          </select>
        </div>
        <br>
        <div class="from-group">
          <label for="read"><h5>Menu :</h5></label>
          <select name="menu" id="menu" class="from-control" disabled="disabled">
            <?php foreach($menu as $menu):?>
              <option value="<?php echo $menu->idmenu;?>"<?php echo $menu->idmenu == $permisos->idmenu? "selected":"";?>>
                <?php echo $menu->nombre;?>
              </option>
            <?php endforeach;?>
          </select>
        </div>
        <br>
        <div class="from-group">
          <label for="read"><h5>Leer :</h5></label>
          <label class="radio-inline">
            <input type="radio" name="read" value="1" <?php echo $permisos->read == 1? "checked":"";?>>Si
          </label>
          <label class="radio-inline">
            <input type="radio" name="read" value="0" <?php echo $permisos->read == 0? "checked":"";?>>No
          </label>
        </div>
        <br>
        <div class="from-group">
          <label for="insert"><h5>Agregar :</h5></label>
          <label class="radio-inline">
            <input type="radio" name="insert" value="1" <?php echo $permisos->insert == 1? "checked":"";?>>Si
          </label>
          <label class="radio-inline">
            <input type="radio" name="insert" value="0" <?php echo $permisos->insert == 0? "checked":"";?>>No
          </label>
        </div>
        <br>
        <div class="from-group">
          <label for="update"><h5>Editar :</h5></label>
          <label class="radio-inline">
            <input type="radio" name="update" value="1" <?php echo $permisos->update == 1? "checked":"";?>>Si
          </label>
          <label class="radio-inline">
            <input type="radio" name="update" value="0" <?php echo $permisos->update == 0? "checked":"";?>>No
          </label>
        </div>
        <br>
        <div class="from-group">
          <label for="delete"><h5>Eliminar :</h5></label>
          <label class="radio-inline">
            <input type="radio" name="delete" value="1" <?php echo $permisos->delete == 1? "checked":"";?>>Si
          </label>
          <label class="radio-inline">
            <input type="radio" name="delete" value="0" <?php echo $permisos->delete == 0? "checked":"";?>>No
          </label>
        </div>
        <br>
        <div class="from-group">
          <button type="submit" class="btn btn-info bt-flat"><span class="fa fa-undo"></span> Modificar</button>
        </div>
      </form>
    </div>
    
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</div>  

</section>
<!-- /.content -->
</div>