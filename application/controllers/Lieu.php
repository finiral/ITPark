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
        $data['nom'] = "";
        $data['latitude'] = "";
        $data['longitude'] = "";
        $data["mode"] = "insert";
        $data["id"] = "";
        // var_dump($data);
		// $data['recherche'] = $this->Parking_Model->getParkingByCriteria($criteria);
        $this->load->view("templates2/template2",$data);
    }
    public function insert(){

        $data["title"]="Page de recherche";
        $data["description"] = "Page de recherche Parking ITpark";
        $data["contents"] = "insert/lieu";
        $input['nom'] = $this->input->post("nom");
        $input['longitude'] = $this->input->post("longitude");
        $input['latitude'] = $this->input->post("latitude");
        $mode = $this->input->post("mode");

        $data["error"] ="";
         if($input['nom']==null ||  $input['longitude']==null || $input['latitude'] == null ){
             $data["error"]="Veuiller remplir tous les champs";
             $data['nom'] = "";
             $data['latitude'] = "";
             $data['longitude'] = "";
             $data["id"] = "";
             if ($mode == "insert") {
                $data['nom'] = $this->input->post("nom");
                $data['latitude'] = $this->input->post("longitude");
                $data['longitude'] = $this->input->post("latitude");
                $data["id"] = $this->input->post("id");
             }
         }
         else{

            $this->load->model("Lieu_Model","umodel");
            if($mode == "insert") {
                $lieu=$this->umodel->insert($input);
            } else {
                $id = $this->input->post("id");            
                $lieu=$this->umodel->update($id,$input);
                $data['nom'] = "";
                $data['latitude'] = "";
                $data['longitude'] = "";
                $data["id"] = "";
            }

        }
        $data["mode"] = "insert";
        $this->load->view("templates2/template2",$data);
    }
    public function liste(){
        $data["title"]="Page de recherche";
        $data["description"] = "Page de recherche Parking ITpark";
        $data["contents"] = "up_de/lieu";
        $data["error"]="";
        $this->load->model("Lieu_Model");
        $data['lieu'] = $this->Lieu_Model->getAll();
        $this->load->view("templates2/template2",$data);
    }

    public function update($id){
        $data["title"]="Page de recherche";
        $data["description"] = "Page de recherche Parking ITpark";
        $data["contents"] = "insert/lieu";
        $data["error"]="";
        $data["mode"] = "update";
        $this->load->model("Lieu_Model");
        $donne = $this->Lieu_Model->getById($id);
        $data["nom"] = $donne['nom'];
        $data["longitude"] = $donne['longitude'];
        $data["latitude"] = $donne["latitude"];
        $data["id"] = $id;
        $this->load->view("templates2/template2",$data);
    }

    public function delete($id){
        $this->load->model("Lieu_Model");
        $this->Lieu_Model->delete($id); 
        $this->liste();
    }
}

?>