<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios extends CI_Controller {

 public function __construct(){
   parent::__construct();
   $this->load->model("Funcionario_model");
 }

 public function index()
 {

  $data = array(
    'funcionario' => $this->Funcionario_model->getFuncionarios(),
  );
  $this->load->view('head');
  $this->load->view('menu_head');
  $this->load->view('menu_costado');
  $this->load->view('configuracion/funcionario/list',$data); 
  $this->load->view('plugins_footer');
}

public function add(){
  $this->load->view('head');
  $this->load->view('menu_head');
  $this->load->view('menu_costado');
  $this->load->view('configuracion/funcionario/add'); 
  $this->load->view('plugins_footer');
}

public function store(){
  $fun_razonsocial = $this->input->post("fun_razonsocial");
  $fun_nrodoc = $this->input->post("fun_nrodoc");
  $fun_telefono = $this->input->post("fun_telefono");
  $fun_direccion = $this->input->post("fun_direccion");

  $this->form_validation->set_rules("fun_razonsocial","fun_razonsocial","required");
  $this->form_validation->set_rules("fun_nrodoc","fun_nrodoc","required|is_unique[funcionario.fun_nrodoc]");
  $this->form_validation->set_rules("fun_telefono","fun_telefono","required");
  $this->form_validation->set_rules("fun_direccion","fun_direccion","required");
  if ($this->form_validation->run()) {
    $data =array(
      'fun_razonsocial' => $fun_razonsocial,
      'fun_nrodoc' => $fun_nrodoc,
      'fun_telefono' => $fun_telefono,
      'fun_direccion' => $fun_direccion,
      'fun_estado' => "1"
    );

    if ($this->Funcionario_model->save($data)) {
      redirect(base_url()."Funcionarios");
    }
    else{
      $this->session->set_flashdata("Ooops!","No se pudo guardar el registro");
      redirect(base_url()."Funcionarios/add");
    }
  } else{
    $this->add();
  }
}

public function edit($idfun){
 $data = array('funcionario' => $this->Funcionario_model->getFuncionario($idfun), 
);

 $this->load->view('head');
 $this->load->view('menu_head');
 $this->load->view('menu_costado');
 $this->load->view('configuracion/funcionario/edit',$data); 
 $this->load->view('plugins_footer');
}

public function update(){
  $idfun = $this->input->post("idfun");
  $fun_razonsocial = $this->input->post("fun_razonsocial");
  $fun_nrodoc = $this->input->post("fun_nrodoc");
  $fun_telefono = $this->input->post("fun_telefono");
  $fun_direccion = $this->input->post("fun_direccion");

  $funcionarioActual = $this->Funcionario_model->getFuncionario($idfun);
  if ($fun_nrodoc == $funcionarioActual->fun_nrodoc) {
    $is_unique = '';
  } else{
    $is_unique = '|is_unique[funcionario.fun_nrodoc]';
  }

  $this->form_validation->set_rules("fun_razonsocial","fun_razonsocial","required");
  $this->form_validation->set_rules("fun_nrodoc","fun_nrodoc","required".$is_unique);
  $this->form_validation->set_rules("fun_telefono","fun_telefono","required");
  $this->form_validation->set_rules("fun_direccion","fun_direccion","required");
  if ($this->form_validation->run()) {
    $data =array(
      'fun_razonsocial' => $fun_razonsocial,
      'fun_nrodoc' => $fun_nrodoc,
      'fun_telefono' => $fun_telefono,
      'fun_direccion' => $fun_direccion,
    );
    if ($this->Funcionario_model->update($idfun,$data)) {
     redirect(base_url()."Funcionarios");
   }
   else{
     $this->session->set_flashdata("Ooops!","No se pudo Actualizar el registro");
     redirect(base_url()."Funcionarios/edit/".$idfun);
   }
 } else {
  $this->edit($idfun);
}
}

public function view($idfun){
 $data = array(
  'categoria' => $this->Funcionario_model->getFuncionario($idfun),
);
 $this->load->view("configuracion/funcionario/view",$data);
}

public function delete($idfun){
 $data = array(
  'fun_estado' => "0", 
);
 $this->Funcionario_model->update($idfun,$data);
 echo "Funcionarios";
}

}