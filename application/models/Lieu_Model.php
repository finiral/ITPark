<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lieu_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data)
    {
        return $this->db->insert('lieu', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_lieu', $id);
        return $this->db->update('lieu', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_lieu', $id);
        return $this->db->delete('lieu');
    }

    public function getById($id)
    {
        $query = $this->db->get_where('lieu', array('id_lieu' => $id));
        return $query->row_array();
    }

    public function getAll()
    {
        $query = $this->db->get('lieu');
        return $query->result_array();
    }
    
}
