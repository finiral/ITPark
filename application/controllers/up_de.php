<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Up_de extends CI_Controller
{
    public function index(){
        redirect("up_de/recherche");
    }

    public function recherche()
    {
        $this->load->model("Parking_Model");
		
        // $localisation= $this->input->get('localisation');
       /* $min = $this->input->get('min');
        $max = $this->input->get('max');*/
        
             
       /* $classes=array();
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
        } */
        $data["title"]="Page de recherche";
        $data["description"] = "Page de recherche Parking ITpark";
        $data["contents"] = "up_de/parking";
		$data['recherche'] = $this->Parking_Model->getAllVParking();
        $this->load->view("templates2/template_rech",$data);
    }
}

?>