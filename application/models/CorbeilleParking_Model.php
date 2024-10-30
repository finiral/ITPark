<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    class CorbeilleParking_Model extends CI_Model {
        
        // Constructeur
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        // Fonction pour récupérer tous les CorbeilleParkings
        public function getCorbeilleParking() {
            $query = $this->db->getAll('corbeille');
            return $query->result_array();
        }

        // Fonction pour ajouter un CorbeilleParking
        public function insertCorbeilleParking($data) {
            $this->db->insert('corbeille', $data);
        }
        
        // Fonction pour mettre à jour les informations d'un CorbeilleParking
        public function updateCorbeilleParking($id, $data) {
            $this->db->where('id_Corbeille', $id);
            $this->db->update('corbeille', $data);
        }
        
        // Fonction pour supprimer un CorbeilleParking
        public function deleteCorbeilleParking($id) {
            $this->db->where('id_Corbeille', $id);
            $this->db->delete('corbeille');
        }
        // public function getVCorbeilleParking() {
            // $query = $this->db->getAll('V_CorbeilleParking');
            // return $query->result_array();
        // }
    }

