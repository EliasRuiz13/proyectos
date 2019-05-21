<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("login")){
			redirect(base_url());
		}
		$this->load->model("Ventas_model");
	}
	public function index()
	{
		$data = array(
			"cantVentas" => $this->Backend_model->rowCount("ventas"),
			"cantClientes" => $this->Backend_model->rowCount("clientes"),
			"cantProductos" => $this->Backend_model->rowCount("productos"),
			'year' => $this->Ventas_model->years(),
		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('plantilla',$data);
		$this->load->view('plugins_footer');
		//$this->load->view('welcome_message');
	}
}