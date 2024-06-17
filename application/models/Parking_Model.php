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
 
    public function getInfoParkingComplet()
    {
        $requete = "SELECT * FROM  v_parking";
        $query = $this->db->query($requete);
         // Stockez les résultats dans un tableau
         $rep = array();
         foreach ($query->result_array() as $row) {
             $rep[] = $row;
         }
         
         return $rep;
        
    }  
    // Fonction pour avoir liste parking ordre aléatoire
    public function getRandomParkings() {
        $allParkings = $this->getInfoParkingComplet();
        // Mélanger pour obtenir un ordre aléatoire
        shuffle($allParkings);
        
        return $allParkings;
    }

    // Fonction avoir liste parking suivant des critères
    public function getParkingByCriteria($criteria = array()) {
        // Commencez par la requête de base
        $requete = "SELECT * FROM v_parking";
        $params = array();
        $conditions = false; // Flag to check if any condition is added
        // Handle multiple classes in a more scalable way
        if (isset($criteria['classes']) && is_array($criteria['classes'])) {
            $placeholders = implode(',', array_fill(0, count($criteria['classes']), '?'));
            $requete .= " WHERE classe_nom IN ($placeholders)";
            $params = array_merge($params, $criteria['classes']);
            $conditions = true;
        }
    
        if (isset($criteria['lieu_nom'])) {
            if ($conditions) {
                $requete .= " AND LOWER(lieu_nom) LIKE LOWER(?)";
            } else {
                $requete .= " WHERE LOWER(lieu_nom) LIKE LOWER(?)";
            }
            $params[] = '%' . strtolower($criteria['lieu_nom']) . '%';
            $conditions = true;
        }
    
        if (isset($criteria['prix_min'])) {
            if ($conditions) {
                $requete .= " AND prix >= ?";
            } else {
                $requete .= " WHERE prix >= ?";
            }
            $params[] = $criteria['prix_min'];
            $conditions = true;
        }
    
        if (isset($criteria['prix_max'])) {
            if ($conditions) {
                $requete .= " AND prix <= ?";
            } else {
                $requete .= " WHERE prix <= ?";
            }
            $params[] = $criteria['prix_max'];
            $conditions = true;
        }
    
        // If no conditions were added, query without WHERE clause
        if (!$conditions) {
            $requete = "SELECT * FROM v_parking";
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