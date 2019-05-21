<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_model extends CI_Controller {

 public function rowCount($tabla){
   $this->db->where("estado","1");
   $resultados = $this->db->get($tabla);
   return $resultados->num_rows();
    }