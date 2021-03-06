
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">


  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card card-success card-outline">
      <div class="card-header">
        <h1 class="text-capitalize text-center">
          Producto
          <small>Nuevo</small></h1>
        </div>
        <div class="card-body"> 

          <?php if($this->session->flashdata("error")):?>
           <div class="alert alert-danger alert-dismissible">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
               &times;
             </button>
             <p><i class="icon fa fa-ban"></i><?php if($this->session->flashdata("error"));?></p>

           </div> 
         <?php endif;?>

         <!-- /.card-header -->
         <form action="<?php echo base_url();?>Productos/store" method="POST">
          <div class="from-group <?php echo !empty(form_error("pro_detalle"))? 'has-error':'';?>">
            <label for="pro_detalle"><h5>Nombre :</h5></label>
            <br>
            <input type="text" class="from-control input-sm" id="pro_detalle" name="pro_detalle" value="<?php echo set_value("pro_detalle");?>">
            <?php echo form_error("pro_detalle","<span class='help-block'>","</span>");?>
          </div>
          <div class="from-group <?php echo !empty(form_error("pro_codbarra"))? 'has-error':'';?>">
            <label for="pro_codbarra"><h5>Codigo de Barra :</h5></label>
            <br>
            <input type="text" class="from-control input-sm" id="pro_codbarra" name="pro_codbarra" value="<?php echo set_value("pro_codbarra");?>">
            <?php echo form_error("pro_codbarra","<span class='help-block'>","</span>");?>
          </div>
          <div class="from-group <?php echo !empty(form_error("pro_precio_venta"))? 'has-error':'';?>">
            <label for="pro_precio_venta"><h5>Precio Venta :</h5></label>
            <br>
            <input type="text" class="from-control input-sm" id="pro_precio_venta" name="pro_precio_venta" value="<?php echo set_value("pro_precio_venta");?>">
            <?php echo form_error("pro_precio_venta","<span class='help-block'>","</span>");?>
          </div>
          <div class="from-group <?php echo !empty(form_error("pro_precio_compra"))? 'has-error':'';?>">
            <label for="pro_precio_compra"><h5>Precio Compra :</h5></label>
            <br>
            <input type="text" class="from-control input-sm" id="pro_precio_compra" name="pro_precio_compra" value="<?php echo set_value("pro_precio_compra");?>">
            <?php echo form_error("pro_precio_compra","<span class='help-block'>","</span>");?>
          </div>
          <div class="from-group <?php echo !empty(form_error("pro_stock"))? 'has-error':'';?>">
            <label for="pro_stock"><h5>Stock :</h5></label>
            <br>
            <input type="text" class="from-control input-sm" id="pro_stock" name="pro_stock" value="<?php echo set_value("pro_stock");?>">
            <?php echo form_error("pro_stock","<span class='help-block'>","</span>");?>
          </div>
          <div class="from-group <?php echo !empty(form_error("pro_stock_minimo"))? 'has-error':'';?>">
            <label for="pro_stock_minimo"><h5>Stock Minimo :</h5></label>
            <br>
            <input type="text" class="from-control input-sm" id="pro_stock_minimo" name="pro_stock_minimo" value="<?php echo set_value("pro_stock_minimo");?>">
            <?php echo form_error("pro_stock_minimo","<span class='help-block'>","</span>");?>
          </div>
          <div class="from-group">
            <label for="marca"><h5>Id Marca :</h5></label>
            <br>
            <select name="marca" id="marca" class="from-control">
              <?php foreach($marcas as $marca):?>
               <option value="<?php echo $marca->idmarca?>">
                <?php echo $marca->mar_descripcion;?></option>
              <?php endforeach;?>
            </select>
          </div>
          <div class="from-group">
            <label for="categoria"><h5>Id Categoria :</h5></label>
            <br>
            <select name="categoria" id="categoria" class="from-control">
              <?php foreach($categorias as $categoria):?>
               <option value="<?php echo $categoria->idcategoria?>"><?php echo $categoria->cat_descripcion;?></option>
             <?php endforeach;?>
           </select>
         </div>
         <br>
         <div class="from-group">
          <button type="submit" class="btn btn-green bt-flat"><span class="fa fa-save"></span> Guardar</button>
        </div>
      </form>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>  
</section>
<!-- /.content -->
</div>