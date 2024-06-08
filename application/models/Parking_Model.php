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
        return $this->db->insert('parking', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_parking', $id);
        return $this->db->update('parking', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_parking', $id);
        return $this->db->delete('parking');
    }

    public function getById($id)
    {
        $query = $this->db->get_where('parking', array('id_parking' => $id));
        return $query->row_array();
    }

    public function getAll()
    {
        $query = $this->db->get('parking');
        return $query->result_array();
    }
 
    // Fonction pour avoir liste parking ordre aléatoire
    public function getRandomParkings() {
        $allParkings = $this->getAll();
        // Mélanger pour obtenir un ordre aléatoire
        shuffle($allParkings);
        
        return $allParkings;
    }
    
    // Fonction avoir liste parking suivant des critères
    public function getParkingByCriteria($criteria = array()){
        // Commencez par la requête de base
        $requete = "SELECT * FROM parking WHERE 1=1";
        $params = array();
    
        if (isset($criteria['id_classe'])) {
            $requete .= " AND id_classe = ?";
            $params[] = $criteria['id_classe'];
        }
    
        if (isset($criteria['id_lieu'])) {
            $requete .= " AND id_lieu = ?";
            $params[] = $criteria['id_lieu'];
        }
    
        if (isset($criteria['nombre_place'])) {
            $requete .= " AND nombre_place = ?";
            $params[] = $criteria['nombre_place'];
        }
    
        if (isset($criteria['prix_min'])) {
            $requete .= " AND prix >= ?";
            $params[] = $criteria['prix_min'];
        }
    
        if (isset($criteria['prix_max'])) {
            $requete .= " AND prix <= ?";
            $params[] = $criteria['prix_max'];
        }
    
        if (isset($criteria['description'])) {
            $requete .= " AND description LIKE ?";
            $params[] = "%" . $criteria['description'] . "%";
        }
        $query = $this->db->query($requete, $params);
        
        // Stockez les résultats dans un tableau
        $rep = array();
        foreach ($query->result_array() as $row) {
            $rep[] = $row;
        }
        
        return $rep;
    }
    

    #calcul recette total du parking
    public function getRecette($mois,$annee,$idParking){
        $query=$this->db->get("getpaiement($mois,$annee,$idParking)");
        return $query->row_array()["getpaiement"];
    }

    #calcul recette du parking part du collaborateur 
    public function getRecetteCollab($mois,$annee,$idParking){
        $montant=$this->getRecette($mois,$annee,$idParking);
        return (40*$montant)/100;
    }

    #calcul recette du parking part de l'admin 
    public function getRecetteAdmin($mois,$annee,$idParking){
        $montant=$this->getRecette($mois,$annee,$idParking);
        $montant60=(60*$montant)/100;
        $res=$montant60-((16.5*$montant60)/100);
        return $res;
    }

    #recherche debut heure pointe d'un parking (heure avec le plus d'entrée)
    public function getDebutHeurePointe($mois,$annee,$idParking){
        $sql="SELECT * from getplaceentercount($mois,$annee,$idParking) where count_mouvement=(SELECT max(count_mouvement) from getplaceentercount($mois,$annee,$idParking));";
        $query=$this->db->query($sql);
        $res=$query->row_array();
        return $res["heure"];
    }

    #recherche fin heure pointe d'un parking (heure avec le plus d'entrée)
    public function getFinHeurePointe($mois,$annee,$idParking){
        $sql="SELECT * from getplaceoutcount($mois,$annee,$idParking) where count_mouvement=(SELECT max(count_mouvement) from getplaceoutcount($mois,$annee,$idParking));";
        $query=$this->db->query($sql);
        $res=$query->row_array();
        return $res["heure"];
    }

    #fonction qui reserve
    public function reserver($dataResa,$dataPaiement){
        $this->CI->load->model('Reservation_Model');
        $this->CI->load->model('Paiement_Model');

        $this->Reservation_Model->insert($dataResa);
        $this->Paiement_Model->insert($dataPaiement);
    }
}