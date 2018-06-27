<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();

		$this->load->model('crudUsuario');
		$this->load->model('main_model');

	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/main');
		$this->load->view('templates/footer');
	}
	public function iniciarSesion()
	{
		$run = $this->input->post("run");
		$pass = $this->input->post("pass");
		$usData = $this->main_model->iniciarSesion($run, $pass);

		if (count($usData) > 0) {
			
			if ($usData[0]->idCategoria == 1) {

				echo json_encode(array("msg" => "admin!!!"));

			} else {
				echo json_encode(array("msg" => "LLOLL!!!"));
			}

		} else {
			echo json_encode(array("msg" => "datos Erroneos favor revisar..."));
		}



	}


}
