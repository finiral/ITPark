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
		$data['recherche'] = $this->Parking_Model->getParkingActu();
        $this->load->view("templates2/template_rech",$data);
    }
    public function deleteParking($id)
    {   
        $this->load->model("CorbeilleParking_Model");
        $this->load->model("Parking_Model");
        $current_date = date('Y-m-d H:i:s');
        $data=array(
            'id_parking' => $id,
            'date_suppression'=>$current_date
        );
        $this->CorbeilleParking_Model->insertCorbeilleParking($data);
        $data['recherche'] = $this->Parking_Model->getParkingActu();
        redirect("up_de/recherche");
    }
}

?>