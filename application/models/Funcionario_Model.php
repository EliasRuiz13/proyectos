<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Funcionario_model extends CI_Model{

  public function getFuncionarios(){
    $this->db->where("fun_estado","1");
    $resultados = $this->db->get("funcionario");
    return $resultados->result();
  }

  public function save($data){
  	return $this->db->insert("funcionario",$data);
  }

  public function getFuncionario($idfun){
  	$this->db->where("idfun",$idfun);
  	$resultado = $this->db->get("funcionario");
  	return $resultado->row();
  }

  
  public function update($idfun,$data){
      $this->db->where("idfun",$idfun);
      return $this->db->update("funcionario",$data);
     }
}