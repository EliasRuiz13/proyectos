<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Marca_model extends CI_Model{

  public function getMarcas(){
    $this->db->where("marc_estado","1");
    $resultados = $this->db->get("marca");
    return $resultados->result();
  }

  public function save($data){
  	return $this->db->insert("marca",$data);
  }

  public function getMarca($idmarca){
  	$this->db->where("idmarca",$idmarca);
  	$resultado = $this->db->get("marca");
  	return $resultado->row();
  }

  
  public function update($idmarca,$data){
      $this->db->where("idmarca",$idmarca);
      return $this->db->update("marca",$data);
     }
}