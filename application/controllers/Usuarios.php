<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

 public function __construct(){
   parent::__construct();
   $this->load->model("Usuarios_model");
}
public function index()
{

    $data = array(
        'usuarios' => $this->Usuarios_model->getUsuarios(),
    );
    $this->load->view('head');
    $this->load->view('menu_head');
    $this->load->view('menu_costado');
    $this->load->view('configuracion/usuarios/list',$data); 
    $this->load->view('plugins_footer');
}
public function add()
{

    $data = array(
        'roles' => $this->Usuarios_model->getRoles(),
        'funcionario' => $this->Usuarios_model->getFun(),
    );
    $this->load->view('head');
    $this->load->view('menu_head');
    $this->load->view('menu_costado');
    $this->load->view('configuracion/usuarios/add',$data); 
    $this->load->view('plugins_footer');
}
public function store(){
    $idfuncionario = $this->input->post("funcionario");
    $usu_funmenu = $this->input->post("usu_funmenu");
    $usu_nombre = $this->input->post("usu_nombre");
    $usu_pass = $this->input->post("usu_pass");
    $idroles = $this->input->post("roles");
    
    $this->form_validation->set_rules("usu_funmenu","usu_funmenu","required");
    $this->form_validation->set_rules("usu_nombre","usu_nombre","required|is_unique[usuarios.usu_nombre]");
    $this->form_validation->set_rules("usu_pass","usu_pass","required");
    if ($this->form_validation->run()) {
    	$data =array(
            'idfun' => $idfuncionario,
            'usu_funmenu' => $usu_funmenu,
            'usu_nombre' => $usu_nombre,
            'usu_pass' => sha1($usu_pass),
            'idroles' => $idroles,
            'usu_estado' => "1"
        );

       if ($this->Usuarios_model->save($data)) {
          redirect(base_url()."Usuarios");
      }
      else{
          $this->session->set_flashdata("Ooops!","No se pudo guardar el registro");
          redirect(base_url()."Usuarios/add");
      }
  } else {
    $this->add();
}
}
public function edit($idusuario){
   $data =array(
     "usuarios" => $this->Usuarios_model->getUsuario($idusuario),
     "roles" => $this->Usuarios_model->getRoles()
 );
   $this->load->view('head');
   $this->load->view('menu_head');
   $this->load->view('menu_costado');
   $this->load->view('configuracion/usuarios/edit',$data); 
   $this->load->view('plugins_footer');

}
public function update(){
   $idusuario = $this->input->post("idusuario");
   $usu_nombre = $this->input->post("usu_nombre");
   $idroles = $this->input->post("roles");

   $usuarioActual = $this->Usuarios_model->getUsuario($idusuario);
   if ($usu_nombre == $usuarioActual->usu_nombre) {
    $is_unique = '';
} else{
    $is_unique = '|is_unique[usuarios.usu_nombre]';
}
$this->form_validation->set_rules("usu_nombre","usu_nombre","required".$is_unique);
if ($this->form_validation->run()) {
    $data = array(
      'usu_nombre' => $usu_nombre,
      'idroles' => $idroles,
  );
    if ($this->Usuarios_model->update($idusuario,$data)) {
      redirect(base_url()."Usuarios");
  }
  else{
      $this->session->set_flashdata("Ooops!","No se pudo modificar el registro");
      redirect(base_url()."Usuarios/edit/".$idusuario);
  }
} else {
    $this->edit($idusuario);
}
}
public function pass($idusuario){
   $data =array(
     "usuarios" => $this->Usuarios_model->getUsuario($idusuario),
     "roles" => $this->Usuarios_model->getRoles()
 );
   $this->load->view('head');
   $this->load->view('menu_head');
   $this->load->view('menu_costado');
   $this->load->view('configuracion/usuarios/pass',$data); 
   $this->load->view('plugins_footer');

}
public function delete($idusuario){
    $data = array(
        'usu_estado' => "0", 
    );
    $this->Usuarios_model->update($idusuario,$data);
    echo "Usuarios";
}
}