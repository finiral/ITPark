<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Collaborateur extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        if($this->session->userdata("user")==null || $this->session->userdata("user")["status"]==1){
            redirect("accueil/index");
        }
    }


    public function index()
    {
        $this->load->model("Parking_Model");
        $this->load->model("Collaborateur_Model");
        $this->load->model("Utilisateur_Model");
        $id=$this->session->userdata("user")["id_utilisateur"];
        $parkings=$this->Collaborateur_Model->getParkingsByCollaborateur($id);
        $total=0;
        for($i=0;$i<count($parkings);$i++){
            $parkings[$i]["recette"]=0;
            for($j=1;$j<=12;$j++){
                $parkings[$i]["recette"]+=$this->Parking_Model->getRecetteCollab($j,2023,$id);
            }
        }
        for($i=0;$i<count($parkings);$i++){
            $total+=$parkings[$i]["recette"];
        }
        $data["title"] = "Partenaire";
        $data["description"] = "Dashboard Parking ITpark";
        $data["contents"] = "collab";
        $data["recetteTotal"] = round($total, 2);
        $data["parkings"] = $parkings;
        $this->load->view("templates2/template2", $data);
    }

    public function recherche()
    {
        $nom=$this->input->get("nom");
        $this->load->model("Parking_Model");
        $this->load->model("Collaborateur_Model");
        $this->load->model("Utilisateur_Model");
        $id=$this->session->userdata("user")["id_utilisateur"];
        $parkingss=$this->Collaborateur_Model->getParkingsByCollaborateurLike($id,$nom);
        $parkings=$this->Collaborateur_Model->getParkingsByCollaborateur($id);
        $total=0;
        for($i=0;$i<count($parkingss);$i++){
            $parkingss[$i]["recette"]=0;
            for($j=1;$j<=12;$j++){
                $parkingss[$i]["recette"]+=$this->Parking_Model->getRecetteCollab($j,2023,$id);
            }
        }
        for($i=0;$i<count($parkings);$i++){
            $parkings[$i]["recette"]=0;
            for($j=1;$j<=12;$j++){
                $parkings[$i]["recette"]+=$this->Parking_Model->getRecetteCollab($j,2023,$id);
            }
        }
        for($i=0;$i<count($parkings);$i++){
            $total+=$parkings[$i]["recette"];
        }
        $data["title"] = "Partenaire";
        $data["description"] = "Dashboard Parking ITpark";
        $data["contents"] = "collab";
        $data["recetteTotal"] = round($total, 2);
        $data["parkings"] = $parkingss;
        $this->load->view("templates2/template2", $data);
    }

}