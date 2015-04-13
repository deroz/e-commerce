<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Marque_model extends CI_Model 
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
	
	public function findAllMarque()
	{
		$requete=$this->db->query('SELECT * FROM marque');
		$resultat = $requete->result('Marque_model');//result = fetchAll
		return $resultat;
		
		die('class Marque');
		var_dump('Marque_model');
	}
	
}