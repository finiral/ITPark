<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index(){
        $this->load->model("Parking_Model");
        $parkings=$this->Parking_Model->getInfoParkingComplet();
        $data["title"]="Dashboard";
        $data["description"] = "Dashboard Parking ITpark";
        $data["contents"] = "dashboard";
        $data["parkings"]=$parkings;
        $this->load->view("templates2/template2",$data);
    }

    public function beneficeAnnee(){
        $this->load->model("Admin_Model");
        $annee=$this->input->post("annee");
        $resultat=array();
        for($i=1;$i<=12;$i++){
            $resultat[$i]=$this->Admin_Model->getTotalRecetteAdmin($i,$annee);
        }
        echo json_encode($resultat);
    }
    public function beneficeAnneeStatic(){
        $this->load->model("Admin_Model");
        $resultat=array();
        for($i=1;$i<=12;$i++){
            $resultat[$i]=$this->Admin_Model->getTotalRecetteAdmin($i,2023);
        }
        echo json_encode($resultat);
    }
}

?>