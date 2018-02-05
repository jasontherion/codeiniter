<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller
{
  public function index()
  {
    $this->load->view('header');
    $data['contactos']=$this->consultas->contactos();
    $this->load->view('main', $data);
    $this->load->view('footer');
  }


  public function formAddContacto()
  {
    $contacto=array(
      'id'=>'',
      'nombre'=>'',
      'direccion'=>'',
      'telefono'=>'',
      'email'=>''
    );
    $datos = array(
      'idform' => "formNuevoContacto",
      'textbtn'=>"Agregar",
      'contacto'=>$contacto
    );
    $this->load->view('_formulario',$datos);
  }

  public function guardarContacto()
  {
    $datos = array(
      'nombre'=>$this->input->post('nombre'),
      'direccion'=>$this->input->post('direccion'),
      'telefono'=>$this->input->post('telefono'),
      'email'=>$this->input->post('email'),
    );
    $this->insertar->insertar('contactos',$datos);
  }


  public function formEditContacto()
  {
    $idContacto = $this->input->post('idContacto');
    $contacto=  $this->consultas->consultaGral('contactos','id',$idContacto,'2');

    $datos = array(
      'idform' => "formEditContacto",
      'textbtn'=>"Editar",
      'contacto'=>$contacto
    );
    $this->load->view('_formulario',$datos);
  }


  public function editarContacto()
  {
    $idcontacto =$this->input->post('id');
    $datos = array(
      'nombre'=>$this->input->post('nombre'),
      'direccion'=>$this->input->post('direccion'),
      'telefono'=>$this->input->post('telefono'),
      'email'=>$this->input->post('email'),
    );
    $this->insertar->actualizar('contactos',$datos,array('id' => $idcontacto ));
  }


  public function eliminarContacto()
  {
    $idcontacto =$this->input->post('idContacto');
    $this->delete->eliminarId('contactos',$idcontacto);
  }




}
?>
