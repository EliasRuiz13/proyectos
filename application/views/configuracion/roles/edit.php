
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="container-fluid">
      <div class="card">
        <h1 class="text-capitalize text-center">
          Marcas
          <small>Modificar</small>
        </h1>
        <div class="row">
         <div class="col-md-12">  

          <?php if($this->session->flashdata("error")):?>
           <div class="alert alert-danger alert-dismissible">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
               &times;
             </button>
             <p><i class="icon fa fa-ban"></i><?php if($this->session->flashdata("error"));?></p>

           </div> 
         <?php endif;?>

         <div class="card">
           <!-- /.card-header -->
           <form action="<?php echo base_url();?>Marcas/update" method="POST">
            <input type="hidden" value="<?php echo $marca->idmarca;?>" name="idmarca">
            <div class="from-group">
              <label for="mar_descripcion"><h5>Nombre :</h5></label>
              <br>
              <input type="text" class="from-control input-sm" id="mar_descripcion" name="mar_descripcion" value="<?php echo $marca->mar_descripcion?>">
            </div>
            <br>
        <div class="from-group">
          <button type="submit" class="btn btn-info bt-flat"><span class="fa fa-undo"></span> Modificar</button>
        </div>
          </form>
        </div>
        
      </div>
      <!-- /.box-body -->
    </div>
  </div>
  <!-- /.box -->

</div>  

</section>
<!-- /.content -->
</div>