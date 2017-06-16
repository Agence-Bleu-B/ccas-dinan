<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		//data head
		$data = array();
		//data corp
		$data2 = array();
		//chargement models
		$this->load->model('admin_model');
		//si post verif si ok et mise en session si ok
		if (isset($_POST['val'])) {
			$mdp = $_POST['password'];
			$log = $_POST['login'];
			$this->admin_model->connection($log,$mdp);
		}
		//verif si connecté
        $isco = $this->admin_model->isconnect();
		//affichage page selon connection
		if ($isco) {
			$this->load->view('admin/header');
			$this->load->view('admin/home',$data2);
		}
		else{
			$this->load->view('admin/header-reg');
			$this->load->view('admin/register',$data2);
		}
        $this->load->view('admin/footer');
	}
}
