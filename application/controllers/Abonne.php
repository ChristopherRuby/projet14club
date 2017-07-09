<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abonne extends MY_Controller {

    public function __construct()
    {
            parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->library('upload');
			$this->load->model('abonne_model');
			$this->load->model('administration_model');
			$this->load->model('edition_model');
			$this->data['title']='14 le Club';
			$this->data['nav_flag']='abonne';
			$this->data['base_url']=base_url();
			
    }

	public function index()
	{
		$data=$this->data;
		
		$data['head_title']='Gestion des abonnés';
		$data['head_sub_title']='Vue d\'ensemble';
		
		$data['menu_flag_link']='index';
		
		$data['abonne_total']=$this->abonne_model->get_abonne_stats();
		$data['abonne_en_cours']=$this->abonne_model->get_abonne_stats(array('user_status'=>'En cours'));
		//log_message('error'," Baboulinet ".print_r($data['abonne_total'],true));
		$data['abonne_clo']=$this->abonne_model->get_abonne_stats(array('user_status'=>'Clôturé'));
		$data['abonne_trad_en_cours']=$this->abonne_model->get_abonne_stats(array('id_type_abo'=>1,'user_status'=>'En cours'));
		$data['abonne_internet_en_cours']=$this->abonne_model->get_abonne_stats(array('id_type_abo'=>2,'user_status'=>'En cours'));
		
		$data['abonne_new_trad']=$this->abonne_model->get_abonne_stats(array('id_type_abo'=>1,'user_status'=>'En cours','nb_abo'=>'='));
		$data['abonne_new_internet']=$this->abonne_model->get_abonne_stats(array('id_type_abo'=>2,'user_status'=>'En cours','nb_abo'=>'='));
		$data['abonne_new']=$this->abonne_model->get_abonne_stats(array('user_status'=>'En cours','nb_abo'=>'='));
		
		$data['abonne_reabo_trad']=$this->abonne_model->get_abonne_stats(array('id_type_abo'=>1,'user_status'=>'En cours','nb_abo'=>'>'));
		$data['abonne_reabo_internet']=$this->abonne_model->get_abonne_stats(array('id_type_abo'=>2,'user_status'=>'En cours','nb_abo'=>'>'));
		$data['abonne_reabo']=$this->abonne_model->get_abonne_stats(array('user_status'=>'En cours','nb_abo'=>'>'));
		
		$this->load->view('template/header', $data);
		$this->load->view('abonne/v_abonne_overview', $data);
		$this->load->view('template/footer', $data);
	}
	
	public function create()
	{
		$data=$this->data;

		$file_name='photo_'.uniqid();

		$config['upload_path'] = './user_photo/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']     = '400';
		//$config['max_width'] = '1024';
		//$config['max_height'] = '768';
		$config['file_name'] = $file_name;
				
		// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
		$this->upload->initialize($config);
		
		$data['head_title']='Gestion des abonnés';
		$data['head_sub_title']='Création d\'une fiche';
		
		$data['menu_flag_link']='create';
		if($this->session->flashdata('error')!=null)
		{
			$data['error']=$this->session->flashdata('error');
		}
		$data['formule']=$this->abonne_model->get_all_type_abonnement();
		$data['status']=$this->abonne_model->get_all_status_abonnement();

		$this->form_validation->set_rules('num_user', 'Numéro de membre', 'callback_num_member_check');
		$this->form_validation->set_rules('nom', 'Nom', 'required');
		$this->form_validation->set_rules('prenom', 'Prénom', 'required');
		$this->form_validation->set_rules('sexe', 'Sexe', 'required');
		$this->form_validation->set_rules('adresse1', 'Adresse 1', 'required');
		$this->form_validation->set_rules('cp', 'Code postal', 'required');
		$this->form_validation->set_rules('ville', 'Ville', 'required');
		$this->form_validation->set_rules('pays', 'Pays', 'required');
		//$this->form_validation->set_rules('birthday', 'Date de naissance', 'required');
		$this->form_validation->set_rules('subscribe_day', 'Date d\inscription', 'required');
		//$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('formule', 'Formule', 'required');
		
		/*
		echo "OK 0";
		echo "<br>";
		echo $this->input->post('id_status');
		echo "<br>";
		 * 
		 */
		// Si le formulaire à bien été valider, on ajoute en bdd le nouveau type d'abonnement
        if ($this->form_validation->run())
        {
        	//log_message('error','form validation yes');
			//log_message('error',print_r($this->input->post(),true));
			$num_user=$this->input->post('num_user');
    		$nom=$this->input->post('nom');
			$prenom=$this->input->post('prenom');
			$sexe=$this->input->post('sexe');
			$adresse1=$this->input->post('adresse1');
			$adresse2=$this->input->post('adresse2');
			$cp=$this->input->post('cp');
			$ville=$this->input->post('ville');
			$pays=$this->input->post('pays');
			$date_naissance=$this->input->post('birthday');
			$date_inscription=$this->input->post('subscribe_day');
			$email=$this->input->post('email');
			$formule=$this->input->post('formule');
			$tel=$this->input->post('tel');
			$tel_p=$this->input->post('tel_p');
			$remarque=htmlentities($this->input->post('remarque'));
			$add_list=$this->input->post('add_list');
        	//log_message('error','In form validation');	
			if($this->upload->do_upload())
			{
				log_message('error','file upload success');
			    echo "file upload success";
				
				$file_name=$this->upload->data('file_name');  
				
	       		$id_abonne=$this->abonne_model->insert_new_user($num_user,$nom,$prenom,$adresse1,$adresse2,$cp,$ville,$date_naissance,$date_inscription,$email,$sexe,$formule,$file_name,$tel,$tel_p,$pays,$remarque);
				if($add_list==1)
				{
					$this->administration_model->add_user_in_list($id_abonne);
				}
				
	            //$id_abonne_last=$this->abonne_model->select_id_abonne_last();	
	            //log_message('error','TEST ctl : $id_abonne');			
	            redirect("/abonne/view_abonne/$num_user");
			}
			else
			{
				//log_message('error','NONO');
			    //echo "Erreur sur l'upload de la photo";
			    $file_name="";
                $error = array('error' => $this->upload->display_errors());
                
				$id_abonne=$this->abonne_model->insert_new_user($num_user,$nom,$prenom,$adresse1,$adresse2,$cp,$ville,$date_naissance,$date_inscription,$email,$sexe,$formule,$file_name,$tel,$tel_p,$pays,$remarque);
				if($add_list==1)
				{
					$this->administration_model->add_user_in_list($id_abonne);
				}				
				$this->session->set_flashdata('error', $error);
				redirect("/abonne/view_abonne/$num_user");	   
			}				
            	                        
            
        }	

		$this->load->view('template/header', $data);
		$this->load->view('abonne/v_abonne_create', $data);
		$this->load->view('template/footer', $data);
	}

	public function num_member_check($num)
	{
		log_message('error','callback check');
			
		$exist=$this->abonne_model->check_if_num_member_exist($num);
		if($exist==TRUE)
		{
			$this->form_validation->set_message('num_member_check', 'Le numéro d\'abonne existe déja');
			return false;
		}
		else {
			return true;
		}
	}

	public function find_abonne()
	{
		$data=$this->data;
		
		$data['head_title']='Gestion des abonnés';
		$data['head_sub_title']='Recherche d\'un abonné';
		
		$data['menu_flag_link']='find_abonne';
		$data['formule']=$this->abonne_model->get_all_type_abonnement();
		
		$this->form_validation->set_rules('form_activation', 'form', 'required');
		/*
		$this->form_validation->set_rules('prenom', 'Prénom', 'required');
		$this->form_validation->set_rules('sexe', 'Sexe', 'required');
		$this->form_validation->set_rules('adresse1', 'Adresse 1', 'required');
		$this->form_validation->set_rules('cp', 'Code postal', 'required');
		*/
		if ($this->form_validation->run())
        {
        	$data_form=$this->input->post();
			$data['abonne']=$this->abonne_model->get_all_abonne($data_form,TRUE);
			
			$data['prev_data']=$this->input->post();
			
			$this->load->view('template/header', $data);
			$this->load->view('abonne/v_abonne_find_abonne', $data);
			$this->load->view('template/footer', $data);        	
		}
		else 
		{
			$data['abonne']=$this->abonne_model->get_all_abonne("",TRUE);
			
			$this->load->view('template/header', $data);
			$this->load->view('abonne/v_abonne_find_abonne', $data);
			$this->load->view('template/footer', $data);			
		}
		

	}
