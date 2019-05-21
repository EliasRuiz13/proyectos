<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

  private $permisos;
 public function __construct(){
   parent::__construct();
   $this->load->model("Categoria_model");
 }

 public function index()
 {

  $data = array(
    'categorias' => $this->Categoria_model->getCategorias(),
  );
  $this->load->view('head');
  $this->load->view('menu_head');
  $this->load->view('menu_costado');
  $this->load->view('productos/categorias/list',$data); 
  $this->load->view('plugins_footer');
}

public function add(){
  $this->load->view('head');
  $this->load->view('menu_head');
  $this->load->view('menu_costado');
  $this->load->view('productos/categorias/add'); 
  $this->load->view('plugins_footer');
}

public function store(){
  $cat_descripcion = $this->input->post("cat_descripcion");

  $this->form_validation->set_rules("cat_descripcion","cat_descripcion","required|is_unique[categoria.cat_descripcion]");
  if ($this->form_validation->run()) {
    $data =array(
      'cat_descripcion' => $cat_descripcion,
      'cat_estado' => "1"
    );

    if ($this->Categoria_model->save($data)) {
      redirect(base_url()."Categorias");
    }
    else{
      $this->session->set_flashdata("Ooops!","No se pudo guardar el registro");
      redirect(base_url()."Categorias/add");
    }
  }
  else{
    $this->add();
  }

}

public function edit($idcategoria){
 $data = array('categoria' => $this->Categoria_model->getCategoria($idcategoria), 
);

 $this->load->view('head');
 $this->load->view('menu_head');
 $this->load->view('menu_costado');
 $this->load->view('productos/categorias/edit',$data); 
 $this->load->view('plugins_footer');
}

public function update(){
 $idcategoria = $this->input->post("idcategoria");
 $cat_descripcion = $this->input->post("cat_descripcion");

 $this->form_validation->set_rules("cat_descripcion","cat_descripcion","required|is_unique[categoria.cat_descripcion]");
 if ($this->form_validation->run()){
  $data = array('cat_descripcion' => $cat_descripcion, 
);
  if ($this->Categoria_model->update($idcategoria,$data)) {
   redirect(base_url()."Categorias");
 }
 else{
   $this->session->set_flashdata("Ooops!","No se pudo Actualizar el registro");
   redirect(base_url()."Categorias/edit/".$idcategoria);
 }
}
else{
  $this->edit($idcategoria);
}
}

public function view($idcategoria){
 $data = array(
  'categoria' => $this->Categoria_model->getCategoria($idcategoria),
);
 $this->load->view("productos/categorias/view",$data);
}

public function delete($idcategoria){
 $data = array(
  'cat_estado' => "0", 
);
 $this->Categoria_model->update($idcategoria,$data);
 echo "Categorias";
}

}
