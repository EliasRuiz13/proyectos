<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Producto_model extends CI_Model{


  public function getProductos(){
  	$this->db->select("p.*,m.mar_descripcion as marca");
  	$this->db->select("p.*,c.cat_descripcion as categoria");
  	$this->db->from("producto p");
  	$this->db->join("marca m","p.idmarca = m.idmarca");
  	$this->db->join("categoria c","p.idcategoria = c.idcategoria");
    $this->db->where("p.estado","1");
    $resultados = $this->db->get();
    return $resultados->result();
  }

  public function add(){
        $this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('productos/categorias/add'); 
		$this->load->view('plugins_footer');
    }
  
  public function getProducto($idproducto){
    $this->db->where("idproducto",$idproducto);
    $resultado = $this->db->get("producto");
    return $resultado->row();
  }

  public function save($data){
   return $this->db->insert("producto",$data);
  }
  public function update($idproducto,$data){
      $this->db->where("idproducto",$idproducto);
      return $this->db->update("producto",$data);
     }
}