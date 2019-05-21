<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

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
  $this->load->view('clientes/clientes/list',$data); 
  $this->load->view('plugins_footer');
		//$this->load->view('welcome_message');
}

public function add(){
    $this->load->view('head');
    $this->load->view('menu_head');
    $this->load->view('menu_costado');
    $this->load->view('clientes/clientes/add'); 
    $this->load->view('plugins_footer');
}

public function store(){
    $cli_razonsocial = $this->input->post("cli_razonsocial");
    $cli_nrodoc = $this->input->post("cli_nrodoc");
    $cli_telefono = $this->input->post("cli_telefono");
    $cli_direccion = $this->input->post("cli_direccion");

    $this->form_validation->set_rules("cli_razonsocial","cli_razonsocial","required");
    $this->form_validation->set_rules("cli_nrodoc","cli_nrodoc","required|is_unique[cliente.cli_nrodoc]");
    $this->form_validation->set_rules("cli_telefono","cli_telefono","required");
    if ($this->form_validation->run()){
        $data =array(
          'cli_razonsocial' => $cli_razonsocial,
          'cli_nrodoc' => $cli_nrodoc,
          'cli_telefono' => $cli_telefono,
          'cli_direccion' => $cli_direccion,
          'estado' => "1"
      );

        if ($this->Cliente_model->save($data)) {
          redirect(base_url()."Clientes");
      }
      else{
          $this->session->set_flashdata("Ooops!","No se pudo guardar el registro");
          redirect(base_url()."Clientes/add");
      }
  } else{
    $this->add();
}
}

public function edit($idcliente){
 $data = array('cliente' => $this->Cliente_model->getCliente($idcliente), 
);

 $this->load->view('head');
 $this->load->view('menu_head');
 $this->load->view('menu_costado');
 $this->load->view('clientes/clientes/edit',$data); 
 $this->load->view('plugins_footer');
}

public function update(){
 $idcliente = $this->input->post("idcliente");
 $cli_razonsocial = $this->input->post("cli_razonsocial");
 $cli_nrodoc = $this->input->post("cli_nrodoc");
 $cli_telefono = $this->input->post("cli_telefono");
 $cli_direccion = $this->input->post("cli_direccion");

 $clienteActual = $this->Cliente_model->getCliente($idcliente);
 if ($cli_nrodoc == $clienteActual->cli_nrodoc) {
    $is_unique = '';
} else{
    $is_unique = '|is_unique[cliente.cli_nrodoc]';
}
$this->form_validation->set_rules("cli_razonsocial","cli_razonsocial","required");
$this->form_validation->set_rules("cli_nrodoc","cli_nrodoc","required".$is_unique);
$this->form_validation->set_rules("cli_telefono","cli_telefono","required");
if ($this->form_validation->run()) {
 $data = array('cli_razonsocial' => $cli_razonsocial,
   'cli_nrodoc' => $cli_nrodoc,
   'cli_telefono' => $cli_telefono,
   'cli_direccion' => $cli_direccion,
);
 if ($this->Cliente_model->update($idcliente,$data)) {
   redirect(base_url()."Clientes");
}
else{
   $this->session->set_flashdata("Ooops!","No se pudo Actualizar el registro");
   redirect(base_url()."Clientes/edit/".$idcliente);
}
}
else{
    $this->edit($idcliente);
}
}

public function view($idcliente){
 $data = array(
  'cliente' => $this->Cliente_model->getCliente($idcliente),
);
 $this->load->view("clientes/clientes/view",$data);
}

public function delete($idcliente){
 $data = array(
  'estado' => "0", 
);
 $this->Cliente_model->update($idcliente,$data);
 echo "Clientes";
}
}