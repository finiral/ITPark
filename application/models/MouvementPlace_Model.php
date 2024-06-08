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
        return $this->db->insert('mouvementplace', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_mouvementplace', $id);
        return $this->db->update('mouvementplace', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_mouvementplace', $id);
        return $this->db->delete('mouvementplace');
    }

    public function getById($id)
    {
        $query = $this->db->get_where('mouvementplace', array('id_mouvementplace' => $id));
        return $query->row_array();
    }

    public function getAll()
    {
        $query = $this->db->get('mouvementplace');
        return $query->result_array();
    }
}