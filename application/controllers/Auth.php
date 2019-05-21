<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
		$this->load->model("Funcionario_model");
	}
	public function index()
	{ 
		if($this->session->userdata("login")){
			redirect(base_url()."Welcome");
		}
		else{
			$this->load->view('login');
		}
	}
	public function login(){
		$usu_nombre = $this->input->post("usu_nombre");
		$usu_pass = $this->input->post("usu_pass");
		$res = $this->Usuarios_model->login($usu_nombre,sha1($usu_pass));

		if (!$res) {
			redirect(base_url());
		}
		else{
			$data = array(

        'funcionario' => $this->Funcionario_model->getFuncionarios(),

				'idusuario' => $res->idusuario, 
				'usu_nombre' => $res->usu_nombre,
				'funcionario' => $res->usu_funmenu,
				'rol' => $res->idroles,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			redirect(base_url()."Inicio");
		}
	}
}