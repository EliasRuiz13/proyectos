<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marcas extends CI_Controller {
 
 public function __construct(){
   parent::__construct();
   $this->load->model("Marca_model");
}

public function index()
{

    $data = array(
        'marcas' => $this->Marca_model->getMarcas(),
    );
    $this->load->view('head');
    $this->load->view('menu_head');
    $this->load->view('menu_costado');
    $this->load->view('productos/marcas/list',$data); 
    $this->load->view('plugins_footer');
}

public function add(){
    $this->load->view('head');
    $this->load->view('menu_head');
    $this->load->view('menu_costado');
    $this->load->view('productos/marcas/add'); 
    $this->load->view('plugins_footer');
}

public function store(){
    $mar_descripcion = $this->input->post("mar_descripcion");
    $this->form_validation->set_rules("mar_descripcion","mar_descripcion","required|is_unique[marca.mar_descripcion]");
    if ($this->form_validation->run()) {
       $data =array(
          'mar_descripcion' => $mar_descripcion,
          'marc_estado' => "1"
      );

       if ($this->Marca_model->save($data)) {
          redirect(base_url()."Marcas");
      }
      else{
          $this->session->set_flashdata("Ooops!","No se pudo guardar el registro");
          redirect(base_url()."Marcas/add");
      }
  } else{
    $this->add();
}

}

public function edit($idmarca){
   $data = array('marca' => $this->Marca_model->getMarca($idmarca), 
);

   $this->load->view('head');
   $this->load->view('menu_head');
   $this->load->view('menu_costado');
   $this->load->view('productos/marcas/edit',$data); 
   $this->load->view('plugins_footer');
}

public function update(){
   $idmarca = $this->input->post("idmarca");
   $mar_descripcion = $this->input->post("mar_descripcion");

   $this->form_validation->set_rules("mar_descripcion","mar_descripcion","required|is_unique[marca.mar_descripcion]");
   if ($this->form_validation->run()){
       $data = array('mar_descripcion' => $mar_descripcion, 
   );
       if ($this->Marca_model->update($idmarca,$data)) {
         redirect(base_url()."Marcas");
     }
     else{
         $this->session->set_flashdata("Ooops!","No se pudo Actualizar el registro");
         redirect(base_url()."Marcas/edit/".$idmarca);
     }
 } else{
    $this->edit($idmarca);
}
}

public function view($idmarca){
   $data = array(
      'marca' => $this->Marca_model->getMarca($idmarca),
  );
   $this->load->view("productos/marcas/view",$data);
}

public function delete($idmarca){
   $data = array(
      'marc_estado' => "0", 
  );
   $this->Marca_model->update($idmarca,$data);
   echo "Marcas";
}

}