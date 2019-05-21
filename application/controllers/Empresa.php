<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller {

	public function __construct(){
     parent::__construct();
     $this->load->model("Empresa_model");
 }

 public function index()
 {
  $data = array(
    'empresa' => $this->Empresa_model->getEmpresas(),
);
  $this->load->view('head');
  $this->load->view('menu_head');
  $this->load->view('menu_costado');
  $this->load->view('configuracion/empresa/list',$data); 
  $this->load->view('plugins_footer');
		//$this->load->view('welcome_message');
}
public function add(){
  $this->load->view('head');
  $this->load->view('menu_head');
  $this->load->view('menu_costado');
  $this->load->view('configuracion/empresa/add'); 
  $this->load->view('plugins_footer');
}

public function store(){
  $nombre = $this->input->post("nombre");
  $telefono = $this->input->post("telefono");
  $email = $this->input->post("email");
  $direccion = $this->input->post("direccion");

  $this->form_validation->set_rules("nombre","nombre","required|is_unique[empresa.nombre]");
  $this->form_validation->set_rules("telefono","telefono","required");
  $this->form_validation->set_rules("email","email","required");
  $this->form_validation->set_rules("direccion","direccion","required");
  if ($this->form_validation->run()) {
    $data =array(
      'nombre' => $nombre,
      'telefono' => $telefono,
      'email' => $email,
      'direccion' => $direccion,
      'estado' => "1"
    );

    if ($this->Empresa_model->save($data)) {
      redirect(base_url()."Empresa");
    }
    else{
      $this->session->set_flashdata("Ooops!","No se pudo guardar el registro");
      redirect(base_url()."Empresa/add");
    }
  }
  else{
    $this->add();
  }

}

public function edit($idempresa){
 $data = array('empresa' => $this->Empresa_model->getEmpresa($idempresa), 
);

 $this->load->view('head');
 $this->load->view('menu_head');
 $this->load->view('menu_costado');
 $this->load->view('configuracion/empresa/edit',$data); 
 $this->load->view('plugins_footer');
}

public function update(){
 $idempresa = $this->input->post("idempresa");
 $telefono = $this->input->post("telefono");
 $email = $this->input->post("email");
 $direccion = $this->input->post("direccion");

 $this->form_validation->set_rules("telefono","telefono","required");
 $this->form_validation->set_rules("email","email","required");
 $this->form_validation->set_rules("direccion","direccion","required");

 if ($this->form_validation->run()){
  $data = array(
    'telefono' => $telefono, 
    'email' => $email,
    'direccion' => $direccion,
);
  if ($this->Empresa_model->update($idempresa,$data)) {
   redirect(base_url()."Empresa");
 }
 else{
   $this->session->set_flashdata("Ooops!","No se pudo Actualizar el registro");
   redirect(base_url()."Empresa/edit/".$idempresa);
 }
}
else{
  $this->edit($idempresa);
}
}

public function view($idempresa){
 $data = array(
  'categoria' => $this->Empresa_model->getEmpresa($idempresa),
);
 $this->load->view("productos/categorias/view",$data);
}

public function delete($idempresa){
 $data = array(
  'estado' => "0", 
);
 $this->Empresa_model->update($idempresa,$data);
 echo "Se ha Anulado el Registro";
}

}