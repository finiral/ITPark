<?php
defined('BASEPATH') or exit('No direct script access allowed');

class recherche extends CI_Controller
{
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
		$data['recherche'] = $this->Parking_Model->getParkingByCriteria($criteria);
		var_dump($criteria['classes']);
        $this->load->view("home/home",$data);
		
    }
}

?>