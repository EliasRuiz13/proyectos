<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes_Clientes extends CI_Controller {
	public function __construct(){
   parent::__construct();
   $this->load->model("Cliente_model");
}


public function index()
{

    $data = array(
        'clientes' => $this->Cliente_model->getClientes(),
    );
    $this->load->view('head');
    $this->load->view('menu_head');
    $this->load->view('menu_costado');
    $this->load->view('clientes/reportes',$data); 
    $this->load->view('plugins_footer');
}
}