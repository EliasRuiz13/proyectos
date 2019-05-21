
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box box-solid">
      <div class="box-body">
        <div class="row">
          
          
          <div class="card">
            <h1 class="text-capitalize text-center">
              Marcas
              <small>Listado</small>
            </h1>
            <div class="card-header" >
              <a href="<?php echo base_url();?>Marcas/add" class="btn btn-xs btn-green pull-right">
                <span class="fa fa-plus"></span>  Agregar Marcas 
              </a>
              <a href="#" class="btn btn-xs btn-danger pull-left" align="left" id="exportButton">
                <span class="fa fa-file-pdf-o"></span>   PDF
              </a>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body" class=".col-12 .col-sm-6 .col-lg-8">
              <table id="example1" class="table display table-striped btn-hover table-bordered dataTable no-footer" 
              role="grid" aria-describedby="tbmarcas_info" style="width: 1070px;">

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
              <th class="sorting" tabindex="0" aria-controls="tbmarcas" 
              rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" 
              style="width: 10px;">
              Estado
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
              <span class="text text-success">
                <b><?php echo $marca->marc_estado;?></b>
              </span>
            </td>
            <td>
             <button type="button" class="btn btn-link btn-view fa fa-search" data-toggle="modal" data-target="#Modal-info" value="<?php echo $marca->idmarca;?>">
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
<!-- /.card-body -->
</div>

</div>
<!-- /.box-body -->
</div>
<!-- /.box -->

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


<style>
#exportButton {
  border-radius: 0;
}
</style>

<div class="modal fade" id="Modal-info">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"  align="center">Informacion de la Marca</h4>
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