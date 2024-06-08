<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    class Gardien_Model extends CI_Model {
        
        // Constructeur
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        // Fonction pour récupérer tous les gardiens
        public function getGardien() {
            $query = $this->db->get_where('utilisateur', array('status' => 2));
            return $query->result_array();
        }

        // Fonction pour ajouter un gardien
        public function insertGardien($data) {
            $this->db->insert('utilisateur', $data);
        }
        
        // Fonction pour mettre à jour les informations d'un Gardien
        public function updateGardien($id, $data) {
            $this->db->where('id_utilisateur', $id);
            $this->db->update('utilisateur', $data);
        }
        
        // Fonction pour supprimer un gardien
        public function deleteGardien($id) {
            $this->db->where('id_utilisateur', $id);
            $this->db->delete('utilisateur');
        }
    }

