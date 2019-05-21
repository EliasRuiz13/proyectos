
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card card-secondary card-outline">
      <!-- Default box -->
      <div class="card-header">
        <h1 class="text-capitalize text-center">
          Usuarios
          <small>Listado</small>
        </h1><h5>
          <a href="<?php echo base_url();?>Usuarios/add" class="btn btn-xs btn-green pull-right">
            <span class="fa fa-plus"></span>  Agregar Usuario 
          </a></h5>
        </div> 

        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-striped table-bordered" 
          role="grid">

          <thead class="table" style="background-color: #6c757d ;color: white" align="center";>
            <tr align="text-center" role="row">
              <th class="sorting" tabindex="0" aria-controls="tbusuarios" 
              rowspan="1" colspan="1" aria-label="Id: activate to sort column ascending" 
              style="width: 30px;">
              Nº
            </th><th class="sorting" tabindex="0" aria-controls="tbusuarios" 
            rowspan="1" colspan="1" aria-label="Usuarios: activate to sort column ascending" 
            style="width: 250px;">

            Nombre / Apellido

          </th>
          <th class="sorting" tabindex="0" aria-controls="tbusuarios" 
          rowspan="1" colspan="1" aria-label="Usuarios: activate to sort column ascending" 
          style="width: 150px;">

          Usuarios

        </th>
        <th class="sorting" tabindex="0" aria-controls="tbusuarios" 
        rowspan="1" colspan="1" aria-label="Usuarios: activate to sort column ascending" 
        style="width: 100px;">

        Nivel

      </th>
      <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Opciones" 
      style="width: 150px;">
      Opciones
    </th>
  </tr>
</thead>
<tbody>
 <?php if(!empty($usuarios)):?>
   <?php foreach($usuarios as $usuarios):?>

    <tr role="row" class="odd">
      <td><?php echo $usuarios->idusuario;?></td>
      <td><?php echo $usuarios->funcionario;?></td>
      <td><?php echo $usuarios->usu_nombre;?></td>
      <td><?php echo $usuarios->roles;?></td>

      <td>
        <a href="<?php echo base_url()?>Usuarios/edit/<?php  echo $usuarios->idusuario;?>" class="btn btn-sm btn-info" >
          <i class="fa fa-pencil">
          </i> EDITAR 
        </a>
        <a href="<?php echo base_url()?>Usuarios/pass/<?php  echo $usuarios->idusuario;?>" class="btn btn-sm btn-naranja" >
          <i class="fa fa-lock">
          </i> CONTRASEÑA 
        </a>
        <a class="btn btn-sm btn-danger btn-remove" href="<?php echo base_url();?>Usuarios/delete/<?php echo $usuarios->idusuario;?>" title="ANULAR" onclick="">
          <i class="fa fa-trash">
          </i> ANULAR 
        </a>
      </td>
    </tr>
  <?php endforeach;?>        
<?php endif;?>
</tbody>
</table>
</div>
<!-- /.card-body -->

</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal Nuevo-->
<div class="modal fade" id="ModalGuardarNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog modal-sm" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"  align="center"> Nueva Usuario</h4>
      </div>
      <div class="modal-body">

       <div class="box-body">
         <label for="cat_descripcion">Descripcion</label>
         <br>
         <input class="form-control input-sm" id="cat_descripcion" type="text" placeholder="Categoria">
       </div>

     </div>

     <div class="modal-footer">
      <button type="button" class="btn btn-success" id="guardarnuevo">
        <i  class="fa fa-save"> Guardar </i>
      </button>
      <button type="button" class="btn btn-primary">
        <i  class="fa fa-eraser"> Limpiar </i>
      </button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">
        <i  class="fa fa-times"> Salir </i>
      </button>
    </div>

  </div>
</div>
</div>

<!-- Modal Editar-->
<div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog modal-sm" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"  align="center"> Editar Categoria</h4>
      </div>

      <div class="modal-body">

       <div class="box-body">
        <input type="text" hidden="" id="idcategori" name="">
        <label for="cat_descripcionU">Descripcion</label>
        <br>
        <input class="form-control input-sm" id="cat_descripcion" type="text" placeholder="Categoria">
      </div>

    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-success" id="actualizadatos">
        <i  class="fa fa-save"> Actualizar </i>
      </button>
      <button type="button" class="btn btn-primary">
        <i  class="fa fa-eraser"> Limpiar </i>
      </button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">
        <i  class="fa fa-times"> Salir </i>
      </button>
    </div>

  </div>
</div>
</div>


<style>
#exportButton {
  border-radius: 0;
}
</style>
<div class="modal fade" id="modal-info">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"  align="center">Informacion de la Categoria</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">
         <i  class="fa fa-times"> Salir </i>
       </button>
     </div>
   </div>
   <!-- /.modal-content -->
 </div>
 <!-- /.modal-dialog -->
</div>