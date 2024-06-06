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

    public function getIdParking()
    {
        return $this->id_Parking;
    }

    public function getIdClasse()
    {
        return $this->id_Classe;
    }

    public function getIdLieu()
    {
        return $this->id_Lieu;
    }

    public function getNombrePlace()
    {
        return $this->nombre_place;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setIdParking($id_Parking)
    {
        $this->id_Parking = $id_Parking;
    }

    public function setIdClasse($id_Classe)
    {
        $this->id_Classe = $id_Classe;
    }

    public function setIdLieu($id_Lieu)
    {
        $this->id_Lieu = $id_Lieu;
    }

    public function setNombrePlace($nombre_place)
    {
        $this->nombre_place = $nombre_place;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    /* Liste des parkings */
    public function get_All_Parkings()
    {
        return $this->CI->Parking_Model->getAll();
    }

    /* Récupérer un parking par son id */
    public function get_Parking_By_Id($id)
    {
        return $this->CI->Parking_Model->getById($id);
    }

    /* Insertion Parking */
    public function insert()
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
    public function update()
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
    public function delete($id)
    {
        return $this->CI->Parking_Model->delete($id);
    }
}
?>
