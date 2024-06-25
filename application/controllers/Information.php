<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Information extends CI_Controller
{
    public function index(){
        redirect("information/parking");
    }

    public function parking($idParking)
{
    $this->load->model("Parking_Model");
    $this->load->model("Place_Model");

    $data["nblibre"] = count($this->Place_Model->getPlaceFreeForOneParking($idParking));
    $parking = $this->Parking_Model->getInfoParkingCompletId($idParking);
    $places = $this->Place_Model->getPlaceFreeForOneParking($idParking);
    $data['numeros_places'] = array_column($places, 'numero_place');
    $data["title"] = "Information du parking";
    $data["description"] = "Page d'informations d'un parking";
    $data["contents"] = "information/information";
    $data["id"] = $parking["id_parking"];
    $data["prix"] = $parking["prix"];
    $data["lieu"] = $parking["lieu_nom"];
    $data["classe"] = $parking["classe_nom"];
    $data["debutpointe"] = $this->Parking_Model->getDebutHeurePointe(6, 2023, $idParking);
    $data["finpointe"] = $this->Parking_Model->getFinHeurePointe(6, 2023, $idParking);

    $this->load->view("templates2/template2", $data);
}

}

?>
