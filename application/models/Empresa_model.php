<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Empresa_model extends CI_Model{

  public function getEmpresas(){
    $this->db->where("estado","1");
    $resultados = $this->db->get("empresa");
    return $resultados->result();
  }

  public function save($data){
  	return $this->db->insert("empresa",$data);
  }

  public function getEmpresa($idempresa){
  	$this->db->where("idempresa",$idempresa);
  	$resultado = $this->db->get("empresa");
  	return $resultado->row();
  }

  
  public function update($idempresa,$data){
      $this->db->where("idempresa",$idempresa);
      return $this->db->update("empresa",$data);
     }
}