<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Backend_model extends CI_Model{
	public function getCI($link){
		$this->db->like("link",$link);
		$resultado = $this->db->get("menu");
		return $resultado->row();
	}
	public function getPermisos($menu,$rol){
		$this->db->where("idmenu",$menu);
		$this->db->where("idroles",$rol);
		$resultado = $this->db->get("permisos");
		return $resultado->row();
	}
	public function rowCount($tabla){
		$this->db->where("estado","1");
		$resultado = $this->db->get($tabla);
		return $resultado->num_rows();
	}
}
