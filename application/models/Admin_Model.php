<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
    // Constructeur
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Fonction pour récupérer tous les admins
    public function getAll() {
        $query = $this->db->get_where('utilisateur', array('status' => 0));
        return $query->result_array();
    }

    // Méthode pour calculer la recette totale d'admin
    public function getTotalRecetteAdmin($mois,$annee) {
        $this->load->model('Parking_Model');
        $parkings = $this->Parking_Model->getAll();
        
        $totalRecette = 0;
        foreach ($parkings as $parking) {
            $id_Parking = $parking['id_parking'];
            $totalRecette += $this->Parking_Model->getRecetteAdmin($mois,$annee,$id_Parking);
        }
        
        return $totalRecette;
    }

    // Fonction pour avoir la total de prevision d'un mois annee d'admin
    public function getTotalPrevision($mois,$annee){
        
    }
}

