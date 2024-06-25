<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->model("Parking_Model");
        $this->load->model("Place_Model");
        $this->load->model("Admin_Model");
        $this->load->model("Lieu_Model");
        $parkings = $this->Parking_Model->getInfoParkingComplet();
        $data["title"] = "Dashboard";
        $data["description"] = "Dashboard Parking ITpark";
        $data["contents"] = "dashboard";
        $data["nbUsed"] = $this->Place_Model->getCountUsed()["count_place"];
        $mps = $this->Parking_Model->getPopularParking(2023);
        $data["lsPopular"] = $mps;
        $data["mostPopular"] = $mps[0]["lieu_nom"];
        $data["mostPopularCount"] = $mps[0]["nombre_entrees"];
        $data["lieuList"] = $this->Lieu_Model->getLieuBestPaiement(2023);
        $res = 0;
        for ($i = 1; $i <= 12; $i++) {
            $res = $res + $this->Admin_Model->getTotalRecetteAdmin($i, 2023);
        }
        $data["recetteTotal"] = round($res, 2);
        $data["parkings"] = $parkings;
        $this->load->view("templates2/template2", $data);
    }

    public function parking_board()
    {
        $id = $this->input->get("idPark");
        $this->load->model("Parking_Model");
        $parkings = $this->Parking_Model->getInfoParkingComplet();
        $data["parking"] = $this->Parking_Model->getInfoParkingCompletId($id);
        $data["id"] = $id;
        $data["title"] = "Dashboard du Parking";
        $data["description"] = "Dashboard Parking ITpark";
        $data["contents"] = "parking_board";
        $res = 0;
        for ($i = 1; $i <= 12; $i++) {
            $res = $res + $this->Parking_Model->getRecetteAdmin($i,2023,$id);
        }
        $data["recetteParking"] = round($res, 2);
        $data["parkings"] = $parkings;
        $this->load->view("templates2/template2", $data);
    }

    public function beneficeAnnee($idParking = null)
    {
        $this->load->model("Admin_Model");
        $this->load->model("Parking_Model");
        $annee = $this->input->post("annee");
        $resultat = array();
        if ($idParking == null) {
            for ($i = 1; $i <= 12; $i++) {
                $resultat[$i] = $this->Admin_Model->getTotalRecetteAdmin($i, $annee);
            }
        } else {
            for ($i = 1; $i <= 12; $i++) {
                $resultat[$i] = $this->Parking_Model->getRecetteAdmin($i, $annee, $idParking);
            }
        }
        echo json_encode($resultat);
    }

    public function previsionParking($idParking)
    {
        $this->load->model("Parking_Model");
        $annee = $this->input->post("annee");
        $mois = $this->input->post("mois");
        $resultat=$this->Parking_Model->getPrevision2D($mois, $annee, $idParking);
        echo json_encode($resultat);
    }

    public function popularParking()
    {
        $this->load->model("Parking_Model");
        $annee = $this->input->post("anneepopular");
        $mois = $this->input->post("moispopular");
        $mps = null;
        if ($mois == "") {
            $mps = $this->Parking_Model->getPopularParking($annee);
        } else {
            $mps = $this->Parking_Model->getPopularParkingMois($annee, $mois);
        }
        echo json_encode($mps);
    }

    public function lieuRecette()
    {
        $this->load->model("Lieu_Model");
        $annee = $this->input->post("annee");
        $mois = $this->input->post("mois");
        $mps = null;
        if ($mois == "") {
            $mps = $this->Lieu_Model->getLieuBestPaiement($annee);
        } else {
            $mps = $this->Lieu_Model->getLieuBestPaiementMonth($annee, $mois);
        }
        echo json_encode($mps);
    }


    public function classeRevenue()
    {
        $this->load->model("Classe_Model");
        $annee = $this->input->post("annee");
        $mois = $this->input->post("mois");
        $mps = null;
        if ($mois == "") {
            $mps = $this->Classe_Model->getClasseRecette($annee);
        } else {
            $mps = $this->Classe_Model->getClasseRecetteMonth($annee, $mois);
        }
        echo json_encode($mps);
    }
    public function beneficeAnneeStatic()
    {
        $this->load->model("Admin_Model");
        $resultat = array();
        for ($i = 1; $i <= 12; $i++) {
            $resultat[$i] = $this->Admin_Model->getTotalRecetteAdmin($i, 2023);
        }
        echo json_encode($resultat);
    }
}
