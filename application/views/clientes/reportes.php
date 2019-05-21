<head>
<title>//Clientes</title>
</head>
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
          Clientes
          <small>Listado</small>
        </h1>
      </div>

      <!-- /.card-header -->
      <div class="card-body">
        <table id="examplecli" class="table table-striped table-bordered" 
        role="grid">

        <thead class="table" style="background-color: #6c757d ;color: white" align="center";>
          <tr align="text-center" role="row">
            <th class="sorting" tabindex="0" aria-controls="tbclientes" 
            rowspan="1" colspan="1" aria-label="Id: activate to sort column ascending" 
            style="width: 30px;">
            Nº
          </th>
          <th class="sorting" tabindex="0" aria-controls="tbclientes" 
          rowspan="1" colspan="1" aria-label="Cliente: activate to sort column ascending" 
          style="width: 350px;">
          
          Nombre / Apellido
          
        </th>
        <th class="sorting" tabindex="0" aria-controls="tbclientes" 
        rowspan="1" colspan="1" aria-label="Cliente: activate to sort column ascending" 
        style="width: 50px;">
        
        Nro de Documento
        
      </th>
      <th class="sorting" tabindex="0" aria-controls="tbclientes" 
      rowspan="1" colspan="1" aria-label="Cliente: activate to sort column ascending" 
      style="width: 50px;">
      
      Telefono
      
    </th>
    <th class="sorting" tabindex="0" aria-controls="tbclientes" 
    rowspan="1" colspan="1" aria-label="Cliente: activate to sort column ascending" 
    style="width: 250px;">
    
    Direccion
    
  </th>
</tr>
</thead>
<tbody>
 <?php if(!empty($clientes)):?>
   <?php foreach($clientes as $cliente):?>

    <tr role="row" class="odd">
      <td><?php echo $cliente->idcliente;?></td>
      <td><?php echo $cliente->cli_razonsocial;?></td>
      <td><?php echo $cliente->cli_nrodoc;?></td>
      <td><?php echo $cliente->cli_telefono;?></td>
      <td><?php echo $cliente->cli_direccion;?></td>
      
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