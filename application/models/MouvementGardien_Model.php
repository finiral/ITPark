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

        // Fonction pour ajouter un mouvement
        public function insertMouvementGardien($data) {
            $this->db->insert('mouvementgardien', $data);
        }
        
        // Fonction pour mettre à jour les informations d'un Gardien
        public function updateMovementGardien($id, $data) {
            $this->db->where('id_mouvementgardien', $id);
            $this->db->update('mouvementgardien', $data);
        }
        
        // Fonction pour supprimer un gardien
        public function deleteMovementGardien($id) {
            $this->db->where('id_mouvementgardien', $id);
            $this->db->delete('mouvementgardien');
        }
    }
