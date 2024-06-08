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
}
