
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x.icon" href="dist/img/informatica-png-5.png">
  <title>SysVenta</title>

  <!-- DataTables -->
  <!--<link rel="stylesheet" href="<?php echo base_url();?>plugins/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.css">-->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css ">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/font-awesome/css/font-awesome.min.css">
  <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/DataTables/dataTables.bootstrap.min.css">

  <!-- jQuery -->
  <script src="<?php echo base_url();?>plugins/jquery/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="<?php echo base_url();?>assets/template/jquery-ui/jquery-ui.js"></script>

<!--<script type="text/javascript">
        $(document).ready(function () {
            $('#form').submit(function (e) {
                e.preventDefault();
                //captura todos los valores que tiene el formulario es decir todos los input que esten en ese formulario...
                var datos=$(this).serialize();
                /*swal(
                 'Titulo del Mensaje',
                 'Mensaje',
                 'Tipo de mesaje'
                 );*/
                $.ajax({
                    type:"POST",
                    url:"productos/categorias/add.php",
                    data:datos,
                    success:function(data){
                        swal(
                            'Titulo del Mensaje',
                            'Mensaje',
                            'success'
                        );
                });
            });
        }});
      </script>-->
      <script type="text/javascript">
        
function Limpiar() {
var t = document.getElementById("f").getElementsByTagName("input");
for (var i=0; i<t.length; i++) {
    t[i].value = "";
    }
}
</script>
      <style>
        .button {
          background-color: #4CAF50;
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        }
      </style>
      <style>
        .btn-default
        {
          background-color: #6c757d;
          color:#FFF;
        }
        .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {

          background-color: #2F3E48;
          color:#FFF;
        }

      </style>
      <style>
        .btn-green
        {
          background-color: #66CC64;
          color:#FFF;
        }
        .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {

          background-color: #2F3E48;
          color:#FFF;
        }

      </style>
      <style>
        .btn-sky
        {
          background-color: #44A6CA;
          color:#FFF;
        }
        .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {

          background-color: #2F3E48;
          color:#FFF;
        }

      </style>
      <style>
        .btn-extra
        {
          background-color: #e3c4a8;
          color:#FFF;
        }
        .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {

          background-color: #2F3E48;
          color:#FFF;
        }

      </style>
      <style>
        .btn-default1
        {
          background-color: #AEB6BF;
          color:#FFF;
        }
        .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {

          background-color: #2F3E48;
          color:#FFF;
        }

      </style>
      <style>
        .btn-naranja
        {
          background-color: #F3A431;
          color:#FFF;
        }
        .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {

          background-color: #2F3E48;
          color:#FFF;
        }

      </style>
      <!-- Google Font: Source Sans Pro -->
      <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
      <!-- Agregar -->
      <!--  <script src="js/funciones.js"></script> -->
    </head>