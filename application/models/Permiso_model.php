<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Permiso_model extends CI_Model{
	public function getPermisos(){
		$this->db->select("p.*,m.nombre as menu, r.rol_descripcion as roles");
		$this->db->from("permisos p");
		$this->db->join("roles r","p.idroles = r.idroles");
		$this->db->join("menu m","p.idmenu = m.idmenu");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getMenus(){
		$resultados = $this->db->get("menu");
		return $resultados->result();
	}
	public function save($data){
  	return $this->db->insert("permisos",$data);
  }
  public function getPermiso($idpermisos){
  	$this->db->where("idpermisos",$idpermisos);
  	$resultados = $this->db->get("permisos");
	return $resultados->row();
  }

  public function update($idpermisos,$data){
      $this->db->where("idpermisos",$idpermisos);
      return $this->db->update("permisos",$data);
     }

     public function delete($idpermisos){
      $this->db->where("idpermisos",$idpermisos);
      return $this->db->delete("permisos");
     }
}