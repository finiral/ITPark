<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservation_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data)
    {
        return $this->db->insert('reservation', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_reservation', $id);
        return $this->db->update('reservation', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_reservation', $id);
        return $this->db->delete('reservation');
    }

    public function getById($id)
    {
        $query = $this->db->get_where('reservation', array('id_reservation' => $id));
        return $query->row_array();
    }

    public function getAll()
    {
        $query = $this->db->get('reservation');
        return $query->result();
    }
    public function reserver($data){
        
        return $this->insert($data);
    }

    // vaovao
    // Fonction qui récupère toutes les réservations d'une parking
    public function getResarvationsForOneParking($id_parking) {  
        $query = $this->db->query("SELECT * FROM getresarvationsforoneparking(?)", array($id_parking));
        return $query->result_array();
    }
    
    
    ///fonction insertReservation,insert mouvement place,update place 
    public function insertReservation($idParking, $idPlace, $numeroTelephone, $dateHeureReservation, $duree, $matricule)
    {
        $sql = "SELECT InsertReservation(?, ?, ?, ?, ?, ?)";
        $params = array($idParking, $idPlace, $numeroTelephone, $dateHeureReservation, $duree, $matricule);
        return $this->db->query($sql, $params);
    }
}
