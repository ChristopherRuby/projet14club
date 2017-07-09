<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administration extends MY_Controller {

    public function __construct()
    {
            parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->library('form_validation');
			$this->load->library('upload');
			$this->load->library('email'); 
			$this->load->model('abonne_model');
			$this->load->model('mail_model');
			$this->load->model('administration_model');
			$this->load->model('impression_model');
			$this->data['title']='14 le Club';
			$this->data['nav_flag']='administration';
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
       		$this->administration_model->insert_new_type_abo($libelle);
            //echo "OK2";
        }		
		
		// Recupération de tous les types d'abonnement
		$data['type_abo']=$this->administration_model->get_all_type_abonnement();
		
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
       		$this->administration_model->insert_new_banque($banque);
            //echo "OK2";
        }		
		
		// Recupération de tous la nouvelle banque
		$data['banque']=$this->administration_model->get_all_banque();
		
		$this->load->view('template/header', $data);
		$this->load->view('administration/v_edition_banque', $data);
		$this->load->view('template/footer', $data);		
	}	

	public function delete_banque()
	{
		$id_banque=$this->input->post('id_banque');
		// On désactive la banque
		$this->administration_model->hidding_banque($id_banque);	
		
		redirect("/administration/edit_banque");		
	}	

	public function current_list()
	{
		
		$data=$this->data;
		
		$data['head_title']='Administration';
		$data['head_sub_title']='Gestion de la liste temporaire';
		
		$data['list']=$this->administration_model->get_users_in_list();
		
		$this->form_validation->set_rules('confirmed', 'confirmed', 'required');
        if ($this->form_validation->run())
        {
       		//$this->administration_model->insert_archive_list();
			$this->administration_model->clean_current_list();
			
			redirect("/administration/current_list");
        }				

		$this->load->view('template/header', $data);
		$this->load->view('administration/v_administration_gestion_list', $data);
		$this->load->view('template/footer', $data);		
		
	}

	public function print_etiquette_selected()
	{
		
		$data=$this->data;

		$post_variables=$this->input->post();
		$nb_to_decrem=$post_variables['nb_decrem'];
		$list_users=array();
		$data['list_user']=array();
		foreach($post_variables as $key => $value)
		{
			if($key!='nb_decrem'){
				array_push($list_users,$value);
			}
		}
		//log_message('error','test '.print_r($list_users,true));
		
		if(count($list_users)>0)
		{
			$data['list_user']=$this->impression_model->get_all_abonne_by_id($list_users);
			foreach($list_users as $value)
			{
				$this->impression_model->update_abonnement_by_decrem($value,$nb_to_decrem);
			}			
		}
		
		//log_message('error','return '.print_r($data['list'],true));
		$this->load->view('impression/v_impression_etiquettes_generated_test', $data);		
		
	}

	function send_mail_to_users_selected()
	{
		
		$data=$this->data;
		
		$data['head_title']='Gestion des envoies d\'E-mail';
		$data['head_sub_title']='Rédaction de la news';
		$data['confirmation_mail']="";
		
		$config['upload_path'] = './attachement_mail/';
		$config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx';
		$config['max_size']     = '400';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';

		// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
		$this->upload->initialize($config);
		
		$this->form_validation->set_rules('objet', 'L\'objet', 'required');
		$this->form_validation->set_rules('text', 'Le contenu du mail', 'required');
		
		$data['list_users_from_admin']="";
		$post_variables=array();
		if($this->input->post())
		{
			//log_message('error','tab : '.print_r($this->input->post(),true));
			foreach ($this->input->post() as $key => $value) {
				array_push($post_variables,$value);
			}
			for($i=0;$i<count($post_variables);$i++){
				if($i==count($post_variables)-1)
				{
					$data['list_users_from_admin'].="$post_variables[$i]";
				}
				else {
					$data['list_users_from_admin'].="$post_variables[$i],";
				}
			}
		}
		
		if($this->form_validation->run())
        {
        	$objet=$this->input->post('objet');
			$text=$this->input->post('text');
			$list_users_string=$this->input->post('list_users');
			$list_users_tab=explode(",", $list_users_string);
			$receiver=$this->impression_model->get_all_abonne_by_id($list_users_tab);
			
			$nb_to_decremente=$this->input->post('nb_journaux');
			
			$file_name="";
			if($this->upload->do_upload())
			{
				//log_message('error','file upload success');
			    //echo "file upload success";
				
				//log_message('error',print_r($this->upload->display_errors()));
				//print_r($this->upload->display_errors());
				
				$file_name=$this->upload->data('file_name');  

			}
			
			foreach($receiver as $line)
			{
				
				$data['text']=htmlentities($this->input->post('text'));
				$html_email=$this->load->view('mailing/v_mailing_sm', $data,true);
				
				$this->email->clear(TRUE);
			    //$this->load->library('email'); // load email library
			    $this->email->from('14leclub@patrickbruel.com');
			    $this->email->to($line['email']);
			    $this->email->subject($objet);
			    $this->email->message($html_email);
				if($file_name!="")
				{
					$this->email->attach($this->upload->data('full_path')); 
				}
			    if ($this->email->send())
				{
			        //echo "Mail Sent!";
					$data['confirmation_mail']="ok";
					// function to decremente un journal
					$this->mail_model->update_abonnement_by_sending_news($line['id'],$nb_to_decremente);
					
					redirect("/administration/current_list");
				}
			    else
					$data['confirmation_mail']="nok";
			        //echo "There is error in sending mail!";
					//echo $this->email->print_debugger();	
			
			}
		}
		
		$this->load->view('template/header', $data);
		$this->load->view('administration/v_administration_news_create', $data);
		$this->load->view('template/footer', $data);		
		
	}

	public function delete_user_from_list()
	{

		$id=$this->input->post('id_user');
		$this->administration_model->clean_user_from_current_list($id);	
		
		redirect("/administration/current_list");		
	}	

	public function current_list2()
	{
		
		$data=$this->data;
		
		$data['head_title']='Administration';
		$data['head_sub_title']='Gestion de la liste temporaire';
		
		$data['list']=$this->administration_model->get_users_in_list();
		
		$this->form_validation->set_rules('confirmed', 'confirmed', 'required');
        if ($this->form_validation->run())
        {
       		$this->administration_model->insert_archive_list();
			$this->administration_model->clean_current_list();
			
			redirect("/administration/archived_list");
        }				

		$this->load->view('template/header', $data);
		$this->load->view('administration/v_administration_gestion_list', $data);
		$this->load->view('template/footer', $data);		
		
	}
	
	public function archived_list($id_list="")
	{
		
		$data=$this->data;
		
		$data['head_title']='Administration';
		$data['head_sub_title']='Gestion des listes archivées';
		
		$data['current_list']=$id_list;
		$data['list_archive']=$this->administration_model->get_all_archived_list();
		$data['list_users']="";
		if($id_list!="")
		{
			$data['list_users']=$this->administration_model->get_users_in_archived($id_list);	
		}
		
		$this->form_validation->set_rules('confirmed', 'confirmed', 'required');
        if ($this->form_validation->run())
        {
        }				

		$this->load->view('template/header', $data);
		$this->load->view('administration/v_administration_gestion_archived', $data);
		$this->load->view('template/footer', $data);			
		
		
		
		
	}
	
	public function add_to_the_list()
	{
		//log_message('error','I came here');
		$id_list=$this->input->post('id_user');
		$this->administration_model->add_user_in_list($id_list);	
		// On récupère le numéro membre
		$num_member=$this->input->post('num_user');
		
		redirect("/administration/current_list");	
		//redirect("/abonne/view_abonne/$num_member");
		
	}

	public function delete_to_the_list()
	{
		$id_user=$this->input->post('id_user');
		$this->administration_model->delete_user_in_list($id_user);	
		
		redirect("/administration/current_list");
		
	}
	
	function write_mail_from_list($id_list)
	{
		
		$data=$this->data;
		
		$data['head_title']='Administration';
		$data['head_sub_title']='Envoie de mail sur une liste';
		$data['confirmation_mail']="";
		
		$config['upload_path'] = './attachement_mail/';
		$config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx';
		$config['max_size']     = '400';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';

		// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
		$this->upload->initialize($config);
		
		$this->form_validation->set_rules('objet', 'L\'objet', 'required');
		$this->form_validation->set_rules('text', 'Le contenu du mail', 'required');
				
		if($this->form_validation->run())
        {
        	$objet=$this->input->post('objet');
			$text=$this->input->post('text');
			$receiver=$this->administration_model->get_receiver_from_archived($id_list);
			$nb_to_decremente=$this->input->post('nb_journaux');
			
			$file_name="";
			if($this->upload->do_upload())
			{
				//log_message('error','file upload success');
			    //echo "file upload success";
				
				//log_message('error',print_r($this->upload->display_errors()));
				//print_r($this->upload->display_errors());
				
				$file_name=$this->upload->data('file_name');  

			}
			
			foreach($receiver as $line)
			{
				
				$data['text']=htmlentities($this->input->post('text'));
				$html_email=$this->load->view('mailing/v_mailing_sm', $data,true);
				
				$this->email->clear(TRUE);
			    //$this->load->library('email'); // load email library
			    $this->email->from('14leclub@patrickbruel.com');
			    $this->email->to($line['mail']);
			    $this->email->subject($objet);
			    $this->email->message($html_email);
				if($file_name!="")
				{
					$this->email->attach($this->upload->data('full_path')); 
				}
			    if ($this->email->send())
				{
			        //echo "Mail Sent!";
					$data['confirmation_mail']="ok";
					// function to decremente un journal
					$this->mail_model->update_abonnement_by_sending_news($line['id_user'],$nb_to_decremente);
					
				}
			    else
					$data['confirmation_mail']="nok";
			        //echo "There is error in sending mail!";
					//echo $this->email->print_debugger();	
			
			}
		}
		
		$this->load->view('template/header', $data);
		$this->load->view('mailing/v_mailing_news_create', $data);
		$this->load->view('template/footer', $data);		
		
	}	

	public function etiquettes_archived()
	{
		
		$data=$this->data;
		
		$data['head_title']='Administration';
		$data['head_sub_title']='Envoie de mail sur une liste';

		$list=$this->input->post('id_list');		
		$nb_to_decremente=$this->input->post('nb_decrem');

    	$data['list_user']=$this->administration_model->get_users_in_archived($list);
		foreach($data['list_user'] as $info_user)
		{
			$this->mail_model->update_abonnement_by_sending_news($info_user['id_user'],$nb_to_decremente);
		}
		
		$this->load->view('administration/v_administration_etiquettes', $data);			
				
	}

}
