<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cobro extends CI_Controller {

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
		$this->load->view('ventas/cobro',$data);
		$this->load->view('plugins_footer');
	}
}