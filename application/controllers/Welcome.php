<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 //public function __construct(){
		//parent::__construct();
		//if(!$this->session->userdata("login")){
		//	redirect(base_url());
		//}
	//}
	/*public function index()
	{
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('plantilla');
		$this->load->view('plugins_footer');
		//$this->load->view('welcome_message');
	}*/
    
    public function index()
	{
		$this->load->view('login');
	}
	
}
