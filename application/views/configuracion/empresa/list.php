
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
          Empresa
          <small>Listado</small>
        </h1>
        <a href="<?php echo base_url();?>Empresa/add" class="btn btn-xs btn-green pull-right">
          <span class="fa fa-plus"></span>  Agregar Empresa 
        </a>
      </div>

      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-striped table-bordered" 
        role="grid">

        <thead class="table" style="background-color: #6c757d ;color: white" align="center";>
          <tr align="text-center" role="row">
            <th class="sorting" tabindex="0" aria-controls="tbEmpresa" 
            rowspan="1" colspan="1" aria-label="Id: activate to sort column ascending" 
            style="width: 30px;">
            Nº
          </th>
          <th class="sorting" tabindex="0" aria-controls="tbEmpresa" 
          rowspan="1" colspan="1" aria-label="Empresa: activate to sort column ascending" 
          style="width: 350px;">

          Nombre

        </th>
        <th class="sorting" tabindex="0" aria-controls="tbEmpresa" 
        rowspan="1" colspan="1" aria-label="Empresa: activate to sort column ascending" 
        style="width: 50px;">

        Nro de Documento

      </th>
      <th class="sorting" tabindex="0" aria-controls="tbEmpresa" 
      rowspan="1" colspan="1" aria-label="Empresa: activate to sort column ascending" 
      style="width: 50px;">

      Telefono

    </th>
    <th class="sorting" tabindex="0" aria-controls="tbEmpresa" 
    rowspan="1" colspan="1" aria-label="Empresa: activate to sort column ascending" 
    style="width: 250px;">

    Direccion

  </th>
  <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Opciones" 
  style="width: 120px;">
  Opciones
</th>
</tr>
</thead>
<tbody>
 <?php if(!empty($empresa)):?>
  <?php foreach($empresa as $empresa):?>

    <tr role="row" class="odd">
      <td><?php echo $empresa->idempresa;?></td>
      <td><?php echo $empresa->nombre;?></td>
      <td><?php echo $empresa->telefono;?></td>
      <td><?php echo $empresa->email;?></td>
      <td><?php echo $empresa->direccion;?></td>

      <td>
        <a href="<?php echo base_url()?>Empresa/edit/<?php  echo $empresa->idempresa;?>" class="btn btn-sm btn-info" >
          <i class="fa fa-pencil">
          </i> EDITAR 
        </a>
        <a class="btn btn-sm btn-danger btn-remove" href="<?php echo base_url();?>Empresa/delete/<?php echo $empresa->idempresa;?>" title="ANULAR" onclick="">
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
<!-- /.box-body -->
<!-- /.box -->

</div>  

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
