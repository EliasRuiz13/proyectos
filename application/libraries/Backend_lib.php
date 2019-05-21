<?php

class Backend_lib{
	private $CI;
	public function __construct(){
      $this->CI = & get_instance();
	}

	public function conrol(){
      if (!$this->CI->session->userdata("login")) {
      	redirect(base_url());
      }
      $url = $this->CI->uri->segment(1);
      /*if ($this->CI->uri->segment(2)) {
      	$url = $this->CI->uri->segment(1)."/".$this->CI->uri->segment(2);
      }*/
      $infomenu = $this->CI->Backend_model->getID($url);
      $permisos = $this->CI->Backend_model->getPermisos($infomenu->idpermisos,$this->CI->session->userdata("rol"));
      if ($permisos->read == 0) {
      	redirect(base_url."Inicio");
      }else{
      	return $permisos;
      }
	}
}