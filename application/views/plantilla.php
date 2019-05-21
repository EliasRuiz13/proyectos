<!-- ./Navbar -->
<div class="wrapper">

  <!-- Navbar -->

  <!-- ./Navbar -->

  <!-- sidebar -->

  <!-- ./sidebar -->
  <div class="container-fluid">
  </div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row mb-2" align="center">
            <div class="col-lg">
              <h1 class="m-0 text-dark">MENU PRINCIPAL</h1>
            </div>
          </div>
          <div class="row">
            <!-- Small boxes (Stat box) -->


            <div class="col-md-6 col-lg-3">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>COMPRAS</p>
                </div>
                <div class="icon">
                  <i class="fa fa-suitcase"></i>
                </div>

                <a href="#" class="small-box-footer">Click info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">

              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><?php echo $cantVentas;?><sup style="font-size: 20px"></sup></h3>
                  <p>VENTAS</p>
                </div>
                <div class="icon">
                  <i class="fa fa-cart-plus"></i>
                </div>
                <a href="<?php echo base_url();?>Ventas" class="small-box-footer">Click info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">

              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?php echo $cantClientes;?></h3 >

                  <p>CLIENTES</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="<?php echo base_url();?>Clientes" class="small-box-footer">Click info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">

              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?php echo $cantProductos;?></h3>
                  <p>PRODUCTOS</p>
                </div>
                <div class="icon">
                  <i class="fa  fa-tags"></i>
                </div>
                <a href="<?php echo base_url();?>Productos" class="small-box-footer">Click info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="card card-default card-outline">
              <div class="card-header">
                <h2 class="card-title" align="center">
                  <i class="fa fa-bar-chart-o"></i>
                  Graficos Estadisticos
                </h2>

                <div class="card-tools">
                  <select name="year" id="year" class="from-control">
                    <?php foreach($year as $year):?>
                      <option value="<?php $year->year;?>"><?php $year->year;?></option>
                    <?php endforeach;?>
                  </select>
                  <button type="button" class="btn btn-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <div id="grafico" style="margin: 0 auto"></div>
              </div>
              <!-- /.card-body-->
            </div>
          <!-- ./wrapper -->
        </div>
        <!-- ./plugins footer -->
      </section>
    </div>
  </div>
</div>
        </html>
        