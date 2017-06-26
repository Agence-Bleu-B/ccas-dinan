<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personnel extends CI_Controller {

	private $isco;
	private $data = array();//data head et footer sous certaines conditions
	private $data2 = array();//data corp

	public function __construct()
  {
    parent::__construct();

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

		$this->isco = $this->personnel_model->isconnect();
		$this->data['isPersonnelCo'] = $this->isco;
	}

	public function index()
	{
		//affichage page selon connection
		$this->load->view('common/head');
		$this->load->view('common/header', $this->data);
		if ($this->isco) {
			$this->load->model('news_model');
			$this->data2['news_liste'] = $this->news_model->get_list(1,0);
			$this->load->view('personnel/home',$this->data2);
		}
		else{
			$this->load->view('personnel/register',$this->data2);
		}
    $this->load->view('common/footer');
	}

	public function actualite($slug) // Actualité unique
	{
		$this->load->model('news_model');

		$id = explode('-', $slug, 2)[0]; //recuperation de l'id
		$this->data['news'] = $this->news_model->load_news($id);

		$this->load->view('common/head');
		$this->load->view('common/header', $this->data);
	  $this->load->view('common/actu',$this->data2);
    $this->load->view('common/footer');
	}
}
