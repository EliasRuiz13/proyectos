
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card card-secondary card-outline">
      <!-- Default box -->
      <div class="card-header">
        <h1 class="text-capitalize text-center">
          Categorias
          <small>Listado</small>
        </h1><h5>
          <a  href="#" class="btn btn-xs btn-success pull-right" data-toggle="modal" data-target="#ModalGuardarNuevo">
            <span class="fa fa-plus"></span>  Agregar Categorias 
          </a></h5>
        </div> 

        <!-- /.card-header -->
        <div class="card-body" id="tabla">
          <table id="example1" class="table table-striped table-bordered" 
          role="grid">

          <thead class="table" style="background-color: #6c757d ;color: white" align="center";>
            <tr align="text-center" role="row">
              <th class="sorting" tabindex="0" aria-controls="tbcategorias" 
              rowspan="1" colspan="1" aria-label="Id: activate to sort column ascending" 
              style="width: 30px;">
              Nº
            </th>
            <th class="sorting" tabindex="0" aria-controls="tbcategorias" 
            rowspan="1" colspan="1" aria-label="Categoria: activate to sort column ascending" 
            style="width: 350px;">

            Categoria

          </th>
          <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Opciones" 
          style="width: 80px;">
          Opciones
        </th>
      </tr>
    </thead>
    <tbody>
     <?php if(!empty($categorias)):?>
       <?php foreach($categorias as $categoria):?>

        <tr role="row" class="odd">
          <td><?php echo $categoria->idcategoria;?></td>
          <td><?php echo $categoria->cat_descripcion;?></td>

          <td>
            <a href="<?php echo base_url()?>Categorias/edit/<?php  echo $categoria->idcategoria;?>" class="btn btn-sm btn-info">
              <i class="fa fa-pencil">
              </i> EDITAR 
            </a>
            <a class="btn btn-sm btn-danger btn-remove" href="<?php echo base_url();?>Categorias/delete/<?php echo $categoria->idcategoria;?>" title="ANULAR" onclick="">
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


<!-- Modal Agregar-->
<div class="modal" id="ModalGuardarNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Agregar Categoria</h4>
      </div>
      <div class="modal-body">

       <form id="frmajax" action="#" method="POST">
         <label for="cat_descripcion">Descripcion</label>
         <br>
         <input class="form-control input-sm" nombre="cat_descripcion" id="cat_descripcion" type="text" placeholder="Categoria">
       

     </div>
     <div class="modal-footer">
      <button type="submit" class="btn btn-success" id="guardarnuevo">
        <i  class="fa fa-save"> Guardar </i>
      </button>
      <button type="button" class="btn btn-primary">
        <i  class="fa fa-eraser"> Limpiar </i>
      </button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">
        <i  class="fa fa-times"> Salir </i>
      </button>
    </div>
  </form>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- Modal Editar-->
<div class="modal" id="ModalModificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h3 class="modal-title">Modificar Categoria</h3>
      </div>
      <div class="modal-body">

       <form id="frmajax" action="<?php echo base_url();?>Categorias/update" action="#" method="POST">
        <input type="hidden" value="<?php echo $categoria->idcategoria;?>" name="idcategoria">
         <label for="cat_descripcion"><h5>Descripcion</h5></label>
         <br>
         <input class="form-control input-sm" nombre="cat_descripcion" id="cat_descripcion" type="text" placeholder="Categoria" value="<?php echo !empty(form_error("cat_descripcion"))? set_value("cat_descripcion"):$categoria->cat_descripcion?>">
          <?php echo form_error("cat_descripcion","<span class='help-block'>","</span>");?>

     </div>
     <div class="modal-footer">
      <button type="submit" class="btn btn-flat btn-success" id="guardarnuevo">
        <i  class="fa fa-save"> Guardar </i>
      </button>
      <button type="button" class="btn btn-primary">
        <i  class="fa fa-eraser"> Limpiar </i>
      </button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">
        <i  class="fa fa-times"> Salir </i>
      </button>
    </div>
  </form>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>  
$(document).ready(function(){
 $('#frmajax').on("submit", function(event){  
  event.preventDefault();  
  if($('#cat_descripcion').val() == "")  
  {  
   alert("Inserte el Nombre");  
  }
   
  else  
  {  
   $.ajax({  
    url:"Categorias/store",  
    method:"POST",  
    data:$('#frmajax').serialize(),  
    beforeSend:function(){  
     $('#Categorias').val("Inserting");  
    },  
    success:function(data){  
      alert(data);
    // $('#frmajax')[0].reset();  
     //$('#ModalGuardarNuevo').modal('hide');  
     //$('#tabla').html(data);  
    }  
   });  
  } 
}); 
 });</script>

<!--<script type="text/javascript">
  $(document).ready(function(){
    $('#guardarnuevo').click(function(){
      var datos=$('#frmajax').serialize();
      $ajax({
        type: "POST",
        url:"insertar.php",
        data:datos,
        success:function(r){
        if (r==1) {
          alert("Regostro Agregado con Exito")
        }else{
          alert("Fallo de Servidor")
        }
        }
      });
      return false;
    });
  });
</script>-->