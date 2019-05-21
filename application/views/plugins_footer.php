
<!-- REQUIRED SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/template/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery-print/jquery.print.js"></script>
<!-- Highcharts -->
<script src="<?php echo base_url();?>assets/template/Highcharts/highcharts.js"></script>
<script src="<?php echo base_url();?>assets/template/Highcharts/exporting.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>plugins/adminlte.min.js"></script>
<script src="<?php echo base_url();?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- DataTables -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script rel="stylesheet" src="<?php echo base_url();?>assets\template\dataTables-export\js\dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery-ui/jquery-ui.js"></script>

<!-- DataTables Export-->
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets\template\dataTables-export\js\dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets\template\dataTables-export\js\buttons.flash.min.js"></script>
<script src="<?php echo base_url();?>assets\template\dataTables-export\js\jszip.min.js"></script>
<script src="<?php echo base_url();?>assets\template\dataTables-export\js\pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets\template\dataTables-export\js\vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets\template\dataTables-export\js\buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets\template\dataTables-export\js\buttons.print.min.js"></script>


<script src="<?php echo base_url();?>plugins/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.js"></script>
<!-- ExportPDF -->

<!-- <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>
-->
<script>
	$(document).ready(function(){
      //  alert("entro");
      var base_url="<?php echo base_url();?>";
      $(".btn-remove").on("click",function(){
        // e.preventDefault();
        var ruta = $(this).attr("href");
        // alert(ruta);
        $.ajax({
          url: ruta,
          type: "POST",
          success:function(resp){
                //http://localhost/sysventa/productos/categorias
                alert(resp);
                window.location.href = base_url + resp;
              }
            });
      });
      $(".btn-view").on("click", function(){
        var idcategoria = $(this).val();
        $.ajax({
          url: base_url + "Categorias/view/" + idcategoria,
          type:"POST",
          success:function(resp){
            $("#modal-info .modal-body").html(resp);
                //alert(resp);
              }
            });
      });


      $('#examplepro').DataTable( {
        dom: 'Bfrtip',
        buttons: [
        {
          extend: 'excelHtml5',
          title: "Listado de Stock",
          exportOptions: {
            columns: [ 0, 1, 2, 3, 4, 5, 6, 7]
          }
        },
        {
          extend: 'pdfHtml5',
          title: "Listado de Stock",
          exportOptions: {
            columns: [ 0, 1, 2, 3, 4, 5, 6, 7]
          }

        },
        ],

        language: {
          "lengthMenu": "Mostrar _MENU_ registros por pagina",
          "zeroRecords": "No se encontraron resultados en su busqueda",
          "searchPlaceholder": "Buscar registros",
          "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
          "infoEmpty": "No existen registros",
          "infoFiltered": "(filtrado de un total de _MAX_ registros)",
          "search": "Buscar:",
          "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
          },
        }
      });

      $('#examplecli').DataTable( {
        dom: 'Bfrtip',
        buttons: [
        {
          extend: 'excelHtml5',
          title: "Listado de Clientes",
          exportOptions: {
            columns: [ 0, 1, 2, 3, 4]
          }
        },
        {
          extend: 'pdfHtml5',
          title: "Listado de Clientes",
          exportOptions: {
            columns: [ 0, 1, 2, 3, 4]
          }

        },
        ],

        language: {
          "lengthMenu": "Mostrar _MENU_ registros por pagina",
          "zeroRecords": "No se encontraron resultados en su busqueda",
          "searchPlaceholder": "Buscar registros",
          "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
          "infoEmpty": "No existen registros",
          "infoFiltered": "(filtrado de un total de _MAX_ registros)",
          "search": "Buscar:",
          "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
          },
        }
      });

      $('#exampleven').DataTable( {
        dom: 'Bfrtip',
        buttons: [
        {
          extend: 'excelHtml5',
          title: "Listado de Ventas",
          exportOptions: {
            columns: [ 0, 1, 2, 3, 4]
          }
        },
        {
          extend: 'pdfHtml5',
          title: "Listado de Ventas",
          exportOptions: {
            columns: [ 0, 1, 2, 3, 4]
          }

        },
        ],

        language: {
          "lengthMenu": "Mostrar _MENU_ registros por pagina",
          "zeroRecords": "No se encontraron resultados en su busqueda",
          "searchPlaceholder": "Buscar registros",
          "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
          "infoEmpty": "No existen registros",
          "infoFiltered": "(filtrado de un total de _MAX_ registros)",
          "search": "Buscar:",
          "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
          },
        }
      });

      $('#example1').DataTable({
        "language": {
          "lengthMenu": "Mostrar _MENU_ registros por pagina",
          "zeroRecords": "No se encontraron resultados en su busqueda",
          "searchPlaceholder": "Buscar registros",
          "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
          "infoEmpty": "No existen registros",
          "infoFiltered": "(filtrado de un total de _MAX_ registros)",
          "search": "Buscar:",
          "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
          },
        }
      });

      $("#comprobantes").on("change",function(){
        option = $(this).val();

        if(option != ""){
          infocomprobante = option.split("*");

          $("#idComprobant").val(infocomprobante[0]);
          $("#igv").val(infocomprobante[2]);
          $("#serie").val(infocomprobante[3]);
          $("#numero").val(generarnumero(infocomprobante[1]));
        }
        else{
          $("#idComprobant").val(null);
          $("#igv").val(null);
          $("#serie").val(null);
          $("#numero").val(null);
        }
        //sumar();
      })
  //     $('.sidebar-menu').tree();

  $(document).on("click",".btn-check",function(){
    cliente = $(this).val();
    infocliente = cliente.split("*");
    $("#idcliente").val(infocliente[0]);
    $("#cliente").val(infocliente[1]);
    $("#modal-buscli").modal("hide");
  });
  $("#comprobantes").on("change",function(){
    option = $(this).val();

    if(option != ""){
      infocomprobante = option.split("*");

      $("#idComprobant").val(infocomprobante[0]);
      $("#igv").val(infocomprobante[2]);
      $("#serie").val(infocomprobante[3]);
      $("#numero").val(generarnumero(infocomprobante[1]));
    }
    else{
      $("#idComprobant").val(null);
      $("#igv").val(null);
      $("#serie").val(null);
      $("#numero").val(null);
    }
        //sumar();
      }) 

  $("#producto").autocomplete({
    source:function(request, response){
      $.ajax({
        url: base_url+"ventas/getproductos",
        type: "POST",
        dataType:"json",
        data:{ valor: request.term},
        success:function(data){
          response(data);
        }
      });
    },
    minLength:2,
    select:function(event, ui){
      data = ui.item.idproducto + "*"+ ui.item.pro_codbarra+ "*"+ ui.item.label+ "*"+ ui.item.pro_precio_venta+ "*"+ ui.item.pro_stock;
      $("#btn-agregar").val(data);
    },
  });
  $("#btn-agregar").on("click",function(){
    data = $(this).val();
    if (data !='') {
      infoproducto = data.split("*");
      html = "<tr>";
      html += "<td><input type='hidden' name='idproducto[]' value='"+infoproducto[0]+"'>"+infoproducto[1]+"</td>";
      html += "<td>"+infoproducto[2]+"</td>";
      html += "<td><input type='hidden' name='pro_precio_venta[]' value='"+infoproducto[3]+"'>"+infoproducto[3]+"</td>";
      html += "<td>"+infoproducto[4]+"</td>";
      html += "<td><input type='text' name='ven_cantidad[]' value='1' class='ven_cantidad'></td>";
      html += "<td><input type='hidden' name='ven_importe[]' value='"+infoproducto[3]+"'><p>"+infoproducto[3]+"</p></td>";
      html += "<td><button type='button' class='btn btn-danger btn-remove-producto'><span class='fa fa-remove'></span></button></td>";
      html += "</tr>";
      $("#tbventas tbody").append(html);
      sumar();
      $("#btn-agregar").val(null);
      $("#producto").val(null);
    }else{
      alert("seleccione un producto...");
    }
  });
  $(document).on("click",".btn-remove-producto", function(){
    $(this).closest("tr").remove();
    sumar();
  });
  $(document).on("keyup","#tbventas input.ven_cantidad", function(){
    ven_cantidad = $(this).val();
    pro_precio_venta = $(this).closest("tr").find("td:eq(2)").text();
    ven_importe = ven_cantidad * pro_precio_venta;
    $(this).closest("tr").find("td:eq(5)").children("p").text(ven_importe);
    $(this).closest("tr").find("td:eq(5)").children("input").val(ven_importe);
    sumar();
  });
  $(document).on("click",".btn-view-venta",function(){
    valor_id = $(this).val();
    $.ajax({
      url: base_url + "Ventas/view",
      type:"POST",
      dataType:"html",
      data:{idventas:valor_id},
      success:function(data){
        $("#modal-default .modal-body").html(data);
      }
    });
  });

  $(document).on("click",".btn-print",function(){
    $("#modal-default .modal-body").print({
      title:"Comprobante de Venta"
    });
  });
})
function generarnumero(numero){
  if (numero>= 99999 && numero< 999999) {
    return Number(numero)+1;
  }
  if (numero>= 9999 && numero< 99999) {
    return "0" + (Number(numero)+1);
  }
  if (numero>= 999 && numero< 9999) {
    return "00" + (Number(numero)+1);
  }
  if (numero>= 99 && numero< 999) {
    return "000" + (Number(numero)+1);
  }
  if (numero>= 9 && numero< 99) {
    return "0000" + (Number(numero)+1);
  }
  if (numero < 9 ){
    return "00000" + (Number(numero)+1);
  }
}

