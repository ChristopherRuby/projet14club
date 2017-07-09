<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edition extends MY_Controller {

    public function __construct()
    {
            parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->library('form_validation');
			$this->load->model('edition_model');
			$this->data['title']='14 le Club';
			$this->data['nav_flag']='edition';
			$this->data['base_url']=base_url();
			
    }

	public function index()
	{
		$data=$this->data;
		
		$data['head_title']='Edition module';
		$data['head_sub_title']='Vue d\'ensemble';
		
		$data['menu_flag_link']='index';
		
		$this->load->view('template/header', $data);
		$this->load->view('edition/v_edition_overview', $data);
		$this->load->view('template/footer', $data);
	}
	
	public function edit_type_abonnement()
	{
		$data=$this->data;
		$data['head_title']='Edition module';
		$data['head_sub_title']='Edition des types d\'abonnement';
		
		$data['menu_flag_link']='type_abo';
		$this->form_validation->set_rules('libelle', 'Libelle', 'required');
		
		// Si le formulaire à bien été valider, on ajoute en bdd le nouveau type d'abonnement
        if ($this->form_validation->run())
        {
        	
			//echo "OK1";
			$libelle=$this->input->post('libelle');
       		$this->edition_model->insert_new_type_abo($libelle);
            //echo "OK2";
        }		
		
		// Recupération de tous les types d'abonnement
		$data['type_abo']=$this->edition_model->get_all_type_abonnement();
		
		$this->load->view('template/header', $data);
		$this->load->view('edition/v_edition_type_abo', $data);
		$this->load->view('template/footer', $data);		
	}
	
	public function edit_banque()
	{
		$data=$this->data;
		$data['head_title']='Edition module';
		$data['head_sub_title']='Edition des Banques';
		
		$data['menu_flag_link']='banque';
		$this->form_validation->set_rules('banque', 'Banque', 'required');
		
		// Si le formulaire à bien été valider, on ajoute en bdd la nouvelle
        if ($this->form_validation->run())
        {
        	
			//echo "OK1";
			$banque=$this->input->post('banque');
       		$this->edition_model->insert_new_banque($banque);
            //echo "OK2";
        }		
		
		// Recupération de tous la nouvelle banque
		$data['banque']=$this->edition_model->get_all_banque();
		
		$this->load->view('template/header', $data);
		$this->load->view('edition/v_edition_banque', $data);
		$this->load->view('template/footer', $data);		
	}	
	
/*	
	public function create()
	{
		$data=$this->data;
		
		$data['head_title']='Gestion des abonnées';
		$data['head_sub_title']='Création d\'une fiche';
		
		$data['menu_flag_link']='create';
		
		$this->load->view('template/header', $data);
		$this->load->view('abonne/v_abonne_create', $data);
		$this->load->view('template/footer', $data);
	}
*/	
}
