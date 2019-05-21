
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card card-secondary card-outline">
      <div class="card-header">
        <h1 class="text-capitalize text-center">
          Marcas
          <small>Listado</small>
        </h1>
        <a href="<?php echo base_url();?>Marcas/add" class="btn btn-xs btn-green pull-right">
          <span class="fa fa-plus"></span>  Agregar Marcas 
        </a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-striped table-bordered" 
        role="grid">

        <thead class="table" style="background-color: #6c757d ;color: white" align="center";>
          <tr align="text-center" role="row">
            <th class="sorting" tabindex="0" aria-controls="tbmarcas" 
            rowspan="1" colspan="1" aria-label="Id: activate to sort column ascending" 
            style="width: 50px;">
            Nº
          </th>
          <th class="sorting" tabindex="0" aria-controls="tbmarcas" 
          rowspan="1" colspan="1" aria-label="Marca: activate to sort column ascending" 
          style="width: 350px;">
          
          Marcas
          
        </th>
      <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Opciones" 
      style="width: 50px;">
      Opciones
    </th>
  </tr>
</thead>
<tbody>
 <?php if(!empty($marcas)):?>
   <?php foreach($marcas as $marca):?>

    <tr role="row" class="odd">
      <td><?php echo $marca->idmarca;?></td>
      <td><?php echo $marca->mar_descripcion;?></td>
      <td>
       <button type="button" class="btn btn-link btn-view fa fa-search" data-toggle="modal" data-target="#modal-default">
        Ver
      </button>
      <a href="<?php echo base_url()?>Marcas/edit/<?php  echo $marca->idmarca;?>" class="btn btn-sm btn-info" >
        <i class="fa fa-pencil">
        </i> EDITAR 
      </a>
      <a class="btn btn-sm btn-danger btn-remove" href="<?php echo base_url();?>Marcas/delete/<?php echo $marca->idmarca;?>" title="ANULAR" onclick="">
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
<!-- /.box-body -->
</div>  
</section>
<!-- /.content -->
</div>

<!-- Modal Nuevo-->
<div class="modal fade" id="ModalGuardarNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog modal-sm" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"  align="center"> Nueva Marca</h4>
      </div>
      <div class="modal-body">
       
       <div class="box-body">
         <label for="mar_descripcion">Descripcion</label>
         <br>
         <input class="form-control input-sm" id="mar_descripcion" type="text" placeholder="marca">
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
        <h4 class="modal-title" id="myModalLabel"  align="center"> Editar Marca</h4>
      </div>

      <div class="modal-body">
       
       <div class="box-body">
        <input type="text" hidden="" id="idcategori" name="">
        <label for="mar_descripcionU">Descripcion</label>
        <br>
        <input class="form-control input-sm" id="mar_descripcion" type="text" placeholder="Marca">
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


<div class="modal" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lita de Clientes</h4>
            </div>
            <div class="modal-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Opcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
                  <i  class="fa fa-times"> Salir </i>
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->