<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Impression extends MY_Controller {

    public function __construct()
    {
            parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('abonne_model');
			$this->load->model('edition_model');
			$this->load->model('administration_model');
			$this->load->model('impression_model');
			$this->load->model('mail_model');
			$this->data['title']='14 le Club';
			$this->data['nav_flag']='impression';
			$this->data['base_url']=base_url();
			
    }
	
	public function index()
	{
		$data=$this->data;
		
		$data['head_title']='Impression';
		$data['head_sub_title']='Impression du bordereau de banque';
		
		$data['list_bordereau_generated']=$this->impression_model->get_list_bordereau_generated();
		
		if($this->session->flashdata('error')!=null)
		{
			$data['error']=$this->session->flashdata('error');
			//log_message('error','flash data INDEX'.$data['error']);
		}
		
		$this->load->view('template/header', $data);
		$this->load->view('impression/v_impression_index', $data);
		$this->load->view('template/footer', $data);		
	}

	public function etiquettes()
	{
		$data=$this->data;
		
		$data['head_title']='Impression';
		$data['head_sub_title']='Impression des étiquettes';
		
		$data['type_abo']=$this->edition_model->get_all_type_abonnement();
		$data['formule']=$this->abonne_model->get_all_type_abonnement();
		
		$this->form_validation->set_rules('type_abo', 'type d\'abonnement', 'required');
				
		if($this->form_validation->run())
        {
        	$data_form=$this->input->post();
			$data['prev_data']=$this->input->post();	
        	$data['list_user']=$this->impression_model->get_all_abonne_by_($data_form);
			
			$this->load->view('impression/v_impression_etiquettes_generated', $data);
			//print_r($this->input->post());
		}
		else
		{
			
			$this->load->view('template/header', $data);
			$this->load->view('impression/v_impression_etiquettes', $data);
			$this->load->view('template/footer', $data);			
			
		}	
					
				
	}

	public function etiquettes_generated()
	{
		$data=$this->data;
		
		$data['head_title']='Impression';
		$data['head_sub_title']='Impression des étiquettes';
		

		$data['list_user']=$this->impression_model->get_all_abonne_by_type_abo('all');
		
		$this->load->view('impression/v_impression_etiquettes_generated_test', $data);
	
	}

	public function etiquette_abonne()
	{
		$data=$this->data;
		
		$nb_to_decremente=$this->input->post('nb_decrem');
		$id_user=$this->input->post('id_user');
		
		$data['list_user']=$this->impression_model->get_all_abonne_by_id($id_user);
		
		$this->mail_model->update_abonnement_by_sending_news($id_user,$nb_to_decremente);
		
		
		$this->load->view('impression/v_impression_etiquettes_generated_test', $data);
	
	}
	
	function etiquettes_by_form()
	{
		
		$data=$this->data;
		
		$data['head_title']='Impression';
		$data['head_sub_title']='Impression des étiquettes';
		
		$data['formule']=$this->abonne_model->get_all_type_abonnement();
		
		$this->form_validation->set_rules('form_activation', 'form', 'required');
		// Lorsque l'on filtre
		if ($this->form_validation->run())
        {
        	// Lorsque l'on veut écrire la news
        	$data_form=$this->input->post();
			$nb_to_decremente=$this->input->post('nb_decrem');
			/*
			if($this->input->post('next_step')==1)
			{
				$this->mail_model->clean_table();
				$this->mail_model->insert_abonne_selected($data_form);
				redirect("/mailing/write_news");
			}
			*/
			//$data['abonne']=$this->abonne_model->get_all_abonne($data_form);
			$data['list_user']=$this->abonne_model->get_all_abonne($data_form);
			foreach ($data['list_user'] as $value) {
				$this->mail_model->update_abonnement_by_sending_news($value['id'],$nb_to_decremente);
			}
			
			/*
			$data['prev_data']=$this->input->post();
			
			$this->load->view('template/header', $data);
			$this->load->view('impression/v_impression_etiquettes_form', $data);			
			$this->load->view('template/footer', $data);
			 * 
			 */
			 # if(count($data['list_user'])>300)
			 if(0)
			 {
				$this->load->view('template/header', $data);
				$this->load->view('impression/v_impression_etiquettes_form', $data);
				$this->load->view('template/footer', $data);				 	
			 }
			 else 
			 {
				 $this->load->view('impression/v_impression_etiquettes_generated_test', $data); 
			 }
			   	
		}
		else 
		{
				
			$this->load->view('template/header', $data);
			$this->load->view('impression/v_impression_etiquettes_form', $data);
			$this->load->view('template/footer', $data);		
		}				
		
	}	

	public function print_etiquette_of_list()
	{
		
		$data=$this->data;

		$post_variables=$this->input->post();
		$nb_to_decrem=$post_variables['nb_decrem'];

		$data['list_user']=$this->administration_model->get_users_in_list();
		
		if(count($data['list_user'])>0)
		{
			foreach($data['list_user'] as $value)
			{
				$this->impression_model->update_abonnement_by_decrem($value['id_user'],$nb_to_decrem);
			}			
		}
		
		//log_message('error','return '.print_r($data['list'],true));
		$this->load->view('impression/v_impression_etiquettes_generated_test', $data);		
		
	}
	
	public function bordereaux()
	{
		$data=$this->data;
		//$data['list_bordereau']=$this->impression_model->get_abonnements_not_payed();
		$data['name_bordereau']="bordereau_".date('Ymd').'_'.uniqid();
		
		$this->form_validation->set_rules('nb_journaux', 'Nombre de journaux', 'required');
		$this->form_validation->set_rules('mode_paiement', 'Mode de paiement', 'required');
		
		if ($this->form_validation->run())
    	{
    		$nb_journaux=$this->input->post('nb_journaux');
			$mode_paiement=$this->input->post('mode_paiement');
			$data['list_bordereau']=$this->impression_model->get_abonnements_bordereau_not_gen($mode_paiement);
			if(isset($data['list_bordereau']['error']))
			{
				$this->session->set_flashdata('error',$data['list_bordereau']['error']);
				//log_message('error','flash data '.$data['list_bordereau']['error']);
				redirect("/impression/index");
			}
			
			$data['mode_paiement']=$mode_paiement;	
			$this->impression_model->insert_bordereau_informations($data['list_bordereau'],$data['name_bordereau']);
			$this->impression_model->update_abonnement_by_gen_bordereau($data['list_bordereau'],$nb_journaux);			
			
		}
		
		$this->load->view('impression/v_impression_bordereaux',$data);
		
	}

	public function validate_bordereau()
	{
		
		$data=$this->data;
		$data['name_bordereau']="bordereau_".date('Ymd').'_'.uniqid();
		$data['date_today']=date("m/d/Y");
		
		# $nb_journaux=$this->input->post('nb_journaux');
		$mode_paiement=$this->input->post('mode_paiement');		
		$data['name_bordereau']=$this->input->post('name_bordereau');	
		$data['list_bordereau']=$this->impression_model->get_abonnements_bordereau_not_gen($mode_paiement);
		
		$nb_cheque="";
		$prix="";
		$content = "
		<page>
			<div style='width:750px;margin-left:auto;margin-right:auto;'>
				<h2 style='text-align: center;'>Bordereau de banques - ".$mode_paiement."</h2>
				<hr>
		
				<table style='width:100%'>
					<tr>
						<td style='width:80%'>CLIENTS : 14 le Club</td>
					</tr>
					<tr></tr>
					<tr>
						<td>DATE : ".$data['date_today']."</td>
					</tr>
				</table>
				<br />
				<table style='width:100%;border-collapse: collapse;'>
					<thead>
						<tr style='border: 1px solid #000;'>
							<th style='width:20%;text-align: center;border: 1px solid #000;padding: 10px 0;'><b>N°Abonné</b></th>
							<th style='width:20%;text-align: center;border: 1px solid #000;padding: 10px 0;'><b>Banque</b></th>
							<th style='width:20%;text-align: center;border: 1px solid #000;padding: 10px 0;'><b>Adhérent</b></th>
							<th style='width:20%;text-align: center;border: 1px solid #000;padding: 10px 0;'><b>Nom tireur</b></th>
							<th style='width:20%;text-align: center;border: 1px solid #000;padding: 10px 0;'><b>Montant</b></th>
						</tr>
					</thead>
					<tbody>
						";
						
		if(isset($data['list_bordereau']))
		{
		
			// On itère sure tous les abonnements pour créer les lignes
			foreach($data['list_bordereau'] as $line)
			{
				$nb_cheque=count($data['list_bordereau']);
				$prix=$line['prix']+$prix;
				$content.="		<tr>
								<td style='width:20%;border: 1px solid #000;padding: 5px 0px 5px 5px;'>".$line['num_member']."</td>
								<td style='width:20%;border: 1px solid #000;padding: 5px 0px 5px 5px;'>".$line['lib_banque']."</td>
								<td style='width:20%;border: 1px solid #000;padding: 5px 0px 5px 5px;'>".$line['nom']."</td>
								<td style='width:20%;border: 1px solid #000;padding: 5px 0px 5px 5px;'>".$line['nom_tireur']."</td>
								<td style='width:20%;border: 1px solid #000;padding: 5px 0px 5px 5px;'>".$line['prix']." €</td>
								</tr>
						";
			}
		}								
					$content.="</tbody>
				</table>
				<br>
				<table style='width:100%;'>
					<tr>
						<td style='width:80%;'>Nombre de chèques : ".$nb_cheque."</td>
						<td style='width:20%;text-align: right;'>TOTAL : ".$prix." €</td>
					</tr>
				</table>
			</div>
		</page>
		";
 
    require_once('./assets/html2pdf_v4.03/html2pdf.class.php');
    //$html2pdf_visu = new HTML2PDF('P','A4','fr');
	$html2pdf_upload = new HTML2PDF('P','A4','fr');
    //$html2pdf_visu->WriteHTML($content);
    $html2pdf_upload->WriteHTML($content);
	$html2pdf_upload->Output('./bordereaux/'.$data['name_bordereau'].'.pdf','F');
    //$html2pdf_visu->Output(''.$name_bordereau.'.pdf');
		
		$this->impression_model->insert_bordereau_informations($data['list_bordereau'],$data['name_bordereau']);
		# $this->impression_model->update_abonnement_by_gen_bordereau($data['list_bordereau'],$nb_journaux);			
		
		redirect("/impression/index");
		
	}

	public function bordereaux_for_print()
	{
		$data=$this->data;
		$data['name_bordereau']="bordereau_".date('Ymd').'_'.uniqid();
		$data['date_today']=date("m/d/Y");
		$this->form_validation->set_rules('mode_paiement', 'Mode de paiement', 'required');
		
		if ($this->form_validation->run())
    	{
    		$nb_journaux=$this->input->post('nb_journaux');
			$mode_paiement=$this->input->post('mode_paiement');
			$data['list_bordereau']=$this->impression_model->get_abonnements_bordereau_not_gen($mode_paiement);

			$data['mode_paiement']=$mode_paiement;	
			
		}
		
		$this->load->view('impression/v_impression_bordereaux',$data);
		
	}

	public function apercu()
	{
		$data=$this->data;
		$data['name_bordereau']="bordereau_".date('Ymd').'_'.uniqid();
		$data['date_today']=date("m/d/Y");
		//$data['list_bordereau']=$this->impression_model->get_abonnements_not_payed();
		$this->form_validation->set_rules('mode_paiement', 'Mode de paiement', 'required');
		
		if ($this->form_validation->run())
    	{
			$mode_paiement=$this->input->post('mode_paiement');
			$data['mode_paiement']=$mode_paiement;	
			//$data['list_bordereau']=$this->impression_model->get_abonnements_not_payed($mode_paiement);
			$data['list_bordereau']=$this->impression_model->get_abonnements_bordereau_not_gen($mode_paiement);
			if(isset($data['list_bordereau']['error']))
			{
				$this->session->set_flashdata('error',$data['list_bordereau']['error']);
				//log_message('error','flash data '.$data['list_bordereau']['error']);
				redirect("/impression/index");
			}				
			// on ajoute une flashdata pour faire passer l'id à la fonction ajout_abonnement()
		}	
				
		$this->load->view('impression/v_impression_apercu',$data);			

	}
	
	public function download_file($file_name)
	{
		
		$this->load->helper('download');
		//log_message('error','download');
		force_download('./bordereaux/'.$file_name.'.pdf', NULL);
		
	}	
	
}	