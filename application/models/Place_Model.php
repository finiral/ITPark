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
        return $query->result();
    }
}