<head>
<title>//Productos</title>
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
          Productos
          <small>Reportes</small>
        </h1>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="examplepro" class="table table-striped table-bordered" 
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
