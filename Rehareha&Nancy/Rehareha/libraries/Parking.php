<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Parking
{
    private $id_Parking;
    private $id_Classe;
    private $id_Lieu;
    private $nombre_place;
    private $prix;
    private $description;
    protected $CI;

    public function __construct($id_Parking = null, $id_Classe = null, $id_Lieu = null, $nombre_place = null, $prix = null, $description = null)
    {
        // Récupérer l'instance de l'objet CodeIgniter
        $this->CI = &get_instance();
        $this->CI->load->model('Parking_Model');

        $this->id_Parking = $id_Parking;
        $this->id_Classe = $id_Classe;
        $this->id_Lieu = $id_Lieu;
        $this->nombre_place = $nombre_place;
        $this->prix = $prix;
        $this->description = $description;
    }

    public function get_Id_Parking()
    {
        return $this->id_Parking;
    }

    public function get_Id_Classe()
    {
        return $this->id_Classe;
    }

    public function get_Id_Lieu()
    {
        return $this->id_Lieu;
    }

    public function get_Nombre_Place()
    {
        return $this->nombre_place;
    }

    public function get_Prix()
    {
        return $this->prix;
    }

    public function get_Description()
    {
        return $this->description;
    }

    public function set_Id_Parking($id_Parking)
    {
        $this->id_Parking = $id_Parking;
    }

    public function set_Id_Classe($id_Classe)
    {
        $this->id_Classe = $id_Classe;
    }

    public function set_Id_Lieu($id_Lieu)
    {
        $this->id_Lieu = $id_Lieu;
    }

    public function set_Nombre_Place($nombre_place)
    {
        $this->nombre_place = $nombre_place;
    }

    public function set_Prix($prix)
    {
        $this->prix = $prix;
    }

    public function set_Description($description)
    {
        $this->description = $description;
    }

    /* Liste des parkings */
    public function getAllParkings()
    {
        return $this->CI->Parking_Model->getAll();
    }

    /* Récupérer un parking par son id */
    public function getParkingById($id)
    {
        return $this->CI->Parking_Model->getById($id);
    }

    /* Insertion Parking */
    public function addParking()
    {
        $data = array(
            'id_Classe' => $this->id_Classe,
            'id_Lieu' => $this->id_Lieu,
            'nombre_place' => $this->nombre_place,
            'prix' => $this->prix,
            'description' => $this->description
        );
        return $this->CI->Parking_Model->insert($data);
    }

    /* Mise à jour Parking */
    public function updateParking()
    {
        $data = array(
            'id_Classe' => $this->id_Classe,
            'id_Lieu' => $this->id_Lieu,
            'nombre_place' => $this->nombre_place,
            'prix' => $this->prix,
            'description' => $this->description
        );
        return $this->CI->Parking_Model->update($this->id_Parking, $data);
    }

    /* Suppression Parking */
    public function deleteParking($id)
    {
        return $this->CI->Parking_Model->delete($id);
    }
}
?>
