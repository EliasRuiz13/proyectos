<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
 <link rel="shortcut icon" type="image/x.icon" href="dist/img/informatica-png-5.png">
 <title>SysVenta</title>

 <!-- DataTables -->
 <!--   <link rel="stylesheet" href="<?php echo base_url();?>plugins/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.css"> -->
 <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css ">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


 <!-- Theme style -->
 <link rel="stylesheet" href="<?php echo base_url();?>plugins/adminlte.min.css">

 <link rel="stylesheet" href="<?php echo base_url();?>plugins/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />

 <!-- jQuery -->
 <script src="<?php echo base_url();?>plugins/jquery/jquery.min.js"></script>

</head> 
<body class="container-scroller">
  <div class="section section-signup" style="background-image: url('dist/img/inicio2.jpg'); background-size: cover; background-position: top center; min-height: 657px;">
    <!-- /.login-logo -->
    <div class="container" style="background-size: cover; background-position: 50% 50%;min-height: 657px;
  background-repeat: no-repeat;
  background-attachment: fixed;">
    <div class="container" style="width: 35rem;">
<div class="card card-signup" data-background-color="orange">
    <div class=" login-logo">
      <h1> BIENVENIDO </h1>
    </div>
      <p class="login-box-msg">Introduzca sus datos de ingreso</p>
      <?php if($this->session->flashdata("error")):?>
       <div class="alert alert-danger">  
        <p><?php echo $this->session->flashdata("error")?></p>
      </div>
    <?php endif; ?>
    <form action="<?php echo base_url();?>auth/login" method="post">

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="glyphicon glyphicon-user input-group-text"></span>
        </div>
        <input type="text" class="form-control" placeholder="Usuario" name="usu_nombre">
      </div>
      <div class="input-group mb-5">
        <div class="input-group-prepend">
          <span class="glyphicon glyphicon-lock input-group-text"></span>
        </div>
        <input type="password" class="form-control" placeholder="Contraseña" name="usu_pass">
      </div>
      <div class="row" style="background-position: 50% 50%;">
        <!-- /.col -->
        <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
</div>
</div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>plugins/adminlte.min.js"></script>
<script src="<?php echo base_url();?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
