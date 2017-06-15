<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {
	public function index()
	{
		$data = array();
        
		$this->load->view('common/header');
        $this->load->view('accueil/home',$data);
        $this->load->view('common/footer');
	}
}
