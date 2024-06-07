<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Place_Model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data)
    {
        return $this->db->insert('Place', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_Place', $id);
        return $this->db->update('Place', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_Place', $id);
        return $this->db->delete('Place');
    }

    public function getById($id)
    {
        $query = $this->db->get_where('Place', array('id_Place' => $id));
        return $query->row_array();
    }

    public function getAll()
    {
        $query = $this->db->get('Place');
        return $query->result_array();
    }
        
    // Fonction pour changer le statut de la place
    public function changeState($id, $state) {
        $this->db->set('status', $state);
        $this->db->where('id', $id);
        $this->db->update('Place');
    }

    // Fonction qui récupère tout les places libre pour un parking donné
        // Fonction dans la database
    public function getPlaceFreeForOneParking($id_parking) {     
        $query = $this->db->query("SELECT * FROM GetPlaceFreeForOneParking(?)", array($id_parking));
        return $query->result();
    }
}