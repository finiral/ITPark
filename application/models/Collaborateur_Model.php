<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Collaborateur_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Parking_Model');
        $this->load->model('Utilisateur_Model');
    }

    // Fonction pour récupérer tous les COLLABORATEURS
    public function getAll()
    {
        $query = $this->db->get_where('utilisateur', array('status' => 1));
        return $query->result_array();
    }

    // Méthode pour obtenir les parkings d'un collaborateur
    public function getParkingsByCollaborateur($id_Utilisateur)
    {
        $query = $this->db->query("SELECT
                                    vp.id_Parking as id_parking,
                                    vp.classe_nom as classe_nom,
                                    vp.lieu_nom as lieu_nom,
                                    vp.nombre_place as nb_place,
                                    vp.prix as prix,
                                    vp.description as description
                                    FROM
                                    v_Parking vp
                                    JOIN
                                    Accessproprietaire ap ON vp.id_Parking = ap.id_Parking
                                    JOIN
                                    Utilisateur u ON ap.id_Utilisateur = u.id_Utilisateur
                                    WHERE
                                    u.id_Utilisateur = $id_Utilisateur; 
                                    ");
        return $query->result_array();
    }

    public function getParkingsByCollaborateurLike($id_Utilisateur, $nom)
    {
        // Escape the input parameters to prevent SQL injection
        $id_Utilisateur = $this->db->escape($id_Utilisateur);
        $nom = $this->db->escape_like_str($nom);

        // Construct the query
        $query = $this->db->query("SELECT
                                vp.id_Parking as id_parking,
                                vp.classe_nom as classe_nom,
                                vp.lieu_nom as lieu_nom,
                                vp.nombre_place as nb_place,
                                vp.prix as prix,
                                vp.description as description
                                FROM
                                v_Parking vp
                                JOIN
                                Accessproprietaire ap ON vp.id_Parking = ap.id_Parking
                                JOIN
                                Utilisateur u ON ap.id_Utilisateur = u.id_Utilisateur
                                WHERE
                                u.id_Utilisateur = $id_Utilisateur 
                                AND vp.lieu_nom LIKE '%$nom%';");

        // Return the result as an array
        return $query->result_array();
    }


    // Méthode pour calculer la recette totale de chaque parking pour chaque collaborateur
    public function getTotalRecetteCollaborateur($mois, $annee, $id_Utilisateur)
    {
        $this->load->model('Parking_Model');
        $parkings = $this->getParkingsByCollaborateur($id_Utilisateur);

        $totalRecette = 0;
        foreach ($parkings as $parking) {
            $id_Parking = $parking['id_parking'];
            $totalRecette += $this->Parking_Model->getRecetteCollab($mois, $annee, $id_Parking);
        }

        return $totalRecette;
    }

    // Fonction pour avoir la total de prevision d'un mois annee d'un collaborateur
    public function getTotalPrevision($mois, $annee, $idCollab)
    {
    }
}
