
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
          Cobro
          <small>Listado</small>
        </h1>
      </div>

      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-striped table-bordered" 
        role="grid">

        <thead class="table" style="background-color: #6c757d ;color: white" align="center";>
          <tr align="text-center" role="row">
            <th class="sorting" tabindex="0" aria-controls="tbclientes" 
            rowspan="1" colspan="1" aria-label="Id: activate to sort column ascending" 
            style="width: 30px;">
            N°
          </th>
          <th class="sorting" tabindex="0" aria-controls="tbclientes" 
          rowspan="1" colspan="1" aria-label="Fecha: activate to sort column ascending" 
          style="width: 50px;">
          Fecha
        </th>
        <th class="sorting" tabindex="0" aria-controls="tbclientes" 
        rowspan="1" colspan="1" aria-label="Cliente: activate to sort column ascending" 
        style="width: 300px;">

        Cliente

      </th>
      <th class="sorting" tabindex="0" aria-controls="tbclientes" 
      rowspan="1" colspan="1" aria-label="Cliente: activate to sort column ascending" 
      style="width: 50px;">
      
      Pago
      
    </th>
    <th class="sorting" tabindex="0" aria-controls="tbclientes" 
    rowspan="1" colspan="1" aria-label="Cliente: activate to sort column ascending" 
    style="width: 50px;">
    
    T.Comprobante
    
  </th>
  <th class="sorting" tabindex="0" aria-controls="tbclientes" 
  rowspan="1" colspan="1" aria-label="Cliente: activate to sort column ascending" 
  style="width: 30px;">

  N°.Comprobante

</th>
<th class="sorting" tabindex="0" aria-controls="tbclientes" 
rowspan="1" colspan="1" aria-label="Cliente: activate to sort column ascending" 
style="width: 100px;">

Total

</th>
<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Opciones" 
style="width: 70px;">
Opciones
</th>
</tr>
</thead>
<tbody>
 <?php if(!empty($ventas)):?>
   <?php foreach($ventas as $venta):?>

    <tr role="row" class="odd">
      <td><?php echo $venta->idventas;?></td>
      <td><?php echo $venta->ven_fecha;?></td>
      <td><?php echo $venta->cli_razonsocial;?></td>
      <td><?php echo $venta->pago;?></td>
      <td><?php echo $venta->tipo_comprobante;?></td>
      <td><?php echo $venta->num_documento;?></td>
      <td><?php echo $venta->ven_total;?></td>
      
      <td>
        <button type="button" class="btn btn-green btn-view-venta fa fa-plus" value="<?php echo $venta->idventas;?>" data-toggle="modal" data-target="#modal-default">
          Generar Ticket
        </button>
      </td>
    </tr>
  <?php endforeach;?>        
<?php endif;?>
</tbody>
</table>
</div>
<!-- /.card-body -->
<!-- /.box-body -->
<!-- /.box -->

</div>  

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal Editar-->
<div class="modal" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Detalle Venta</h4>
      </div>
      <div class="modal-body">

     </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-default btn-print pull-left"><span class="fa fa-print"> </span>Imprimir</button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">
        <i  class="fa fa-times"> Salir </i>
      </div>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>