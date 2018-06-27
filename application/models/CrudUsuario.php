<?php
class CrudUsuario extends CI_Model
{

public function __construct()
{
    parent::__construct();
    $this->load->database();
}


public function insertar($run,$nombre,$apellidoP,$apellidoM,$correo,$pass,$idCategoria){

    $data = array(
        "idUsuario"=>null,
        "run"=>$run,
        "nombre"=>$nombre,
        "apellidoP"=>$apellidoP,
        "apellidoM"=>$apellidoM,
        "correo"=>$correo,
        "pass"=>$pass,
        "idCategoria"=>$idCategoria

    );

    return $this->db->insert("usuario",$data);
}

public function buscarPorRun($run)
{
    return $this->db->get_where('usuario',array('run'=>$run));
}









}