function sumar(){
  ven_subtotal = 0;
  $("#tbventas tbody tr").each(function(){
    ven_subtotal = ven_subtotal + Number($(this).find("td:eq(5)").text());
  });
  $("input[name=ven_subtotal]").val(ven_subtotal);
  porcentaje = $("#igv").val();
  igv = ven_subtotal * (10/100);
  $("input[name=igv]").val(igv);
  descuento = $("input[name=descuento]").val();
  ven_total = ven_subtotal + igv - descuento;
  $("input[name=ven_total]").val(ven_total);

}
 function grafica(){
  Highcharts.chart('grafico', {
    chart: {
      type: 'column'
    },
    title: {
      text: 'Monto Acumulado por Meses'
    },
    subtitle: {
      text: 'Año 2019'
    },
    xAxis: {
      categories: [
      'Jan',
      'Feb',
      'Mar',
      'Apr',
      'May',
      'Jun',
      'Jul',
      'Aug',
      'Sep',
      'Oct',
      'Nov',
      'Dec'
      ],
      crosshair: true
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Monto Acumulado (Guaranies)'
      }
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">Monto: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} Gs.</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        pointPadding: 0.2,
        borderWidth: 0
      }
    },
    series: [{
      name: 'Ventas',
      data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

    },
     {
      name: 'Compras',
      data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

    }],
  });
}
</script>