<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personnel extends CI_Controller {
	public function index()
	{
		//data head
		$data = array();
		//data corp
		$data2 = array();
		//chargement models
		$this->load->model('personnel_model');
		//si post verif si ok et mise en session si ok
		if (isset($_POST['val'])) {
			$mdp = $_POST['password'];
			$log = $_POST['login'];
			$this->personnel_model->connection($log,$mdp);
		}
		//si demande decco
		if (isset($_GET['deco'])) {
			$this->personnel_model->deco();
		}
		//verif si connecté
        $isco = $this->personnel_model->isconnect();
				$data['isPersonnelCo'] = $isco;

		//affichage page selon connection
		$this->load->view('common/head');
		$this->load->view('common/header', $data);
		if ($isco) {
			$this->load->view('personnel/home',$data2);
		}
		else{
			$this->load->view('personnel/register',$data2);
		}
        $this->load->view('common/footer');
	}
}
