<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    class MouvementGardien_Model extends CI_Model {
        
        // Constructeur
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }
        
        // Fonction pour récupérer tous les mouvements des gardiens
        public function getMouvementGardien() {
            $query = $this->db->get('mouvementgardien');
            return $query->result_array();
        }

        public function getMouvementGardienById($id){
            // echo $id;
            $query = $this->db->get_where('mouvementgardien', array('id_utilisateur' => $id));
            return $query->row_array();
        }

        // Fonction pour ajouter un mouvement
        public function insertMouvementGardien($data) {
            if ($this->db->insert('mouvementgardien', $data)) {
                return "Insertion successful."; 
            }
            else {
                return "Insertion failed.";
            }
        }
        
        // Fonction pour mettre à jour les informations d'un Gardien
        public function updateMovementGardien($id, $data) {
            $this->db->where('id_mouvementgardien', $id);
            if ($this->db->update('mouvementgardien', $data)) {
                return "Update successful.";
            }
            else {
                return "Update failed.";
            }
        }
        
        // Fonction pour supprimer un gardien
        public function deleteMovementGardien($id) {
            $this->db->where('id_mouvementgardien', $id);
            $this->db->delete('mouvementgardien');
        }
    }
