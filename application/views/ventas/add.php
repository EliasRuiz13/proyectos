
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>
    <div class="card card-success card-outline">
        <div class="card-header">
            <h1 class="text-capitalize text-center">
                Ventas
                <small>Nuevo</small>
            </h1>
        </div>
        <!-- Default box -->
        <div class="card-body">

            <form action="<?php echo base_url();?>Ventas/store" method="POST" class="form-horizontal">
                <div class="form-group">
                    <div class="col-md-3">
                        <label for=""><h5>Comprobante:</h5></label>
                        <select name="comprobantes" id="comprobantes" class="form-control" required>
                            <option value="">Seleccione...</option>
                            <?php foreach($tipo_comprobante as $tipocomprobante):?>
                                <?php $datacomprobante = $tipocomprobante->idComprobant."*".$tipocomprobante->cantidad."*".$tipocomprobante->igv."*".$tipocomprobante->serie;?>
                                <option value="<?php echo $datacomprobante;?>"><?php echo $tipocomprobante->nombre?></option>
                            <?php endforeach;?>    
                        </select>
                        <input type="hidden" id="idComprobant" name="idComprobant">
                        <input type="hidden" id="igv">
                    </div>
                    <div class="col-md-3">
                        <label for=""><h5>Serie:</h5></label>
                        <input type="text" class="form-control" id="serie" name="serie" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for=""><h5>Numero:</h5></label>
                        <input type="text" class="form-control" id="numero" name="numero" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for=""><h5>Fecha:</h5></label>
                        <input type="date" class="form-control" name="ven_fecha" required>
                    </div>

                </div>
                <div class="form-group">
                                <div class="col-md-5">
                                    <label for="">Cliente:</label>
                                    <div class="input-group">
                                        <input type="hidden" name="idcliente" id="idcliente">
                                        <input type="text" class="form-control" disabled="disabled" id="cliente">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-flat" type="button" data-toggle="modal" data-target="#modal-buscli" ><span class="fa fa-search"></span> Buscar</button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div> 
                            </div>
                            <div class="form-group">
                                <div class="col-md-5">
                                    <label for="">Producto:</label>
                                    <input type="text" class="form-control" id="producto">
                                </div>
                                <div class="col-md-2">
                                    <label for="">&nbsp;</label>
                                    <button id="btn-agregar" type="button" class="btn btn-success btn-flat btn-block"><span class="fa fa-plus"></span> Agregar</button>
                                </div>
                                </div>
                            </div>  
                <table id="tbventas" class="table table-bordered table-striped table-hover">
                    <thead class="table" style="background-color: #6c757d ;color: white">
                        <tr>
                            <th><h5>Codigo</h5></th>
                            <th><h5>Nombre</h5></th>

                            <th><h5>Precio</h5></th>
                            <th><h5>Stock Max.</h5></th>
                            <th><h5>Cantidad</h5></th>
                            <th><h5>Importe</h5></th>
                            <th><h5>Quitar</h5></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

                <div class="form-group">
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-text">Iva:</span>
                            <input type="text" class="form-control" name="igv" readonly="readonly">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-text">Descuento:</span>
                            <input type="text" class="form-control" name="descuento" value="0" readonly="readonly">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-text">Subtotal:</span>
                            <input type="text" class="form-control" name="ven_subtotal" readonly="readonly">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-text">Total:</span>
                            <input type="text" class="form-control" name="ven_total" readonly="readonly">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                    </div>

                </div>
            </form>
        </div>
        <!-- /.box-body -->
        <!-- /.box -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<div class="modal" id="modal-buscli" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lita de Clientes</h4>
            </div>
            <div class="modal-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead class="table" style="background-color: #6c757d ;color: white" align="center";>
                        <tr align="text-center" role="row">
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Opcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($cliente)):?>
                         <?php foreach($cliente as $cliente):?>

                            <tr role="row" class="odd">
                              <td><?php echo $cliente->idcliente;?></td>
                              <td><?php echo $cliente->cli_razonsocial;?></td>
                              <td><?php echo $cliente->cli_nrodoc;?></td>
                              <?php $datacliente = $cliente->idcliente."*".$cliente->cli_razonsocial."*".$cliente->cli_nrodoc;?>
                              <td align="center">
                               <button type="button" class="btn btn-success btn-check " value="<?php echo $datacliente;?>"><span class="fa fa-check"></span></button>
                          </td>
                      </tr>
                  <?php endforeach;?>        
              <?php endif;?>
          </tbody>
      </table>
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
<!-- /.modal -->
