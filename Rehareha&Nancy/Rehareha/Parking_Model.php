<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Parking_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Accessproprietaire_Model');
    }

    public function index()
    {
        $data['parkings'] = $this->Accessproprietaire_Model->getParkings();
        $this->load->view('parking_view', $data);
    }

    public function getRecette($mois,$id_Parking)
    {
        $query=$this->db->get("GetPaiement($mois,$id_Parking)");
        return $query->row_array()["total_montant"];
    }

    public function getRecetteCollab($mois,$id_Parking){
        $query=$this->db->get("GetPaiement($mois,$id_Parking)");
        $montant=$query->row_aray()["ttal_montant"];
        return (40*$montant)/100;
    }

    public function getRecetteAdmin($mois,$id_Parking){
        $query=$this->db->get("GetPaiement($mois,$id_Parking)");
        $montant=$query->row_array()["total_montant"];
        $montant60=(60*$montant)/100;
        $res=$montant60-((16.5*$montant60)/100);
        return $res;
    }

    // Récupérer tous les parkings
    public function getAll()
    {
        $query = $this->db->get('Parking');
        return $query->result();
    }

    // Récupérer un parking par son id
    public function getById($id)
    {
        $query = $this->db->get_where('Parking', array('id_Parking' => $id));
        return $query->row();
    }

    // Insertion d'un parking
    public function insert($data)
    {
        return $this->db->insert('Parking', $data);
    }

    // Mise à jour d'un parking
    public function update($id, $data)
    {
        $this->db->where('id_Parking', $id);
        return $this->db->update('Parking', $data);
    }

    // Suppression d'un parking
    public function delete($id)
    {
        $this->db->where('id_Parking', $id);
        return $this->db->delete('Parking');
    }
}
?>
