<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accueil extends CI_Controller
{
    public function index(){
        redirect("accueil/recherche");
    }

    public function recherche()
    {
        $this->load->model("Parking_Model");
		
        $localisation= $this->input->get('localisation');
        $min = $this->input->get('min');
        $max = $this->input->get('max');
        
             
        $classes=array();
        $classes= $this->input->get('classe'); 
		$criteria = array(
			'classes' =>  $classes,
            'lieu_nom' => $localisation
		);
        if (!empty($min)) {
            $criteria['prix_min'] = (string) $min;
        }
        
        if (!empty($max)) {
            $criteria['prix_max'] = (string) $max;
        } 
        $data["title"]="Page de recherche";
        $data["description"] = "Page de recherche Parking ITpark";
        $data["contents"] = "home/home";
		$data['recherche'] = $this->Parking_Model->getParkingByCriteria($criteria);
        $this->load->view("templates2/template_rech",$data);
    }
}

?>