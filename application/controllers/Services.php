<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

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

	}

	public function action_sociales()
	{
		$this->load->view('common/head');
		$this->load->view('common/header', $this->data);
	  $this->load->view('services/actions', $this->data2);
    $this->load->view('common/footer');
	}
	public function aides_a_domicile()
	{
		$this->load->view('common/head');
		$this->load->view('common/header', $this->data);
	  $this->load->view('services/AaD', $this->data2);
    $this->load->view('common/footer');
	}
	public function ehpad()
	{
		$this->load->view('common/head');
		$this->load->view('common/header', $this->data);
	  $this->load->view('services/ehpad', $this->data2);
    $this->load->view('common/footer');
	}
	public function hebergement_durgence()
	{
		$this->load->view('common/head');
		$this->load->view('common/header', $this->data);
	  $this->load->view('services/hDu', $this->data2);
    $this->load->view('common/footer');
	}
	public function portage_de_repas()
	{
		$this->load->view('common/head');
		$this->load->view('common/header', $this->data);
	  $this->load->view('services/repas', $this->data2);
    $this->load->view('common/footer');
	}


}
