<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Parking_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data)
    {
        $this->db->insert('parking', $data);
        $id = $this->db->insert_id();
        return $id;
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

    // vaovao
    public function getViewParkingById($id)
    {
        $query = $this->db->get_where('v_parking', array('id_parking' => $id));
        return $query->row_array();
    }

    public function getAll()
    {
        $query = $this->db->get('parking');
        return $query->result_array();
    }

    public function getAllVParking()
    {
        $query= $this->db->get('v_parking');
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
    
    public function getInfoParkingCompletId($idParking)
    {
        $requete = "SELECT * FROM  v_parking where id_parking=$idParking";
        $query = $this->db->query($requete);
         // Stockez les résultats dans un tableau
         if ($query->row_array()) {
             return $query->row_array();
         }
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
    public function getRecette($mois, $annee, $idParking)
    {
        $res = $this->db->get("getpaiement($mois,$annee,$idParking)");
        return $res->row_array()["getpaiement"];
    }

    #calcul recette du parking part du collaborateur 
    public function getRecetteCollab($mois, $annee, $idParking)
    {
        $montant = $this->getRecette($mois, $annee, $idParking);
        return (40 * $montant) / 100;
    }

    #calcul recette du parking part de l'admin 
    public function getRecetteAdmin($mois, $annee, $idParking)
    {
        $montant = $this->getRecette($mois, $annee, $idParking);
        $montant60 = (60 * $montant) / 100;
        $res = $montant60 - ((16.5 * $montant60) / 100);
        return $res;
    }

    #recherche debut heure pointe d'un parking (heure avec le plus d'entrée)
    public function getDebutHeurePointe($mois, $annee, $idParking)
    {
        $sql = "SELECT * from getplaceentercount($mois,$annee,$idParking) where count_mouvement=(SELECT max(count_mouvement) from getplaceentercount($mois,$annee,$idParking));";
        $query = $this->db->query($sql);
        $res = $query->row_array();
        return $res["heure"];
    }

    #recherche fin heure pointe d'un parking (heure avec le plus d'entrée)
    public function getFinHeurePointe($mois, $annee, $idParking)
    {
        $sql = "SELECT * from getplaceoutcount($mois,$annee,$idParking) where count_mouvement=(SELECT max(count_mouvement) from getplaceoutcount($mois,$annee,$idParking));";
        $query = $this->db->query($sql);
        $res = $query->row_array();
        return $res["heure"];
    }

    #fonction qui reserve
    public function reserver($dataResa, $dataPaiement)
    {
        $this->load->model('Reservation_Model');
        $this->load->model('Paiement_Model');

        $this->Reservation_Model->insert($dataResa);
        $this->Paiement_Model->insert($dataPaiement);
    }

    public function getVariation($mois, $annee, $idParking)
    {
        $recette1 = $this->getRecette($mois, $annee - 1, $idParking);
        $recette2 = $this->getRecette($mois, $annee - 2, $idParking);
        $moyenne = ($recette1 + $recette2) / 2;
        $recette = $this->getRecette($mois, $annee, $idParking);
        return $recette / $moyenne;
    }

    public function getMoyenneVariation($mois, $annee, $idParking)
    {
        $moisfor = 1;
        $variance = 0;
        while ($moisfor <= $mois) {
            $variance = $variance + $this->getVariation($moisfor, $annee, $idParking);
            $moisfor = $moisfor + 1;
        }
        return $variance / ($moisfor - 1);
    }

    #fonction calcul de prevision d'un {mois,annee}
    #TO-DO after : getPrevisionAdmin & getPrevisionCollab

    public function prepareRecette2D($idParking)
    {
        $this->load->model("Paiement_Model");
        $res = array(array());
        $moisAnnee = $this->Paiement_Model->getMostRecent($idParking);
        $mois = $moisAnnee["mois"];
        $an = $moisAnnee["annee"];
        for ($a = $an - 2; $a <= $an; $a++) {
            $mfinal = 12;
            if ($a == $an) {
                $mfinal = $mois;
            }
            for ($m = 1; $m <= $mfinal; $m++) {
                $res[$a][$m] = $this->getRecette($m, $a, $idParking);
            }
        }
        return $res;
    }

    public function getPrevision2D($moisTarget, $anneeTarget, $idParking)
    {
        $this->load->model("Paiement_Model");
        $moisAnnee = $this->Paiement_Model->getMostRecent($idParking);
        $mois = $moisAnnee["mois"];
        $an = $moisAnnee["annee"];
        $moyenneVariation = $this->getMoyenneVariation($mois, $an, $idParking);
        echo "VARIATION : $moyenneVariation\n";
        ///PREPARATION DU TABLEAU
        $tab = $this->prepareRecette2D($idParking);
        while ($an <= $anneeTarget) {
            $mfinal = 12;
            $mdebut = $mois + 1;
            if ($an != $moisAnnee["annee"]) {
                $mdebut = 1;
            }
            if ($an == $anneeTarget) {
                $mfinal = $moisTarget;
            }
            for ($m = $mdebut; $m <= $mfinal; $m++) {
                $moyenne = ($tab[$an - 1][$m] + $tab[$an - 2][$m]) / 2;
                
                $tab[$an][$m] = $moyenne * $moyenneVariation;
            }
            $an++;
        }
        return $tab;
    }
    public function getParkingActu()
    {
        $requete = "SELECT * FROM  v_parkingActu";
        $query = $this->db->query($requete);
         // Stockez les résultats dans un tableau
         $rep = array();
         foreach ($query->result_array() as $row) {
             $rep[] = $row;
         }
         
         return $rep;  
    }

    public function getPopularParking($annee){
        $query=$this->db->query("SELECT
                                        p.id_Parking,
                                        p.lieu_nom AS lieu_nom,
                                        p.classe_nom as classe_nom,
                                        p.description,
                                        COUNT(mp.id_Mouvementplace) AS nombre_entrees
                                    FROM
                                        v_parking p
                                    JOIN
                                        MouvementPlace mp ON p.id_Parking = mp.id_Parking
                                    WHERE
                                        mp.status = 1 -- 1 indicates entry
                                        AND EXTRACT(YEAR FROM mp.date_Heure_MouvementPlace) = $annee
                                    GROUP BY
                                        p.id_Parking,
                                        p.lieu_nom,
                                        p.description,
                                        p.classe_nom
                                    ORDER BY
                                        nombre_entrees DESC;");
        return $query->result_array();
    }

    public function getPopularParkingMois($annee,$mois){
        $query=$this->db->query("SELECT
                                        p.id_Parking,
                                        p.lieu_nom AS lieu_nom,
                                        p.classe_nom as classe_nom,
                                        p.description,
                                        COUNT(mp.id_Mouvementplace) AS nombre_entrees
                                    FROM
                                        v_parking p
                                    JOIN
                                        MouvementPlace mp ON p.id_Parking = mp.id_Parking
                                    WHERE
                                        mp.status = 1 -- 1 indicates entry
                                        AND EXTRACT(YEAR FROM mp.date_Heure_MouvementPlace) = $annee 
                                        AND EXTRACT(MONTH FROM mp.date_Heure_MouvementPlace) = $mois
                                    GROUP BY
                                        p.id_Parking,
                                        p.lieu_nom,
                                        p.description,
                                        p.classe_nom
                                    ORDER BY
                                        nombre_entrees DESC;");
        return $query->result_array();
    }

    public function getPrixById($idParking) {
        $query = $this->db->select('prix')->get_where('parking', array('id_parking' => $idParking));
        $result = $query->row_array();
        return isset($result['prix']) ? $result['prix'] : 0;
    }
    
}
