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
		$this->load->model('news_model');
		$this->data2['news_liste'] = $this->news_model->get_list(2,0);

		$this->load->view('common/head');
		$this->load->view('common/header', $this->data);
    $this->load->view('accueil/home',$this->data2);
    $this->load->view('common/footer');
	}

	public function actualites() // Liste actualites
	{
		$this->load->model('news_model');
		$this->data2['news_liste'] = $this->news_model->get_list(2,0);

		$this->load->view('common/head');
		$this->load->view('common/header', $this->data);
	  $this->load->view('accueil/actusListe',$this->data2);
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
