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
    public function redirectForm($id)
    {
        $this->load->model("Parking_Model");
        $this->load->model("Classe_Model");
        $this->load->model("Lieu_Model");
        $data["title"] = "Modification Parking";
        $data["description"] = "Page de modification parking ITpark";
        $data['contents'] = "insert/parking";
        $data['action'] = "up_de/updateParking";  
        $data['parking'] = $this->Parking_Model->getById($id);      
        $data['classe'] = $this->Classe_Model->getAll();
        $data['lieu'] = $this->Lieu_Model->getAll();
        $data['button'] = "Modifier";
        $this->load->view("templates2/template2", $data);
    }
    public function updateParking()
    {        
        $id=$this->input->post("id");
        $id_classe=$this->input->post("classe");
        $id_lieu=$this->input->post("lieu");
        $nombre_place=$this->input->post("nombre_place");
        $prix=$this->input->post("prix");
        $description=$this->input->post("description");
        $data = array(
            'id_classe'=>$id_classe,
            'id_lieu'=>$id_lieu,
            'nombre_place'=>$nombre_place,
            'prix'=>$prix,
            'description'=>$description,
        );
        $this->load->model("Parking_Model","pmodel");
        $this->pmodel->update($id, $data);
        $this->recherche();
    }
}

?>