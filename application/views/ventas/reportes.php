
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
          Ventas
          <small>Reporte</small>
        </h1>
      </div>

      <!-- /.card-header -->
      <div class="card-body">
                <div class="card-header">
                    <form action="<?php echo current_url();?>" method="POST" class="form-horizontal">
                        <div class="form-group">
                            <label for="" class="col-md-1 control-label"><h6> Desde: </h6></label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" name="fechainicio" value="<?php echo !empty($fechainicio) ? $fechainicio:'';?>">
                            </div>
                            <label for="" class="col-md-1 control-label"><h6> Hasta: </h6></label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" name="fechafin" value="<?php  echo !empty($fechafin) ? $fechafin:'';?>">
                            </div>
                            <div class="col-md-4">
                                <input type="submit" name="buscar" value="Buscar" class="btn btn-primary">
                                <a href="<?php echo base_url(); ?>ventas/reportes" class="btn btn-danger">Restablecer</a>
                            </div>
                        </div>
                    </form>
                </div>
        <table id="exampleven" class="table table-striped table-bordered" 
        role="grid">

        <thead class="table" style="background-color: #6c757d ;color: white" align="center";>
          <tr align="text-center" role="row">
            <th class="sorting" tabindex="0" aria-controls="tbclientes" 
            rowspan="1" colspan="1" aria-label="Id: activate to sort column ascending" 
            style="width: 30px;">
            Fecha
          </th>
          <th class="sorting" tabindex="0" aria-controls="tbclientes" 
          rowspan="1" colspan="1" aria-label="Cliente: activate to sort column ascending" 
          style="width: 350px;">
          
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
    style="width: 50px;">
    
    N°.Comprobante
    
  </th>
  <th class="sorting" tabindex="0" aria-controls="tbclientes" 
    rowspan="1" colspan="1" aria-label="Cliente: activate to sort column ascending" 
    style="width: 50px;">
    
    Serie
    
  </th>
        <th class="sorting" tabindex="0" aria-controls="tbclientes" 
        rowspan="1" colspan="1" aria-label="Cliente: activate to sort column ascending" 
        style="width: 150px;">
        
        Total
        
      </th>
</tr>
</thead>
<tbody>
 <?php if(!empty($ventas)):?>
   <?php foreach($ventas as $ventas):?>

    <tr role="row" class="odd">
      <td><?php echo $ventas->ven_fecha;?></td>
      <td><?php echo $ventas->cli_razonsocial;?></td>
      <td><?php echo $ventas->pago;?></td>
      <td><?php echo $ventas->tipo_comprobante;?></td>
      <td><?php echo $ventas->num_documento;?></td>
      <td><?php echo $ventas->serie;?></td>
      <td><?php echo $ventas->ven_total;?></td>
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