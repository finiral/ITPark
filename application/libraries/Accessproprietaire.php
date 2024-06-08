<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accessproprietaire
{
    private $id_Accessproprietaire;
    private $id_Utilisateur;
    private $id_Parking;
    protected $CI;

    public function __construct($id_Accessproprietaire = null, $id_Utilisateur = null, $id_Parking = null)
    {
        // Récupérer l'instance de l'objet CodeIgniter
        $this->CI = &get_instance();
        $this->CI->load->model('Accessproprietaire_Model');

        $this->id_Accessproprietaire = $id_Accessproprietaire;
        $this->id_Utilisateur = $id_Utilisateur;
        $this->id_Parking = $id_Parking;
    }

    public function Get_Id_Accessproprietaire()
    {
        return $this->id_Accessproprietaire;
    }

    public function get_Id_Utilisateur()
    {
        return $this->id_Utilisateur;
    }

    public function get_Id_Parking()
    {
        return $this->id_Parking;
    }

    public function set_Id_Accessproprietaire($id_Accessproprietaire)
    {
        $this->id_Accessproprietaire = $id_Accessproprietaire;
    }

    public function set_Id_Utilisateur($id_Utilisateur)
    {
        $this->id_Utilisateur = $id_Utilisateur;
    }

    public function set_Id_Parking($id_Parking)
    {
        $this->id_Parking = $id_Parking;
    }

    /* Liste des Accessproprietaires */
    public function getAllAccessproprietaires()
    {
        return $this->CI->Accessproprietaire_Model->getAll();
    }

    /* Récupérer un Accessproprietaire par son id */
    public function getAccessproprietaireById($id)
    {
        return $this->CI->Accessproprietaire_Model->getById($id);
    }

    /* Insertion Accessproprietaire */
    public function addAccessproprietaire()
    {
        $data = array(
            'id_Utilisateur' => $this->id_Utilisateur,
            'id_Parking' => $this->id_Parking
        );
        return $this->CI->Accessproprietaire_Model->insert($data);
    }

    /* Mise à jour Accessproprietaire */
    public function updateAccessproprietaire()
    {
        $data = array(
            'id_Utilisateur' => $this->id_Utilisateur,
            'id_Parking' => $this->id_Parking
        );
        return $this->CI->Accessproprietaire_Model->update($this->id_Accessproprietaire, $data);
    }

    /* Suppression Accessproprietaire */
    public function DeleteAccessproprietaire($id)
    {
        return $this->CI->Accessproprietaire_Model->delete($id);
    }

    /* Récupérer les parkings par id_Parking */
    public function getParkingsByIdParking($id_Parking)
    {
        $accessproprietaires = $this->CI->Accessproprietaire_Model->getByIdParking($id_Parking);
        $parkings = [];
        foreach ($accessproprietaires as $accessproprietaire) {
            $parkings[] = $this->CI->Parking_Model->getById($accessproprietaire->id_Parking);
        }
        return $parkings;
    }
}
?>
