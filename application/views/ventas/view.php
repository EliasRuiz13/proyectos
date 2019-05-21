
<div class="row">
	<div class="col-xs-12 text-center">
		<b>Empresa JGL</b><br>
		Calle Moquegua 430 <br>
		Tel. 0971756189 <br>
		Email:JGL@gmail.com
	</div>
</div> <br>
<div class="row">
	<div class="col-xs-6">	
		<b>CLIENTE</b><br>
		<b>Nombre:</b> <?php echo $ventas->cli_razonsocial;?> <br>
		<b>Nro Documento:</b> <?php echo $ventas->cli_nrodoc;?><br>
		<b>Telefono:</b> <?php echo $ventas->cli_telefono;?> <br>
		<b>Direccion</b> <?php echo $ventas->cli_direccion;?><br>
	</div>	
	<div class="col-xs-6">	
		<b>COMPROBANTE</b> <br>
		<b>Tipo de Comprobante:</b> <?php echo $ventas->tipo_comprobante;?><br>
		<b>Serie:</b> <?php echo $ventas->serie;?><br>
		<b>Nro de Comprobante:</b><?php echo $ventas->num_documento;?><br>
		<b>Fecha</b> <?php echo $ventas->ven_fecha;?>
	</div>	
</div>
<br>
<div class="row">
	<div class="col-xs-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Importe</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($venta_detalle as $venta_detalle):?>
				<tr>
					<td><?php echo $venta_detalle->pro_codbarra;?></td>
					<td><?php echo $venta_detalle->pro_detalle;?></td>
					<td><?php echo $venta_detalle->ven_unitario;?></td>
					<td><?php echo $venta_detalle->ven_cantidad;?></td>
					<td><?php echo $venta_detalle->ven_importe;?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="4" class="text-right"><strong>Subtotal:</strong></td>
					<td><?php echo $ventas->ven_subtotal;?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>Iva:</strong></td>
					<td><?php echo $ventas->igv;?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>Descuento:</strong></td>
					<td><?php echo $ventas->descuento;?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>Total:</strong></td>
					<td><?php echo $ventas->ven_total;?></td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>