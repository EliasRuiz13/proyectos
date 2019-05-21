<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1 class="text-capitalize text-center">
                Categorias
                <small>Listado</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    <div class="row">
                      
                    
<div class="card">
            <div class="card-header" >
              <bo href="#" data-toggle="modal" data-target="#ModalGuardarNuevo" class="btn btn-xs btn-success pull-right">
                            <span class="fa fa-plus"></span>  Agregar Categorias 
                        </a>
                        <a href="#" class="btn btn-xs btn-danger pull-left" align="left" id="exportButton">
                            <span class="fa fa-file-pdf-o"></span>   PDF
                        </a>
            </div>
    
            <!-- /.card-header -->
            <div class="card-body" class=".col-12 .col-sm-6 .col-lg-8">
              <table id="example1" class="table display table-striped btn-hover table-bordered dataTable no-footer" 
            role="grid" aria-describedby="tbcategorias_info" style="width: 1070px;">

                <thead class="table" style="background-color: #6c757d ;color: white" align="center";>
                <tr align="text-center" role="row">
                  <th class="sorting" tabindex="0" aria-controls="tbcategorias" 
                    rowspan="1" colspan="1" aria-label="Id: activate to sort column ascending" 
                    style="width: 50px;">
                    Nº
                   </th>
                  <th class="sorting" tabindex="0" aria-controls="tbcategorias" 
                    rowspan="1" colspan="1" aria-label="Categoria: activate to sort column ascending" 
                    style="width: 350px;">
                    
                    Categoria
                    
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="tbcategorias" 
                    rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" 
                    style="width: 80px;">
                    Estado
                  </th>
                  <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Opciones" 
                    style="width: 70px;">
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
                <span class="text text-success">
            <b><?php echo $categoria->cat_estado;?></b>
                </span>
            </td>
                <td>
                     <button type="button" class="btn btn-default btn-view fa fa-search" data-toggle="modal" data-target="#modal-info" value="<?php echo $categoria->idcategoria;?>">
                Ver
              </button>
                    <a href="#" OneClick="Mostrar({{$categoria->idcategoria}});" data-toggle="model" data-target="#ModalEditar" class="btn btn-sm btn-primary" >
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
        <h4 class="modal-title" id="myModalLabel"  align="center"> Nueva Categoria</h4>
      </div>
      <div class="modal-body">
         
         <div class="box-body">
             <label for="cat_descripcion">Descripcion</label>
             <br>
             <input class="form-control input-sm" id="cat_descripcion" type="text" placeholder="Categoria">
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
        <h4 class="modal-title" id="myModalLabel"  align="center"> Editar Categoria</h4>
      </div>

      <div class="modal-body">
         
         <div class="box-body">
            <input type="text" hidden="" id="idcategori" name="">
             <label for="cat_descripcionU">Descripcion</label>
             <br>
             <input class="form-control input-sm" id="cat_descripcion" type="text" placeholder="Categoria">
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

<script type="text/javascript">
    jQuery(function ($) {
        $("#exportButton").click(function () {
            // parse the HTML table element having an id=exportTable
            var dataSource = shield.DataSource.create({
                data: "#exportTable",
                schema: {
                    type: "table",
                    fields: {
                        Nº: { type: Number },
                        Categoria: { type: String },
                        Estado: { type: String }
                    }
                }
            });

            // when parsing is done, export the data to PDF
            dataSource.read().then(function (data) {
                var pdf = new shield.exp.PDFDocument({
                    author: "PrepBootstrap",
                    created: new Date()
                });

                pdf.addPage("a4", "portrait");

                pdf.table(
                    50,
                    50,
                    data,
                    [
                        { field: "Nº", title: "Nº", width: 200 },
                        { field: "Categoria", title: "Categoria", width: 50 },
                        { field: "Estado", title: "Estado", width: 200 }
                    ],
                    {
                        margins: {
                            top: 50,
                            left: 50
                        }
                    }
                );

                pdf.saveAs({
                    fileName: "PrepBootstrapPDF"
                });
            });
        });
    });
</script>

<style>
    #exportButton {
        border-radius: 0;
    }
</style>
<div class="modal fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"  align="center">Informacion de la Categoria</h4>
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