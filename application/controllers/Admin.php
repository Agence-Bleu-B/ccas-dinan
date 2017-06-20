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
		//si demande decco
		if (isset($_GET['deco'])) {
			$this->admin_model->deco();
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
	public function actu()
	{
		//data head
		$data = array();
		//data corp
		$data2 = array();
		//chargement models
		$this->load->model('admin_model');
		$this->load->model('news_model');
		//verif si connecté
	    $isco = $this->admin_model->isconnect();
	    if (!$isco) {
	    	redirect('/admin', 'refresh');
	    }
	    // si demande d'effacement de news
	    if (isset($_GET['delete'])) {
	    	$idtodel = $_GET['delete'];
	    	$message = $this->news_model->delete_news($idtodel);
	    	$data2['message'] = $message;
	    }
	    //pagination
        $this->load->library('pagination');
        //config pagination
        $config['base_url'] = site_url('admin/actu');
        $config['total_rows'] = $this->news_model->count_news(0);
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        $this->pagination->initialize($config);
        $data2['pagination'] = $this->pagination->create_links();

        //requete news
        if (isset($_GET['per_page'])) {
        	$limit = $_GET['per_page'];
        }
        else{
        	$limit = 0;
        }
        
        $newslist = $this->news_model->get_list(0,$limit);
        $data2['newslist'] = $newslist; 
		//affichage page selon connection
		$this->load->view('admin/header');
		$this->load->view('admin/gestion-actu',$data2);
		$this->load->view('admin/footer');
	}
	public function creation(){
		//data head
		$data = array();
		//data corp
		$data2 = array();
		//chargement models
		$this->load->model('admin_model');
		$this->load->model('news_model');
		//verif si connecté
	    $isco = $this->admin_model->isconnect();
	    if (!$isco) {
	    	redirect('/admin', 'refresh');
	    }



	    //affichage page selon connection
		$this->load->view('admin/header');
		$this->load->view('admin/creation',$data2);
		$this->load->view('admin/footer');
	}
}
