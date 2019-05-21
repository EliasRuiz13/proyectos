
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
          Permisos
          <small>Listado</small>
        </h1><h5>
          <a href="<?php echo base_url();?>Permisos/add" class="btn btn-xs btn-green pull-right">
            <span class="fa fa-plus"></span>  Agregar Permisos 
          </a></h5>
        </div> 

        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-striped table-bordered" 
          role="grid">

          <thead class="table" style="background-color: #6c757d ;color: white" align="center";>
            <tr align="text-center" role="row">
              <th class="sorting" tabindex="0" aria-controls="tbpermisos" 
              rowspan="1" colspan="1" aria-label="Id: activate to sort column ascending" 
              style="width: 30px;">
              Nº
            </th>
          <th class="sorting" tabindex="0" aria-controls="tbpermisos" 
          rowspan="1" colspan="1" aria-label="Permisos: activate to sort column ascending" 
          style="width: 150px;">

          Rol

        </th>
            <th class="sorting" tabindex="0" aria-controls="tbpermisos" 
            rowspan="1" colspan="1" aria-label="Permisos: activate to sort column ascending" 
            style="width: 250px;">

            Menu

          </th>
        <th class="sorting" tabindex="0" aria-controls="tbpermisos" 
        rowspan="1" colspan="1" aria-label="Permisos: activate to sort column ascending" 
        style="width: 50px;">

        Leer

      </th>
      <th class="sorting" tabindex="0" aria-controls="tbpermisos" 
      rowspan="1" colspan="1" aria-label="Permisos: activate to sort column ascending" 
      style="width: 50px;">

      Insertar

    </th>
    <th class="sorting" tabindex="0" aria-controls="tbpermisos" 
    rowspan="1" colspan="1" aria-label="Permisos: activate to sort column ascending" 
    style="width: 50px;">

    Actualizar

  </th>
  <th class="sorting" tabindex="0" aria-controls="tbpermisos" 
  rowspan="1" colspan="1" aria-label="Permisos: activate to sort column ascending" 
  style="width: 50px;">

  Eliminar

</th>
<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Opciones" 
style="width: 100px;">
Opciones
</th>
</tr>
</thead>
<tbody>
 <?php if(!empty($permisos)):?>
   <?php foreach($permisos as $permisos):?>

    <tr role="row" class="odd">
      <td><?php echo $permisos->idpermisos;?></td>
      <td><?php echo $permisos->roles;?></td>
      <td><?php echo $permisos->menu;?></td>
      <td>
        <?php if($permisos->read == 0):?>
          <span class="fa fa-times icon-danger"></span>
          <?php else:?>
            <span class="fa fa-check"></span>
          <?php endif;?>
        </td>
        <td>
          <?php if($permisos->insert == 0):?>
            <span class="fa fa-times icon-danger"></span>
            <?php else:?>
              <span class="fa fa-check"></span>
            <?php endif;?>
          </td>
          <td>
            <?php if($permisos->update == 0):?>
              <span class="fa fa-times icon-danger"></span>
              <?php else:?>
                <span class="fa fa-check"></span>
              <?php endif;?>
            </td>
            <td>
              <?php if($permisos->delete == 0):?>
                <span class="fa fa-times icon-danger"></span>
                <?php else:?>
                  <span class="fa fa-check"></span>
                <?php endif;?>
              </td>

              <td>
                <a href="<?php echo base_url()?>Permisos/edit/<?php  echo $permisos->idpermisos;?>" class="btn btn-sm btn-info" >
                  <i class="fa fa-pencil">
                  </i> EDITAR 
                </a>
                <a class="btn btn-sm btn-danger btn-remove" href="<?php echo base_url();?>Permisos/delete/<?php echo $permisos->idpermisos;?>" title="ANULAR" onclick="">
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
        <h4 class="modal-title" id="myModalLabel"  align="center"> Nueva Categoria</h4>
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