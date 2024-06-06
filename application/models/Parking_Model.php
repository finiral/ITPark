<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Parking_Model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data)
    {
        return $this->db->insert('Parking', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_Parking', $id);
        return $this->db->update('Parking', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_Parking', $id);
        return $this->db->delete('Parking');
    }

    public function getById($id)
    {
        $query = $this->db->get_where('Parking', array('id_Parking' => $id));
        return $query->row_array();
    }

    public function getAll()
    {
        $query = $this->db->get('Parking');
        return $query->result();
    }

    #calcul recette total du parking
    public function getRecette($mois,$idParking){
        $query=$this->db->get("GetPaiement($mois,$idParking)");
        return $query->row_array()["total_montant"];
    }

    #calcul recette du parking part du collaborateur 
    public function getRecetteCollab($mois,$idParking){
        $query=$this->db->get("GetPaiement($mois,$idParking)");
        $montant=$query->row_array()["total_montant"];
        return (40*$montant)/100;
    }

    #calcul recette du parking part de l'admin 
    public function getRecetteAdmin($mois,$idParking){
        $query=$this->db->get("GetPaiement($mois,$idParking)");
        $montant=$query->row_array()["total_montant"];
        $montant60=(60*$montant)/100;
        $res=$montant60-((16.5*$montant60)/100);
        return $res;
    }
}