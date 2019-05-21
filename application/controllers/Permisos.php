<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Permiso_model");
		$this->load->model("Usuarios_model");
	}
	public function index()
	{

		$data = array(
			'permisos' => $this->Permiso_model->getPermisos(),
		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('configuracion/permisos/list',$data); 
		$this->load->view('plugins_footer');
	}
	public function add(){
		$data = array(
			'roles' => $this->Usuarios_model->getRoles(),
			'menu' => $this->Permiso_model->getMenus(),
		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('configuracion/permisos/add',$data); 
		$this->load->view('plugins_footer');
	}

	public function store(){
		$menu = $this->input->post("menu");
		$rol = $this->input->post("rol");
		$read = $this->input->post("read");
		$insert = $this->input->post("insert");
		$update = $this->input->post("update");
		$delete = $this->input->post("delete");
		$data =array(
			'idmenu' => $menu,
			'idroles' => $rol,
			'read' => $read,
			'insert' => $insert,
			'update' => $update,
			'delete' => $delete,
		);

		if ($this->Permiso_model->save($data)) {
			redirect(base_url()."Permisos");
		}
		else{
			$this->session->set_flashdata("Ooops!","No se pudo guardar el registro");
			redirect(base_url()."Permisos/add");
		}

	}
	public function edit($idpermisos){
		$data = array(
			'roles' => $this->Usuarios_model->getRoles(),
			'menu' => $this->Permiso_model->getMenus(),
			'permisos' => $this->Permiso_model->getPermiso($idpermisos)
		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('configuracion/permisos/edit',$data); 
		$this->load->view('plugins_footer');
	}

	public function update(){
		$idpermisos = $this->input->post("idpermisos");
		$menu = $this->input->post("menu");
		$roles = $this->input->post("roles");
		$read = $this->input->post("read");
		$insert = $this->input->post("insert");
		$update = $this->input->post("update");
		$delete = $this->input->post("delete");
		$data =array(
			'read' => $read,
			'insert' => $insert,
			'update' => $update,
			'delete' => $delete,
		);

		if ($this->Permiso_model->update($idpermisos,$data)) {
			redirect(base_url()."Permisos");
		}
		else{
			$this->session->set_flashdata("Ooops!","No se pudo guardar el registro");
			redirect(base_url()."Permisos/edit".$idpermisos);
		}
	}

	public function delete($idpermisos){
		$this->Permiso_model->delete($idpermisos);
		redirect(base_url()."Permisos");
	}
}