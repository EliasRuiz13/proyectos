
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
          Permiso
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
       <form action="<?php echo base_url();?>Permisos/store" method="POST">
        <div class="from-group">
          <label for="read"><h5>Roles :</h5></label>
          <select name="rol" id="rol" class="from-control">
            <?php foreach($roles as $rol):?>
              <option value="<?php echo $rol->idroles;?>">
                <?php echo $rol->rol_descripcion;?>
              </option>
            <?php endforeach;?>
          </select>
        </div>
        <br>
        <div class="from-group">
          <label for="read"><h5>Menu :</h5></label>
          <select name="menu" id="menu" class="from-control">
            <?php foreach($menu as $menu):?>
              <option value="<?php echo $menu->idmenu;?>">
                <?php echo $menu->nombre;?>
              </option>
            <?php endforeach;?>
          </select>
        </div>
        <br>
        <div class="from-group">
          <label for="read"><h5>Leer :</h5></label>
          <label class="radio-inline">
            <input type="radio" name="read" value="1" checked="checked">Si
          </label>
          <label class="radio-inline">
            <input type="radio" name="read" value="0">No
          </label>
        </div>
        <br>
        <div class="from-group">
          <label for="read"><h5>Agregar :</h5></label>
          <label class="radio-inline">
            <input type="radio" name="insert" value="1" checked="checked">Si
          </label>
          <label class="radio-inline">
            <input type="radio" name="insert" value="0">No
          </label>
        </div>
        <br>
        <div class="from-group">
          <label for="read"><h5>Editar :</h5></label>
          <label class="radio-inline">
            <input type="radio" name="update" value="1" checked="checked">Si
          </label>
          <label class="radio-inline">
            <input type="radio" name="update" value="0">No
          </label>
        </div>
        <br>
        <div class="from-group">
          <label for="read"><h5>Eliminar :</h5></label>
          <label class="radio-inline">
            <input type="radio" name="delete" value="1" checked="checked">Si
          </label>
          <label class="radio-inline">
            <input type="radio" name="delete" value="0">No
          </label>
        </div>
        <br>
        <div class="from-group">
          <button type="submit" class="btn btn-green bt-flat"><span class="fa fa-save"></span> Guardar</button>
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