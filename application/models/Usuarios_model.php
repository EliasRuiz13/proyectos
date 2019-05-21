<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Usuarios_model extends CI_Model{

public function login($usu_nombre, $usu_pass){
 $this->db->where("usu_nombre",$usu_nombre);
 $this->db->where("usu_pass",$usu_pass);

 $resultados = $this->db->get("usuarios");
 if($resultados->num_rows() > 0){
   return $resultados->row();
 }
 else{
  return false;
 }
}
  public function getUsuarios(){
  	$this->db->select("u.*,r.rol_descripcion as roles");
    $this->db->select("u.*,f.fun_razonsocial as funcionario");
  	$this->db->from("usuarios u");
  	$this->db->join("roles r","u.idroles = r.idroles");
    $this->db->join("funcionario f","u.idfun = f.idfun");
    $this->db->where("usu_estado","1");
    $resultados = $this->db->get();
    return $resultados->result();
  }
  public function getRoles(){
    $resultados = $this->db->get("roles");
    return $resultados->result();
  }
  public function getFun(){
    $resultados = $this->db->get("funcionario");
    return $resultados->result();
  }
  public function save($data){
  	return $this->db->insert("usuarios",$data);
  }
  public function getUsuario($idusuario){
  	$this->db->where("idusuario",$idusuario);
  	$resultado = $this->db->get("usuarios");
  	return $resultado->row();
  }

  public function update($idusuario,$data){
      $this->db->where("idusuario",$idusuario);
      return $this->db->update("usuarios",$data);
     }
}