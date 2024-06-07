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
        $requete = "SELECT * FROM Parking WHERE 1=1";
        $params = array();
    
        if (isset($criteria['id_Classe'])) {
            $requete .= " AND id_Classe = ?";
            $params[] = $criteria['id_Classe'];
        }
    
        if (isset($criteria['id_Lieu'])) {
            $requete .= " AND id_Lieu = ?";
            $params[] = $criteria['id_Lieu'];
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
        $query=$this->db->get("GetPaiement($mois,$annee,$idParking)");
        return $query->row_array()["total_montant"];
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
        $sql="SELECT * from GetPlaceEnterCount($mois,$annee,$idParking) where count_mouvement=(SELECT max(count_mouvement) from GetPlaceEnterCount($mois,$annee,$idParking));";
        $query=$this->db->query($sql);
        $res=$query->row_array();
        return $res["heure"];
    }

    #recherche fin heure pointe d'un parking (heure avec le plus d'entrée)
    public function getFinHeurePointe($mois,$annee,$idParking){
        $sql="SELECT * from GetPlaceOutCount($mois,$annee,$idParking) where count_mouvement=(SELECT max(count_mouvement) from GetPlaceOutCount($mois,$annee,$idParking));";
        $query=$this->db->query($sql);
        $res=$query->row_array();
        return $res["heure"];
    }
}