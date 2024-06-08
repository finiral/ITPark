<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accessproprietaire_Model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('accessproprietaire');
        return $query->result_array();
    }

    public function getById($id)
    {
        $query = $this->db->get_where('accessproprietaire', array('id_accessproprietaire' => $id));
        return $query->row_array();
    }

    public function insert($data)
    {
        return $this->db->insert('accessproprietaire', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_accessproprietaire', $id);
        return $this->db->update('accessproprietaire', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_accessproprietaire', $id);
        return $this->db->delete('accessproprietaire');
    }


    //get_Parkings_By_IdParking via lirairies 
    public function getByIdParking($id_Parking)
    {
        $query = $this->db->get_where('accessproprietaire', array('id_parking' => $id_Parking));
        return $query->row_array();
    }

    public function getParkings()
    {
        $this->db->select('accessproprietaire.id_parking, parking.id_lieu, parking.prix');
        $this->db->from('parking');
        $this->db->join('accessproprietaire', 'accessproprietaire.id_parking = parking.id_parking');
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>
