<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Collaborateur_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Parking_Model');
        $this->load->model('Utilisateur_Model');
    }
    // Méthode pour obtenir les parkings d'un collaborateur
    public function getParkingsByCollaborateur($id_Utilisateur) {
        $this->db->select('id_parking');
        $this->db->from('accessproprietaire');
        $this->db->where('id_utilisateur', $id_Utilisateur);
        $query = $this->db->get();
        return $query->result_array();
    }

    // Méthode pour calculer la recette totale de chaque parking pour chaque collaborateur
    public function getTotalRecetteCollaborateur($mois,$annee, $id_Utilisateur) {
        $this->load->model('Parking_Model');
        $parkings = $this->getParkingsByCollaborateur($id_Utilisateur);
        
        $totalRecette = 0;
        foreach ($parkings as $parking) {
            $id_Parking = $parking['id_parking'];
            $totalRecette += $this->Parking_Model->getRecetteCollab($mois,$annee,$id_Parking);
        }
        
        return $totalRecette;
    }

}
?>