<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class MouvementPlace_Model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data)
    {
        return $this->db->insert('MouvementPlace', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_MouvementPlace', $id);
        return $this->db->update('MouvementPlace', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_MouvementPlace', $id);
        return $this->db->delete('MouvementPlace');
    }

    public function getById($id)
    {
        $query = $this->db->get_where('MouvementPlace', array('id_MouvementPlace' => $id));
        return $query->row_array();
    }

    public function getAll()
    {
        $query = $this->db->get('MouvementPlace');
        return $query->result();
    }
}