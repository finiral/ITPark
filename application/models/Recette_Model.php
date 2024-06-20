<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Recette_Model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data)
    {
        return $this->db->insert('recette', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_recette', $id);
        return $this->db->update('recette', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_recette', $id);
        return $this->db->delete('recette');
    }

    public function getById($id)
    {
        $query = $this->db->get_where('recette', array('id_recette' => $id));
        return $query->row_array();
    }

    public function getByMoisAnnee($idParking,$mois,$annee)
    {
        $data= array(
            'id_parking'=>$idParking,
            'mois' => $mois,
            'annee'=>$annee
        );
        $query = $this->db->get_where('recette',$data);
        return $query->row_array();
    }

    public function getAll()
    {
        $query = $this->db->get('recette');
        return $query->result_array();
    }
    public function addPrevision($mois,$annee,$idParking,$montant)
    {
        $data=array(
            'id_parking'=>$idParking,
            'mois'=>$mois,
            'annee'=>$annee,
            'montant'=>$montant,
            'status'=>0
        );
        return $this->db->insert('recette', $data);
        
    }
    public function getLastMonth($annee,$idParking)
    {
        $where=array(
            'id_parking'=>$idParking,
            'annee'=>$annee,
            'status'=>1
        );
        $query = $this->db->get_where('recette',$where);
        $res=$query->row_array();
        return $res['mois'];
    }
    public function deletePrevision($idParking)
    {   $data=array(
        'id_parking'=>$idParking,
        'status'=>0
        );
        $this->db->where('id_parking', $idParking);
        return $this->db->delete('recette',$data);
    }
}