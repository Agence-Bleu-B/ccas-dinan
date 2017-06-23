<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {


	public function index()
	{
		$data = array();
		$data2 = array();

		$this->load->model('personnel_model');
		$data['isPersonnelCo'] = $this->personnel_model->isconnect();

		$this->load->view('common/head');
		$this->load->view('common/header', $data);
    $this->load->view('accueil/home',$data2);
    $this->load->view('common/footer');
	}

	public function actualites() // Liste actualites
	{
		$data = array();
		$data2 = array();

		$this->load->model('personnel_model');
		$data['isPersonnelCo'] = $this->personnel_model->isconnect();

		$this->load->view('common/head');
		$this->load->view('common/header', $data);
	    $this->load->view('accueil/actusListe',$data2);
    $this->load->view('common/footer');
	}

	public function actualite() // Actualité unique
	{
		$data = array();
		$data2 = array();

		$this->load->model('personnel_model');
		$data['isPersonnelCo'] = $this->personnel_model->isconnect();

		$data['news_banner'] = true; // temporaire, à remplacé par la methode du model

		$this->load->view('common/head');
		$this->load->view('common/header', $data);
	    $this->load->view('accueil/actu',$data2);
    $this->load->view('common/footer');
	}

}
