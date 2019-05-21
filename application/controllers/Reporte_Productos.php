<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reporte_Productos extends CI_Controller {
	public function __construct(){
   parent::__construct();
   $this->load->model("Producto_model");
   $this->load->model("Marca_model");
   $this->load->model("Categoria_model");
}


public function index()
{

    $data = array(
        'productos' => $this->Producto_model->getProductos(),
        'marcas' => $this->Marca_model->getMarcas(),
        'categorias' => $this->Categoria_model->getCategorias(),
    );
    $this->load->view('head');
    $this->load->view('menu_head');
    $this->load->view('menu_costado');
    $this->load->view('productos/reportes',$data); 
    $this->load->view('plugins_footer');
}
}