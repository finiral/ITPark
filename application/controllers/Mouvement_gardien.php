<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mouvement_gardien extends CI_Controller
{
    public function index(){
        redirect("Mouvement_gardien/indexe");
    }

    public function indexe($gardien=0)
    {
     
        $this->load->model("Parking_Model","umodel");
        $data["title"]="Page de recherche";
        $data["guard"] = "";
        $data["type"] = "insert";
        if ($gardien != 0 ) {
            $data["guard"] = $gardien;
            $data["type"] = "update";
        }
        $data["description"] = "Page de recherche Parking ITpark";
        $data["contents"] = "insert/mouvement_gardien";
        $data["error"]="";
        $data["parking"] = [];
        $data["parking"] = $this->umodel->getParkingActu();
        $this->load->view("templates2/template2",$data);

    }

    public function insert() {
        $data["title"]="Page de recherche";
        $data["description"] = "Page de recherche Parking ITpark";
        $data["contents"] = "insert/mouvement_gardien";
        $data["error"]="";
        $date = $this->input->post("date");
        $gardien = $this->input->post("gardien");
        $parking = $this->input->post("parking");
        $type = $this->input->post("type");
        $data["type"] = $type;
        if ($date == null || $parking == null || $gardien == null){
            $data["error"]="Veuiller remplir tous les champs";
        }else{
            echo $gardien;
            $in['id_utilisateur'] = (int)$gardien;
            $in['id_parking'] = $parking;
            $in['date_mouvementgardien'] = $date;
            $this->load->model("MouvementGardien_Model","moov");
            if ($type == "insert") {
                $data['error'] = $this->moov->insertMouvementGardien($in);
                
            }else if ($type == "update"){
                $data['error'] = $this->moov->updateMovementGardien($gardien,$in);
            }
        }
        $this->load->model("Parking_Model","umodel");
        $data["parking"] = $this->umodel->getParkingActu();
        
        $this->load->view("templates2/template2",$data);
    }

    public function liste() {
        $data["title"]="Page de recherche";
        $data["description"] = "Page de recherche Parking ITpark";
        $data["contents"] = "up_de/gardien";
        $data["error"]="";
        $data["utilisateurs"] = [];
        $this->load->model("MouvementGardien_Model","umodel");
        $data["utilisateurs"] = $this->umodel->getMouvementGardien();
        $this->load->view("templates2/template2",$data);
    
    }
    // public function insert(){
    //     $data["title"]="Page de recherche";
    //     $data["description"] = "Page de recherche Parking ITpark";
    //     $data["contents"] = "insert/lieu";
       
        
        
    //     $input['nom'] = $this->input->post("nom");
    //     $input['longitude'] = $this->input->post("longitude");
    //     $input['latitude'] = $this->input->post("latitude");
    //     $data["error"] ="";
    //      if($input['nom']==null ||  $input['longitude']==null || $input['latitude'] == null ){
    //          $data["error"]="Veuiller remplir tous les champs";
             
            
    //      }
    //      else{
    //         $this->load->model("Lieu_Model","umodel");
    //         $lieu=$this->umodel->insert($input);

    //     }
    //     $this->load->view("templates2/template2",$data);
    // }

}

?>