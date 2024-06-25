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
        return $this->db->insert('place', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_place', $id);
        return $this->db->update('place', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_place', $id);
        return $this->db->delete('place');
    }

    public function getById($id)
    {
        $query = $this->db->get_where('place', array('id_place' => $id));
        return $query->row_array();
    }

    public function getAll()
    {
        $query = $this->db->get('place');
        return $query->result_array();
    }
        
    // Fonction pour changer le statut de la place
    public function changeState($id, $state) {
        $this->db->set('status', $state);
        $this->db->where('id_place', $id);
        $this->db->update('place');
    }

    // Fonction qui récupère tout les places libre pour un parking donné
        public function getPlaceFreeForOneParking($id_parking) {     
            $query = $this->db->query("SELECT * FROM getplacefreeforoneparking(?)", array($id_parking));
            if ($query && $query->num_rows() > 0) {
                return $query->result_array();
            }
            return array();
        }
        

    // vaovao
    // Fonction qui récupère toutes les places d'une parking donnée
    public function getPlacesByParking($id_parking) {
        $query = $this->db->get_where('place', array('id_parking' => $id_parking));
        return $query->result_array();
    }

    // Fonction qui prend le mouvement le plus récent de la matricule
    public function getMouvement($matricule, $status)
    {
        $this->db->select('date_heure_mouvementplace');
        $this->db->from('mouvementplace');
        $this->db->where('matricule', $matricule);
        $this->db->where('status', $status);
        $this->db->order_by('date_heure_mouvementplace', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();

        return $query->row_array();
    }

    // Prends la durée de stationnement de la matricule lorsqu'il sort
    public function getDureeStationnement($matricule)
    {
        $heureEntree = $this->getMouvement($matricule, 1);
        if (!$heureEntree) {
            return null;
        }

        $heureSortie = $this->getMouvement($matricule, 0);
        if (!$heureSortie) {
            return null;
        }

        $dateEntree = strtotime($heureEntree['date_heure_mouvementplace']);
        $dateSortie = strtotime($heureSortie['date_heure_mouvementplace']);

        $duree = $dateSortie - $dateEntree;
        $dureeMinutes = floor($duree / 60);

        return $dureeMinutes;
    }

    // Prends le prix du parking
    public function getPrix($idParking)
    {
        $this->db->select('prix');
        $this->db->from('parking');
        $this->db->where('id_parking', $idParking);
        $query = $this->db->get();
        $result = $query->row_array();

        if ($result) {
            return $result['prix'];
        } else {
            return null; 
        }
    }

    // Calcul montant a payer d'une matricule lorqu'il sort
    public function getMontantApayer($matricule,$id_Parking)
    {
        $duree = $this->getDureeStationnement($matricule);
        if ($duree === null) {
            return null; 
        }

        $tarif = $this->getPrix($id_Parking);
        if ($tarif === null) {
            return null; 
        }

        $dureeTotaleEnHeures = $duree / 60;
        $montantApayer = $dureeTotaleEnHeures * $tarif;

        return $montantApayer;
    }
    
    //fonction qui recupere les id_place d'un parking en fonction du numero  place
    public function getPlace($id_parking, $numero_place) {
        $query = $this->db->query('SELECT get_place(?, ?) as place_id', array($id_parking, $numero_place));
        $result = $query->row_array(); 
        return $result['place_id']; 
    } 
}