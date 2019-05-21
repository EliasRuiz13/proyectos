
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
          Productos
          <small>Listado</small>
        </h1>
        <a href="<?php echo base_url();?>Productos/add" class="btn btn-xs btn-green pull-right">
          <span class="fa fa-plus"></span>  Agregar Producto 
        </a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-striped table-bordered" 
        role="grid">

        <thead class="table" style="background-color: #6c757d ;color: white" align="center";>
          <tr align="text-center" role="row">
            <th class="sorting" tabindex="0" aria-controls="tbproductos" 
            rowspan="1" colspan="1" aria-label="Id: activate to sort column ascending" 
            style="width: 50px;">
            Nº
          </th>
          <th class="sorting" tabindex="0" aria-controls="tbproductos" 
          rowspan="1" colspan="1" aria-label="Marca: activate to sort column ascending" 
          style="width: 50px;">

          Codigo de Barra

        </th>
        <th class="sorting" tabindex="0" aria-controls="tbproductos" 
        rowspan="1" colspan="1" aria-label="Marca: activate to sort column ascending" 
        style="width: 250px;">

        Productos

      </th>
      <th class="sorting" tabindex="0" aria-controls="tbproductos" 
      rowspan="1" colspan="1" aria-label="Marca: activate to sort column ascending" 
      style="width: 70px;">

      Precio Venta

    </th>
    <th class="sorting" tabindex="0" aria-controls="tbproductos" 
    rowspan="1" colspan="1" aria-label="Marca: activate to sort column ascending" 
    style="width: 70px;">

    Precio Compra

  </th>
  <th class="sorting" tabindex="0" aria-controls="tbproductos" 
  rowspan="1" colspan="1" aria-label="Marca: activate to sort column ascending" 
  style="width: 0px;">

  Stock

</th>
<th class="sorting" tabindex="0" aria-controls="tbproductos" 
rowspan="1" colspan="1" aria-label="Marca: activate to sort column ascending" 
style="width: 0px;">

Marca

</th>
<th class="sorting" tabindex="0" aria-controls="tbproductos" 
rowspan="1" colspan="1" aria-label="Marca: activate to sort column ascending" 
style="width: 0px;">

Categoria

</th>
<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Opciones" 
style="width: 150px;">
Opciones
</th>
</tr>
</thead>
<tbody>
 <?php if(!empty($productos)):?>
   <?php foreach($productos as $producto):?>

    <tr role="row" class="odd">
      <td><?php echo $producto->idproducto;?></td>
      <td><?php echo $producto->pro_codbarra;?></td>
      <td><?php echo $producto->pro_detalle;?></td>
      <td><?php echo $producto->pro_precio_venta;?></td>
      <td><?php echo $producto->pro_precio_compra;?></td>
      <td><?php echo $producto->pro_stock;?></td>
      <td><?php echo $producto->marca;?></td>
      <td><?php echo $producto->categoria;?></td>

      <td>
        <a href="<?php echo base_url()?>Productos/edit/<?php  echo $producto->idproducto;?>" class="btn btn-sm btn-info" >
          <i class="fa fa-pencil">
          </i> EDITAR 
        </a>
        <a class="btn btn-sm btn-danger btn-remove" href="<?php echo base_url();?>Productos/delete/<?php echo $producto->idproducto;?>" title="ANULAR" onclick="">
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
<script>
$('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: ['pdf'
        ]
    } );</script>