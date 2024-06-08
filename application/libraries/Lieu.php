<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lieu
{
    private $CI;
    public $id_Lieu;
    public $nom;
    public $longitude;
    public $latitude;
    


    public function __construct($id_Lieu,$nom,$longitude,$latitude)
    {
        $this->CI = &get_instance();
        $this->CI->load->model('Lieu_Model');

        $this->id_Lieu = $id_Lieu;
        $this->nom=$nom;
        $this->longitude=$longitude;
        $this->latitude=$latitude;
        
        
    }

    // Getters
    public function getIdLieu(){
        return $this->id_Lieu;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getLongitude(){
        return $this->longitude;
    }
    public function getLatitude(){
        return $this->latitude;
    }
    
    //Setters
    public function setIdLieu($id_Lieu){
         $this->id_Lieu=$id_Lieu;
    }
    public function setNom($nom){
         $this->nom=$nom;
    }
    public function setLongitude($longitude){
         $this->longitude=$longitude;
    }
    public function setLatitude($latitude){
         $this->latitude=$latitude;
    }
    
    // Method to insert a new lieu
    public function insert()
    {


        $data = array(
            'nom' => $this->nom,
            'longitude' =>$this->longitude,
            'latitude' =>$this->latitude
            

        );

        return $this->CI->Lieu_Model->insert($data);
    }

    // Method to update an existing lieu
    public function update()
    {
        $data = array(
            'nom' => $this->nom,
            'longitude' =>$this->longitude,
            'latitude' =>$this->latitude,
            

        );

        return $this->CI->Lieu_Model->update($this->id_Lieu, $data);
    }

    // Method to delete a lieu
    public function delete()
    {
        return $this->CI->Lieu_Model->delete($this->id_Lieu);
    }

    // Method to get a lieu by ID
    public function getById($id_Lieu)
    {
        $lieu = $this->CI->Lieu_Model->getById($id_Lieu);
        if ($lieu) {
            $this->id_Lieu = $lieu['id_Lieu'];
            $this->nom = $lieu['nom'];
            $this->longitude=$lieu['longitude'];
            $this->latitude=$lieu['latitude'];
            

        }
        return $lieu;
    }

    // Method to get all lieus
    public function getAll()
    {
        return $this->CI->Lieu_Model->get_all();
    }
}
