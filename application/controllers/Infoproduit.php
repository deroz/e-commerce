<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Infoproduit extends CI_Controller 
{
/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function information($idProduit)
	{	
		$this->load->helper('form');
		$this->load->model('Produit_model');
		$unProduit = $this->Produit_model->findProduitBy($idProduit);
		$this->load->library('form_validation');

		$this->form_validation->set_message('required', 'Veuillez entrer un nom comportant 2 lettres minimum !');//Cette ligne permet d'afficher le message d'éreur pour le required
		$this->form_validation->set_rules('auteur','votre nom','required|min_length[2]', ['required' => 'Veuillez entrer un nom comportant 2 lettres minimum !']);

		$this->form_validation->set_message('required', 'Veuillez entrer une Note ');//Cette ligne permet d'afficher le message d'éreur pour le required
		$this->form_validation->set_rules('note','note','required|integer');

		if ($this->form_validation->run()==TRUE) 
		{
			
			
				$this->load->model('Commentaire_model');
				$dataForm=['auteur'=>$this->input->post('auteur'),
							'note'=>$this->input->post('note'),
							'contenu'=>$this->input->post('commentaire'),
							'produit_idproduit'=>$idProduit,
							'date_commentaire'=>date('Y-m-d h:i:s')];
				$this->Commentaire_model->insertCommentaire($dataForm);			
			

		}


		$this->load->view('infoproduit', ['leProduit' => $unProduit] );
	}


}