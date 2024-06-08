<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Paiement_Model extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insert($data){
        return $this->db->insert('paiement',$data);
    }

    public function update($id,$data){
        $this->db->where('id_paiement',$id);
        return $this->db->update('paiement',$data);
    }

    public function delete($id){
        $this->db->where('id_paiement',$id);
        return $this->db->delete('paiement');
    }

    public function getByid($id){
        $query = $this->db->get_where('paiement',array('id'=>$id));
        return $query->row_array();
    }

    public function getAll(){
    $query = $this->db->get('paiement');
    return $query->result_array();
    }

}

?>