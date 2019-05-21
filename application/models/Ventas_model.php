<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {

	public function getVentas(){
		$this->db->select("v.*,c.cli_razonsocial,tc.nombre as tipo_comprobante");
		$this->db->from("ventas v");
		$this->db->join("cliente c","v.idcliente = c.idcliente");
		$this->db->join("tipo_comprobante tc","v.idComprobant = tc.idComprobant");
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
	}
	public function getVentasbyDate($fechainicio,$fechafin){
		$this->db->select("v.*,c.cli_razonsocial,tc.nombre as tipo_comprobante");
		$this->db->from("ventas v");
		$this->db->join("cliente c","v.idcliente = c.idcliente");
		$this->db->join("tipo_comprobante tc","v.idComprobant = tc.idComprobant");
		$this->db->where("v.fecha >=",$fechainicio);
		$this->db->where("v.fecha <=",$fechafin);
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
	}

	public function getVenta($idventas){
		$this->db->select("v.*,c.cli_razonsocial,c.cli_direccion,c.cli_telefono,c.cli_nrodoc as cli_nrodoc,tc.nombre as tipo_comprobante");
		$this->db->from("ventas v");
		$this->db->join("cliente c","v.idcliente = c.idcliente");
		$this->db->join("tipo_comprobante tc","v.idComprobant = tc.idComprobant");
		$this->db->where("v.idventas",$idventas);
		$resultado = $this->db->get();
		return $resultado->row();
	}

	public function getDetalle($idventas){
		$this->db->select("dt.*,p.pro_codbarra,p.pro_detalle");
		$this->db->from("venta_detalle dt");
		$this->db->join("producto p","dt.idproducto = p.idproducto");
		$this->db->where("dt.idventas",$idventas);
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getComprobantes(){
		$resultados = $this->db->get("tipo_comprobante");
		return $resultados->result();
	}

	public function getComprobante($idComprobant){
		$this->db->where("idComprobant",$idComprobant);
		$resultado = $this->db->get("tipo_comprobante");
		return $resultado->row();
	}

	public function getproductos($valor){
		$this->db->select("idproducto,pro_codbarra,pro_detalle as label,pro_precio_venta,pro_stock");
		$this->db->from("producto");
		$this->db->like("pro_detalle",$valor);
		$resultados = $this->db->get();
		return $resultados->result_array();
	}

	public function save($data){
		return $this->db->insert("ventas",$data);
	}

	public function lastID(){
		return $this->db->insert_id();
	}

	public function updateComprobante($idComprobant,$data){
		$this->db->where("idComprobant",$idComprobant);
		$this->db->update("tipo_comprobante",$data);
	}

	public function save_detalle($data){
		$this->db->insert("venta_detalle",$data);
	}

	public function years(){
		$this->db->select("YEAR(fecha) as year");
		$this->db->from("ventas");
		$this->db->group_by("year");
		$this->db->order_by("year","desc");
		$resultados = $this->db->get();
		return $resultados->result();
	}
}