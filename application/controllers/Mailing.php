<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailing extends MY_Controller {

    public function __construct()
    {
            parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->library('form_validation');
			$this->load->library('upload');
			$this->load->library('email'); 
			$this->load->model('abonne_model');
			$this->load->model('mail_model');
			$this->data['title']='14 le Club';
			$this->data['nav_flag']='mailing';
			$this->data['base_url']=base_url();
			
    }

	public function index()
	{
		$data=$this->data;
		
		$data['head_title']='Gestion des envoies d\'E-mail';
		$data['head_sub_title']='Création d\'une news';
		
		$data['menu_flag_link']='index';
		
		$this->load->view('template/header', $data);
		$this->load->view('mailing/v_mailing_create', $data);
		$this->load->view('template/footer', $data);
	}

	function send_news()
	{
		
		$data=$this->data;
		
		$data['head_title']='Gestion des envois d\'E-mail';
		$data['head_sub_title']='Création d\'une news';
		
		$data['formule']=$this->abonne_model->get_all_type_abonnement();
		
		$this->form_validation->set_rules('form_activation', 'form', 'required');
		// Lorsque l'on filtre
		if ($this->form_validation->run())
        {
        	// Lorsque l'on veut écrire la news
        	$data_form=$this->input->post();
			if($this->input->post('next_step')==1)
			{
				$this->mail_model->clean_table();
				$this->mail_model->insert_abonne_selected($data_form);
				redirect("/mailing/write_news");
			}
			
			$data['abonne']=$this->abonne_model->get_all_abonne($data_form);
			
			$data['prev_data']=$this->input->post();
			
			$this->load->view('template/header', $data);
			$this->load->view('mailing/v_mailing_news_receivers', $data);
			$this->load->view('template/footer', $data);    	
		}
		else 
		{
				
			$this->load->view('template/header', $data);
			$this->load->view('mailing/v_mailing_news_receivers', $data);
			$this->load->view('template/footer', $data);		
		}				
		
	}

	function write_news()
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
				
		if($this->form_validation->run())
        {
        	$objet=$this->input->post('objet');
			$text=$this->input->post('text');
			$receiver=$this->mail_model->get_receiver_list();
			$nb_to_decremente=$this->input->post('nb_journaux');
			$test_mail=$this->input->post('test');
			
			$file_name="";
			if($this->upload->do_upload())
			{
				//log_message('error','file upload success');
			    //echo "file upload success";
				
				//log_message('error',print_r($this->upload->display_errors()));
				//print_r($this->upload->display_errors());
				
				$file_name=$this->upload->data('file_name');  

			}
			
			if($test_mail=="1")
			{
					$data['text']=htmlentities($this->input->post('text'));
					$html_email=$this->load->view('mailing/v_mailing_sm', $data,true);
					
					$this->email->clear(TRUE);
				    //$this->load->library('email'); // load email library
				    $this->email->from('14leclub@patrickbruel.com');
				    $this->email->to('14leclub@patrickbruel.com');
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
						//log_message('error','oki');
						// function to decremente un journal
						//$this->mail_model->update_abonnement_by_sending_news($line['id_user'],$nb_to_decremente);
						
					}
				    else{
						$data['confirmation_mail']="nok";
				        //echo "There is error in sending mail!";
						//echo $this->email->print_debugger();	
					}				
			}
			else 
			{
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
				    else{
						$data['confirmation_mail']="nok";
				        //echo "There is error in sending mail!";
						//echo $this->email->print_debugger();	
					}
				}				
			}
		
		}
		$this->load->view('template/header', $data);
		$this->load->view('mailing/v_mailing_news_create', $data);
		$this->load->view('template/footer', $data);		
		
	}


	function send_mail_no_member()
	{
		
		$data=$this->data;
		
		$data['head_title']='Gestion des envoies d\'E-mail';
		$data['head_sub_title']='Création d\'un e-mail nominatif';
		$data['confirmation_mail']="";
		
		$config['upload_path'] = './attachement_mail/';
		$config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx';
		$config['max_size']     = '400';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
/*
		$data['info_user']="";
		if($id!="")
		{
			$data['info_user']=$this->abonne_model->get_one_abonne($id);
		}
*/		

		// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
		$this->upload->initialize($config);
		
		$this->form_validation->set_rules('objet', 'L\'objet', 'required');
		$this->form_validation->set_rules('text', 'Le contenu du mail', 'required');
		$this->form_validation->set_rules('receiver', 'Destinataire', 'required');
				
		if($this->form_validation->run())
        {
        	$objet=$this->input->post('objet');
			$text=$this->input->post('text');
			$receiver=$this->input->post('receiver');
			//$id_user=$this->input->post('id_user');
			//$nb_to_decremente=$this->input->post('nb_journaux');
			
			$file_name="";
			if($this->upload->do_upload())
			{
				//log_message('error','file upload success');
			    //echo "file upload success";
				
				//log_message('error',print_r($this->upload->display_errors()));
				//print_r($this->upload->display_errors());
				
				$file_name=$this->upload->data('file_name');  

			}
			
			//$tab_receiver=explode(";",$receiver);
/*			
			for($i=0;$i<count($tab_receiver);$i++)
			{
*/				
				$data['text']=htmlentities($this->input->post('text'));
				$html_email=$this->load->view('mailing/v_mailing_sm', $data,true);
				
				$this->email->clear(TRUE);
			    //$this->load->library('email'); // load email library
			    $this->email->from('14leclub@patrickbruel.com');
			    $this->email->to($receiver);
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
							
				}
			    else
				{
					$data['confirmation_mail']="nok";
			        //echo "There is error in sending mail!";
					echo $this->email->print_debugger();	
				}
			//}
		}
		
		$this->load->view('template/header', $data);
		$this->load->view('mailing/v_mailing_create_no_member', $data);
		$this->load->view('template/footer', $data);		
		
	}
	
	function send_mail($id="")
	{
		
		$data=$this->data;
		
		$data['head_title']='Gestion des envoies d\'E-mail';
		$data['head_sub_title']='Création d\'un e-mail nominatif';
		$data['confirmation_mail']="";
		
		$config['upload_path'] = './attachement_mail/';
		$config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx';
		$config['max_size']     = '400';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';

		$data['info_user']="";
		if($id!="")
		{
			$data['info_user']=$this->abonne_model->get_one_abonne($id);
		}
		

		// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
		$this->upload->initialize($config);
		
		$this->form_validation->set_rules('objet', 'L\'objet', 'required');
		$this->form_validation->set_rules('text', 'Le contenu du mail', 'required');
		$this->form_validation->set_rules('receiver', 'Destinataire', 'required');
				
		if($this->form_validation->run())
        {
        	$objet=$this->input->post('objet');
			$text=$this->input->post('text');
			$receiver=$this->input->post('receiver');
			$id_user=$this->input->post('id_user');
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
			
			$tab_receiver=explode(";",$receiver);
			for($i=0;$i<count($tab_receiver);$i++)
			{
				
				$data['text']=htmlentities($this->input->post('text'));
				$html_email=$this->load->view('mailing/v_mailing_sm', $data,true);
				
				$this->email->clear(TRUE);
			    //$this->load->library('email'); // load email library
			    $this->email->from('14leclub@patrickbruel.com');
			    $this->email->to($tab_receiver[$i]);
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
					if($data['info_user']!="")
					{
						// function to decremente un journal
						//log_message('error',"prout");
						$this->mail_model->update_abonnement_by_sending_news($id_user,$nb_to_decremente);	
					}				
				}
			    else
					$data['confirmation_mail']="nok";
			        //echo "There is error in sending mail!";
					echo $this->email->print_debugger();	
			
			}
		}
		
		$this->load->view('template/header', $data);
		$this->load->view('mailing/v_mailing_create', $data);
		$this->load->view('template/footer', $data);		
		
	}

	function send()
	{
		
	    $this->load->library('email'); // load email library
	    $this->email->from('14leclub@patrickbruel.com');
	    $this->email->to('chris.geass@gmail.com');
	    $this->email->subject('Your Subject');
	    $this->email->message($this->load->view('mailing/v_mailing_sm', $data));
	    if ($this->email->send())
	        echo "Mail Sent!";
	    else
	        echo "There is error in sending mail!";
		echo $this->email->print_debugger();		
		
	}

}
