<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends MY_Controller {

    public function __construct()
    {
            parent::__construct();
			$this->load->helper('url');
			//$data['base_url']=base_url();
			
    }

	public function index()
	{
		$data['base_url']=base_url();
		$data['title']='14 le Club';
		
		$this->load->view('template/header', $data);
		$this->load->view('accueil/v_accueil', $data);
		$this->load->view('template/footer', $data);
	}
	
	
}
