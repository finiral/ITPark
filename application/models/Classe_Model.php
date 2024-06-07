<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Classe_Model extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insert($data){
        return $this->db->insert('classe',$data);
    }

    public function update($id,$data){
        $this->db->where('id_Classe',$id);
        return $this->db->update('classe',$data);
    }

    public function delete($id){
        $this->db->where('id_Classe',$id);
        return $this->db->delete('classe');
    }

    public function getByid($id){
        $query = $this->db->get_where('classe',array('id'=>$id));
        return $query->row_array();
    }

    public function getAll(){
    $query = $this->db->get('classe');
    return $query->result_array();
    }

}

?>