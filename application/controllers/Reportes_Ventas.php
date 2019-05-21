<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes_Ventas extends CI_Controller {
	public function __construct(){
   parent::__construct();
		$this->load->model("Ventas_model");
}
	public function index(){
		$fechainicio = $this->input->post("fechainicio");
		$fechafin = $this->input->post("fechafin");
		if ($this->input->post("buscar")) {
			$ventas = $this->Ventas_model->getVentasbyDate($fechainicio,$fechafin);
		}
		else{
			$ventas = $this->Ventas_model->getVentas();
		}
		$data = array(
			"ventas" => $ventas,
			"fechainicio" => $fechainicio,
			"fechafin" => $fechafin
		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('ventas/reportes',$data);
		$this->load->view('plugins_footer');
	}
}