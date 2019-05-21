<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Categoria_model extends CI_Model{

  public function getCategorias(){
    $this->db->where("cat_estado","1");
    $resultados = $this->db->get("categoria");
    return $resultados->result();
  }

  public function save($data){
  	return $this->db->insert("categoria",$data);
  }

  public function getCategoria($idcategoria){
  	$this->db->where("idcategoria",$idcategoria);
  	$resultado = $this->db->get("categoria");
  	return $resultado->row();
  }

  public function update($idcategoria,$data){
      $this->db->where("idcategoria",$idcategoria);
      return $this->db->update("categoria",$data);
     }
}