<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lieu extends CI_Controller
{
    public function index(){
        redirect("lieu/indexe");
    }

    public function indexe()
    {
       
        $data["title"]="Page de recherche";
        $data["description"] = "Page de recherche Parking ITpark";
        $data["contents"] = "insert/lieu";
        $data["error"]="";
		// $data['recherche'] = $this->Parking_Model->getParkingByCriteria($criteria);
        $this->load->view("templates2/template2",$data);
    }
    public function insert(){
        $data["title"]="Page de recherche";
        $data["description"] = "Page de recherche Parking ITpark";
        $data["contents"] = "insert/lieu";
       
        
        
        $input['nom'] = $this->input->post("nom");
        $input['longitude'] = $this->input->post("latitude");
        $input['latitude'] = $this->input->post("latitude");
        $data["error"] ="";
         if($input['nom']==null ||  $input['longitude']==null || $input['latitude'] == null ){
             $data["error"]="Veuiller remplir tous les champs";
             
            
         }
         else{
            $this->load->model("Lieu_Model","umodel");
            $lieu=$this->umodel->insert($input);

        }
        $this->load->view("templates2/template2",$data);
    }

}

?>