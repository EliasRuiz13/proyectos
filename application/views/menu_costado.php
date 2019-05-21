<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-info elevation-4">
  <!-- Brand Logo -->
  

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex" align="center">
      <ul class="container">
        <div class="container" align="center">
          <img src="<?php echo base_url();?>dist/img/Jefe.png" class="img-circle elevation-2" style="height: 70px; width: 70px;" alt="User Image">
        </div>
        <div class="info" align="center">
          <a href="#" class="d-block" aling="center"><h3><?php echo $this->session->userdata("funcionario")?></h3></a>
          <a href="#"><h5><?php echo $this->session->userdata("usu_nombre")?></h5></a>
        </div>
      </ul>
    </div>
    
    <div class="user-panel mt-2 pb-2 mb-2 d-flex">
      <ul class="social">
        <a href="https://www.facebook.com/jgl.paraguay.3" class="col-md-12 fb-ic">
          <img src="<?php echo base_url();?>dist/img/face1.png" class="img-circle elevation-2" style="height: 20px; width: 20px;" alt="User Image">
        </a>
      </ul>
      <ul class="social">
        <a href="https://www.instagram.com/?hl=es-la" class="col-md-12 in-ic">
          <img src="<?php echo base_url();?>dist/img/insta1.png" class="img-circle elevation-2" style="height: 20px; width: 20px;" alt="User Image">
        </a>
      </ul>
      <ul class="social">
        <a href="https://twitter.com/" class="col-md-12 tw-ic">
          <img src="<?php echo base_url();?>dist/img/twitt1.png" class="img-circle elevation-2" style="height: 20px; width: 20px;" alt="User Image">
        </a>
      </ul>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <h5>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url();?>Inicio" class="nav-link active">
              <i class="nav-icon fa  fa-bookmark"></i>
              <p>
                Menu Principal
                
              </p>
            </a>
            
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-cubes"></i>
                <p>
                  Stock
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url();?>Productos" class="nav-link">
                    <i class="fa fa-barcode"></i>
                    <p>Productos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url();?>Categorias" class="nav-link">
                    <i class="fa fa-tasks"></i>
                    <p>Categorias</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url();?>Marcas" class="nav-link">
                    <i class="fa fa-tags"></i>
                    <p>Marcas</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-credit-card"></i>
                <p>
                  Ventas
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url();?>Ventas" class="nav-link">
                    <i class="fa  fa-cart-plus"></i>
                    <p>Gestionar Venta</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url();?>Cobro" class="nav-link">
                    <i class="fa  fa-cart-plus"></i>
                    <p>Gestionar Cobro</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url();?>Clientes" class="nav-link">
                    <i class="fa fa-group"></i>
                    <p>Clientes</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-print"></i>
                <p>
                  Reportes
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" >
                <li class="nav-item">
                  <a href="<?php echo base_url();?>Reporte_Productos" class="nav-link">
                    <i class="fa  fa-file-text-o"></i>
                    <p  aling="center">Reporte de Stock</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url();?>Permisos" class="nav-link">
                    <i class="fa fa-file-text-o"></i>
                    <p>Reporte Funcionario</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url();?>Reportes_Clientes" class="nav-link">
                    <i class="fa fa-file-text-o"></i>
                    <p>Reporte Cliente</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url();?>Reportes_Ventas" class="nav-link">
                    <i class="fa fa-file-text-o"></i>
                    <p>Reportes Venta</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa  fa-gears"></i>
                <p>
                  Configuraciones
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url();?>Empresa" class="nav-link">
                    <i class="fa  fa-building-o"></i>
                    <p>Empresa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url();?>Funcionarios" class="nav-link">
                    <i class="fa  fa-coffee"></i>
                    <p>Funcionario</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url();?>Usuarios" class="nav-link">
                    <i class="fa fa-user-secret"></i>
                    <p>Usuarios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url();?>Permisos" class="nav-link">
                    <i class="fa  fa-key"></i>
                    <p>Permisos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/forms/editors.html" class="nav-link">
                    <i class="fa fa-copy"></i>
                    <p>Comprobantes</p>
                  </a>
                </li>
              </ul>
            </li>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Sistema Venta - Elias Ruiz</li>
          
        </ul>
      </h5>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>