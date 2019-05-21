<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Ventas_model");
		$this->load->model("Cliente_model");
		$this->load->model("Producto_model");

	}

	public function index(){
		$data  = array(
			'ventas' => $this->Ventas_model->getVentas(), 
			"tipo_comprobante" => $this->Ventas_model->getComprobantes()
		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('ventas/list',$data);
		$this->load->view('plugins_footer');
	}

	public function add(){
		$data = array(
			"tipo_comprobante" => $this->Ventas_model->getComprobantes(),
			"producto" => $this->Producto_model->getProductos(),
			"cliente" => $this->Cliente_model->getClientes()
		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('ventas/add',$data);
		$this->load->view('plugins_footer');
	}

	public function getproductos(){
		$valor = $this->input->post("valor");
		$cliente = $this->Ventas_model->getproductos($valor);
		echo json_encode($cliente);
	}
	/*public function getproductos(){
		$this->db->select("idproducto,pro_codbarra,pro_detalle as pro_detalle,pro_precio_venta,pro_stock");
		$this->db->from("producto");
		$this->db->like("pro_detalle",$valor);
		$resultados = $this->db->get();
		return $resultados->result_array();
	}*/

	public function store(){

		$fecha = $this->input->post("fecha");
		$ven_subtotal = $this->input->post("ven_subtotal");
		$igv = $this->input->post("igv");
		$ven_total = $this->input->post("ven_total");
		$idComprobant = $this->input->post("idComprobant");
		$idcliente = $this->input->post("idcliente");
		$idusuario = $this->session->userdata("idusuario");
		$numero = $this->input->post("numero");
		$serie = $this->input->post("serie");

		$idproducto = $this->input->post("idproducto");
		$pro_precio_venta = $this->input->post("pro_precio_venta");
		$ven_cantidad = $this->input->post("ven_cantidad");
		$ven_importe = $this->input->post("ven_importe");

		$data = array(
			'fecha' => $fecha,
			'estado' => "1",
			'ven_subtotal' => $ven_subtotal,
			'igv' => $igv,
			'pago' => "Efectivo",
			'ven_total' => $ven_total,
			'idComprobant' => $idComprobant,
			'idcliente' => $idcliente,
			'idusuario' => $idusuario,
			'numero' => $numero,
			'serie' => $serie,
			'descuento' => "0",
		);

		if ($this->Ventas_model->save($data)) {
			$idventas = $this->Ventas_model->lastID();
			$this->updateComprobante($idComprobant);
			$this->save_detalle($idproducto,$idventas,$pro_precio_venta,$ven_cantidad,$ven_importe);
			redirect(base_url()."Ventas");

		}else{
			redirect(base_url()."ventas/add");
		}
	}


	public function detalles(){
		$data = array(
			"tipo_comprobante" => $this->Ventas_model->getComprobantes(),
			"producto" => $this->Producto_model->getProductos(),
			"venta_detalle" => $this->Ventas_model->getDetalle(), 
			"cliente" => $this->Cliente_model->getClientes()
		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('ventas/add',$data);
		$this->load->view('plugins_footer');
	}


	protected function updateComprobante($idComprobant){
		$comprobanteActual = $this->Ventas_model->getComprobante($idComprobant);
		$data  = array(
			'cantidad' => $comprobanteActual->cantidad + 1, 
		);
		$this->Ventas_model->updateComprobante($idComprobant,$data);
	}

	protected function save_detalle($producto,$idventas,$pro_precio_venta,$ven_cantidad,$ven_importe){
		for ($i=0; $i < count($producto); $i++) { 
			$data  = array(
				'idproducto' => $producto[$i], 
				'idventas' => $idventas,
				'estado' => "1",
				'ven_unitario' => $pro_precio_venta[$i],
				'ven_cantidad' => $ven_cantidad[$i],
				'ven_importe'=> $ven_importe[$i],
			);

			$this->Ventas_model->save_detalle($data);
			$this->updateProducto($idproducto[$i],$ven_cantidad[$i]);

		}
	}

	protected function updateProducto($idproducto,$ven_cantidad){
		$productoActual = $this->Producto_model->getProducto($idproducto);
		$data = array(
			'pro_stock' => $productoActual->pro_stock - $ven_cantidad, 
		);
		$this->Producto_model->update($idproducto,$data);
	}

	public function view(){
		$idventas = $this->input->post("idventas");
		$data = array(
			"ventas" => $this->Ventas_model->getVenta($idventas),
			"venta_detalle" =>$this->Ventas_model->getDetalle($idventas)
		);
		$this->load->view("ventas/view",$data);
	}
}