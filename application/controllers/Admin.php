<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$data = array();
		$this->load->model('admin_model');
        $isco = $this->admin_model->isconnect();
		$this->load->view('admin/header');
		if ($isco) {
			$this->load->view('admin/home',$data);
		}
		else{
			$this->load->view('admin/register',$data);
		}
        $this->load->view('admin/footer');
	}
}
