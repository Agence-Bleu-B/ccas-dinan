<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	private $isco;
	private $data = array();//data head et footer sous certaines conditions
	private $data2 = array();//data corp

	public function __construct()
  {
    parent::__construct();

		$this->load->model('personnel_model');
		$this->isco = $this->personnel_model->isconnect();
		$this->data['isPersonnelCo'] = $this->isco;
	}

	public function index()
	{
		$this->load->view('common/head');
		$this->load->view('common/header', $this->data);
    $this->load->view('accueil/home',$this->data2);
    $this->load->view('common/footer');
	}

	public function actualites() // Liste actualites
	{
		$this->load->view('common/head');
		$this->load->view('common/header', $this->data);
	  $this->load->view('accueil/actusListe',$this->data2);
    $this->load->view('common/footer');
	}

	public function actualite() // Actualité unique
	{
		$data['news_banner'] = true; // temporaire, à remplacé par la methode du model

		$this->load->view('common/head');
		$this->load->view('common/header', $this->data);
	  $this->load->view('accueil/actu',$this->data2);
    $this->load->view('common/footer');
	}

}
