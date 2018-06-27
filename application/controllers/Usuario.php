<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("crudUsuario");
	}


	public function main()
	{
		$this->load->view('templates/header');
		$this->load->view('mantenedores/usuario_main');
		$this->load->view('templates/footer');
	}
	public function insertarUsuario()
	{
		$run = $this->input->post("run");
		$nombre = $this->input->post("nombre");
		$apellidoP = $this->input->post("apellidoP");
		$apellidoM = $this->input->post("apellidoM");
		$correo = $this->input->post("correo");
		$pass = $this->input->post("pass");
		$idCategoria = $this->input->post("idCategoria");

		if ($run == null|| $nombre == null|| $apellidoP == null|| $apellidoM == null|| $correo == null|| $pass == null|| $idCategoria == null) {
			echo json_encode(array("msg" => "debe llenar todos los campos!!!"));
		} else {
			if ($this->crudUsuario->insertar($run, $nombre, $apellidoP, $apellidoM, $correo, $pass, $idCategoria)) {
				echo json_encode(array("msg" => "insertado!!!"));
			} else {
				echo json_encode(array("msg" => "NO insertado!!!"));
			}

		}


	}




}
