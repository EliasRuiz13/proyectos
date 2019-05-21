<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Cliente_model extends CI_Model{

  public function getClientes(){
    $this->db->where("estado","1");
    $resultados = $this->db->get("cliente");
    return $resultados->result();
  }

  public function save($data){
  	return $this->db->insert("cliente",$data);
  }

  public function getCliente($idcliente){
  	$this->db->where("idcliente",$idcliente);
  	$resultado = $this->db->get("cliente");
  	return $resultado->row();
  }

  
  public function update($idcliente,$data){
      $this->db->where("idcliente",$idcliente);
      return $this->db->update("cliente",$data);
     }
}