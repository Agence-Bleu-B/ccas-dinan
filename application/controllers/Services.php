<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {


	public function index()
	{

	}

	public function action_sociales()
	{
		$data = array();
		$data2 = array();

		$this->load->model('personnel_model');
		$data['isPersonnelCo'] = $this->personnel_model->isconnect();

		$this->load->view('common/head');
		$this->load->view('common/header', $data);
	    $this->load->view('services/actions',$data2);
    $this->load->view('common/footer');
	}
	public function aides_a_domicile()
	{
		$data = array();
		$data2 = array();

		$this->load->model('personnel_model');
		$data['isPersonnelCo'] = $this->personnel_model->isconnect();

		$this->load->view('common/head');
		$this->load->view('common/header', $data);
	    $this->load->view('services/AaD',$data2);
    $this->load->view('common/footer');
	}
	public function ehpad()
	{
		$data = array();
		$data2 = array();

		$this->load->model('personnel_model');
		$data['isPersonnelCo'] = $this->personnel_model->isconnect();

		$this->load->view('common/head');
		$this->load->view('common/header', $data);
	    $this->load->view('services/ehpad',$data2);
    $this->load->view('common/footer');
	}
	public function hebergement_durgence()
	{
		$data = array();
		$data2 = array();

		$this->load->model('personnel_model');
		$data['isPersonnelCo'] = $this->personnel_model->isconnect();

		$this->load->view('common/head');
		$this->load->view('common/header', $data);
	    $this->load->view('services/hDu',$data2);
    $this->load->view('common/footer');
	}
	public function portage_de_repas()
	{
		$data = array();
		$data2 = array();

		$this->load->model('personnel_model');
		$data['isPersonnelCo'] = $this->personnel_model->isconnect();

		$this->load->view('common/head');
		$this->load->view('common/header', $data);
	    $this->load->view('services/repas',$data2);
    $this->load->view('common/footer');
	}


}
