<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accessproprietaire_Model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('Accessproprietaire');
        return $query->result();
    }

    public function getById($id)
    {
        $query = $this->db->get_where('Accessproprietaire', array('id_Accessproprietaire' => $id));
        return $query->row();
    }

    public function insert($data)
    {
        return $this->db->insert('Accessproprietaire', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_Accessproprietaire', $id);
        return $this->db->update('Accessproprietaire', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_Accessproprietaire', $id);
        return $this->db->delete('Accessproprietaire');
    }


    //get_Parkings_By_IdParking via lirairies 
    public function getByIdParking($id_Parking)
    {
        $query = $this->db->get_where('Accessproprietaire', array('id_Parking' => $id_Parking));
        return $query->result();
    }

    public function getParkings()
    {
        $this->db->select('accessproprietaire.id_Parking, parking.id_Lieu, parking.prix');
        $this->db->from('parking');
        $this->db->join('accessproprietaire', 'accessproprietaire.id_Parking = parking.id_Parking');
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>
