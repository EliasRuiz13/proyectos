<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

 public function __construct(){
   parent::__construct();
   $this->load->model("Producto_model");
   $this->load->model("Marca_model");
   $this->load->model("Categoria_model");
}


public function index()
{

    $data = array(
        'productos' => $this->Producto_model->getProductos(),
    );
    $this->load->view('head');
    $this->load->view('menu_head');
    $this->load->view('menu_costado');
    $this->load->view('productos/productos/list',$data); 
    $this->load->view('plugins_footer');
}

public function add(){
  $data =array(
     "marcas" => $this->Marca_model->getMarcas(),
     "categorias" => $this->Categoria_model->getCategorias()
 );
  $this->load->view('head');
  $this->load->view('menu_head');
  $this->load->view('menu_costado');
  $this->load->view('productos/productos/add',$data); 
  $this->load->view('plugins_footer');
  
}

public function store(){
    $nombre = $this->input->post("pro_detalle");
    $codbarra = $this->input->post("pro_codbarra");
    $preciov = $this->input->post("pro_precio_venta");
    $precioc = $this->input->post("pro_precio_compra");
    $stock = $this->input->post("pro_stock");
    $stockmin = $this->input->post("pro_stock_minimo");
    $idmarc = $this->input->post("marca");
    $idcat = $this->input->post("categoria");

    $this->form_validation->set_rules("pro_detalle","nombre","required");
    $this->form_validation->set_rules("pro_codbarra","codbarra","required|is_unique[producto.pro_codbarra]");
    $this->form_validation->set_rules("pro_precio_venta","preciov","required");
    $this->form_validation->set_rules("pro_precio_compra","precioc","required");
    $this->form_validation->set_rules("pro_stock","stock","required");
    $this->form_validation->set_rules("pro_stock_minimo","stockmin","required");
    if ($this->form_validation->run()) {
    	$data =array(
          'pro_detalle' => $nombre,
          'pro_codbarra' => $codbarra,
          'pro_precio_venta' => $preciov,
          'pro_precio_compra' => $precioc,
          'pro_stock' => $stock,
          'pro_stock_minimo' => $stockmin,
          'idmarca' => $idmarc,
          'idcategoria' => $idcat,
          'estado' => "1"
      );

       if ($this->Producto_model->save($data)) {
          redirect(base_url()."Productos");
      }
      else{
          $this->session->set_flashdata("Ooops!","No se pudo guardar el registro");
          redirect(base_url()."Productos/add");
      }
  }
  else{
    $this->add();
}
}

public function edit($idproducto){
   $data =array(
      "producto" => $this->Producto_model->getProducto($idproducto),
      "marcas" => $this->Marca_model->getMarcas(),
      "categorias" => $this->Categoria_model->getCategorias()
  );
   $this->load->view('head');
   $this->load->view('menu_head');
   $this->load->view('menu_costado');
   $this->load->view('productos/productos/edit',$data); 
   $this->load->view('plugins_footer');

}
public function update(){
   $idproducto = $this->input->post("idproducto");
   $nombre = $this->input->post("pro_detalle");
   $codbarra = $this->input->post("pro_codbarra");
   $preciov = $this->input->post("pro_precio_venta");
   $precioc = $this->input->post("pro_precio_compra");
   $stock = $this->input->post("pro_stock");
   $stockmin = $this->input->post("pro_stock_minimo");
   $idmarc = $this->input->post("marca");
   $idcat = $this->input->post("categoria");

   $productoActual = $this->Producto_model->getProducto($idproducto);
   if ($codbarra == $productoActual->pro_codbarra) {
    $is_unique = '';
} else{
    $is_unique = '|is_unique[producto.pro_codbarra]';
}

$this->form_validation->set_rules("pro_detalle","nombre","required");
$this->form_validation->set_rules("pro_codbarra","codbarra","required".$is_unique);
$this->form_validation->set_rules("pro_precio_venta","preciov","required");
$this->form_validation->set_rules("pro_precio_compra","precioc","required");
$this->form_validation->set_rules("pro_stock","stock","required");
$this->form_validation->set_rules("pro_stock_minimo","stockmin","required");
if ($this->form_validation->run()) {
    $data = array(
      'pro_detalle' => $nombre,
      'pro_codbarra' => $codbarra,
      'pro_precio_venta' => $preciov,
      'pro_precio_compra' => $precioc,
      'pro_stock' => $stock,
      'pro_stock_minimo' => $stockmin,
      'idmarca' => $idmarc,
      'idcategoria' => $idcat,
  );
    if ($this->Producto_model->update($idproducto,$data)) {
      redirect(base_url()."Productos");
  }
  else{
      $this->session->set_flashdata("Ooops!","No se pudo modificar el registro");
      redirect(base_url()."Productos".$idproducto);
  }
} else{
    $this->edit($idproducto);
}
}
public function delete($idproducto){
    $data = array(
        'estado' => "0", 
    );
    $this->Producto_model->update($idproducto,$data);
    echo "Productos";
}
}