/*
	public function view_abonne($id_abonne)
	{
		$data=$this->data;
		
		$data['head_title']='Gestion des abonnées';
		$data['head_sub_title']='Visualisation d\'un abonné';
		
		$data['menu_flag_link']='view_abonne';
		
		//$data['abonne']=$this->abonne_model->get_all_abonne();
		$data['abonne']=$this->abonne_model->get_one_abonne($id_abonne);
		//print_r($data['abonne']);
		
		$this->load->view('template/header', $data);
		$this->load->view('abonne/v_abonne_view', $data);
		$this->load->view('template/footer', $data);
	}
*/
	public function view_abonne($num_member)
	{
		$data=$this->data;
		
		$data['head_title']='Gestion des abonnés';
		$data['head_sub_title']='Visualisation d\'un abonné';
		
		$data['menu_flag_link']='view_abonne';
		
		$num_member=$num_member;
		$id_abonne=$this->abonne_model->get_id_by_num_member($num_member);
		
		//log_message('error','num member: '.$num_member);
		//log_message('error','id user: '.$id_abonne);
		
		//$data['abonne']=$this->abonne_model->get_all_abonne();
		$data['abonne']=$this->abonne_model->get_one_abonne($id_abonne);
		//print_r($data['abonne']);
		$data['user_abonnements']=$this->abonne_model->get_user_abonnements($id_abonne);
		
		$data['status_abo_list']=$this->abonne_model->get_all_status_abonnement();
		$data['type_abo']=$this->abonne_model->get_all_type_abonnement();
		$data['banque_list']=$this->edition_model->get_all_banque();
		
		$this->form_validation->set_rules('nom', 'Nom', 'required');
		$this->form_validation->set_rules('prenom', 'Prénom', 'required');
		$this->form_validation->set_rules('sexe', 'Sexe', 'required');
		$this->form_validation->set_rules('adresse1', 'Adresse 1', 'required');
		$this->form_validation->set_rules('cp', 'Code postal', 'required');
		$this->form_validation->set_rules('pays', 'Pays', 'required');		
		$this->form_validation->set_rules('ville', 'Ville', 'required');
		//$this->form_validation->set_rules('date_naissance', 'Date de naissance', 'required');
		$this->form_validation->set_rules('date_inscription', 'Date d\inscription', 'required');
		//$this->form_validation->set_rules('email', 'Email', 'required');
		//$this->form_validation->set_rules('formule', 'Formule', 'required');

		// on ajoute une flashdata pour faire passer l'id à la fonction ajout_abonnement()
		$this->session->set_flashdata('id_abonne', $id_abonne);
		$this->session->set_flashdata('num_member', $num_member);
		
		log_message('error','id before form run : '.$id_abonne);
		//echo "NO FORM";
		// Si le formulaire à bien été valider, on update la bdd avec les infos
        if ($this->form_validation->run())
        {
        	
			//echo "OK1";
			$num_user=$this->input->post('num_user');
			$nom=$this->input->post('nom');
			$prenom=$this->input->post('prenom');
			$sexe=$this->input->post('sexe');
			$adresse1=$this->input->post('adresse1');
			$adresse2=$this->input->post('adresse2');
			$cp=$this->input->post('cp');
			$ville=$this->input->post('ville');
			$pays=$this->input->post('pays');
			$date_naissance=$this->input->post('date_naissance');
			$date_inscription=$this->input->post('date_inscription');
			$email=$this->input->post('email');
			$formule=$this->input->post('formule');
			$tel=$this->input->post('tel');
			$tel_p=$this->input->post('tel_p');
			$remarque=htmlentities($this->input->post('remarque'));
			
			
			log_message('error','id in form running : '.$id_abonne);
       		$this->abonne_model->update_user($nom,$prenom,$adresse1,$adresse2,$cp,$ville,$date_naissance,$date_inscription,$email,$sexe,$id_abonne,$tel,$tel_p,$pays,$remarque,$formule,$num_user);
            //echo "OK2";
            
            //log_message('error','AV redirect id_abonne : '.$id_abonne);
			//log_message('error','AV redirect num_member : : '.$num_member);
            
            redirect("/abonne/view_abonne/$num_member");
            
        }	
		
		$this->load->view('template/header', $data);
		$this->load->view('abonne/v_abonne_view2', $data);
		$this->load->view('template/footer', $data);
	}
	
	public function ajout_abonnement()
	{
		//log_message('error','dans ajout abonnement');
		$data=$this->data;
		// On récupère l'id user
		$id_abonne=$this->session->flashdata('id_abonne');
		// On récupère le numéro membre
		$num_member=$this->session->flashdata('num_member');
		// on récupère toutes les variables post
		$form_data=$this->input->post();
		$this->abonne_model->insert_new_abonnement($form_data,$id_abonne);
		
		redirect("/abonne/view_abonne/$num_member");
		
	}

	public function update_abonnement($id)
	{
		//log_message('error','dans ajout abonnement');
		$data=$this->data;
		// On récupère l'id user
		$id_abo=$id;
		$id_abonne=$this->session->flashdata('id_abonne');
		// On récupère le numéro membre
		$num_member=$this->session->flashdata('num_member');
		// on récupère toutes les variables post
		$form_data=$this->input->post();
		$this->abonne_model->update_abonnement($form_data,$id_abo);
		
		redirect("/abonne/view_abonne/$num_member");		
	}

	public function delete_abonnement($id)
	{
		//log_message('error','dans ajout abonnement');
		$data=$this->data;
		// On récupère l'id user
		$id_abo=$id;
		$id_abonne=$this->session->flashdata('id_abonne');
		// On récupère le numéro membre
		$num_member=$this->session->flashdata('num_member');
		
		$this->abonne_model->delete_abonnement($id_abo);
		
		redirect("/abonne/view_abonne/$num_member");		
	}

	public function delete_user($id)
	{
		$this->abonne_model->delete_user($id);
		redirect("/abonne/find_abonne");		
	}


	public function upload_photo()
	{
		$data=$this->data;
		// On récupère l'id user
		
		$file_name='photo_'.uniqid();

		$config['upload_path'] = './user_photo/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']     = '400';
		//$config['max_width'] = '1024';
		//$config['max_height'] = '768';
		$config['file_name'] = $file_name;
				
		// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
		$this->upload->initialize($config);
		
		$id_abonne=$this->session->flashdata('id_abonne');
		$num_member=$this->session->flashdata('num_member');
		if($this->upload->do_upload())
		{
			log_message('error','file upload success');
		    echo "file upload success";
			
			$file_name=$this->upload->data('file_name');  
			
       		$this->abonne_model->assign_photo_to_user($file_name,$num_member,$id_abonne);
            //$id_abonne_last=$this->abonne_model->select_id_abonne_last();	
            //log_message('error','TEST ctl : $id_abonne');			
            redirect("/abonne/view_abonne/$num_member");
		}
		else
		{
			//log_message('error','file upload failed');
		    //echo "Erreur sur l'upload de la photo";
		    $file_name="";
            $error = array('error' => $this->upload->display_errors());
			
			$this->session->set_flashdata('error', $error);
			redirect("/abonne/view_abonne/$num_member");	   
		}	
		
		redirect("/abonne/view_abonne/$num_member");
		
	}
	
}
