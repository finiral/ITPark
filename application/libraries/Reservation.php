<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produit
{
    private $CI;
    public $id_Reservation;
    public $id_Parking;
    public $id_Place;
    public $numero_telephone;
    public $date_heure_reservation;
    public $duree;


    public function __construct($id_Reservation,$id_Parking,$id_Place,$numero_telephone,$date_heure_reservation,$duree)
    {
        $this->CI = &get_instance();
        $this->CI->load->model('Reservation_Model');

        $this->id_Reservation = $id_Reservation;
        $this->id_Parking=$id_Parking;
        $this->id_Place=$id_Place;
        $this->numero_telephone=$numero_telephone;
        $this->date_heure_reservation=$date_heure_reservation;
        $this->duree=$duree;
        
    }

    // Getters
    public function getIdReservation(){
        return $this->id_Reservation;
    }
    public function getIdParking(){
        return $this->id_Parking;
    }
    public function getIdPlace(){
        return $this->id_Place;
    }
    public function getNumeroTelephone(){
        return $this->numero_telephone;
    }
    public function getDateHeureReservation(){
        return $this->date_heure_reservation;
    }
    public function getDuree(){
        return $this->duree;
    }
    //Setters
    public function setIdReservation($id_Reservation){
         $this->id_Reservation=$id_Reservation;
    }
    public function setIdParking($id_Parking){
         $this->id_Parking=$id_Parking;
    }
    public function setIdPlace($id_Place){
         $this->id_Place=$id_Place;
    }
    public function setNumeroTelephone($numero_telephone){
         $this->numero_telephone=$numero_telephone;
    }
    public function setDateHeureReservation($date_heure_reservation){
         $this->date_heure_reservation=$date_heure_reservation;
    }
    public function setDuree($duree){
         $this->duree=$duree;
    }
    // Method to insert a new reservation
    public function insert()
    {


        $data = array(
            'id_Parking' => $this->id_Parking,
            'id_Place' =>$this->id_Place,
            'numero_telephone' =>$this->numero_telephone,
            'date_heure_reservation'=>$this->date_heure_reservation,
            'duree'=>$this->duree

        );

        return $this->CI->Reservation_Model->insert($data);
    }

    // Method to update an existing reservation
    public function update()
    {
        $data = array(
            'id_Parking' => $this->id_Parking,
            'id_Place' =>$this->id_Place,
            'numero_telephone' =>$this->numero_telephone,
            'date_heure_reservation'=>$this->date_heure_reservation,
            'duree'=>$this->duree

        );

        return $this->CI->Reservation_Model->update($this->id_Reservation, $data);
    }

    // Method to delete a reservation
    public function delete()
    {
        return $this->CI->Reservation_Model->delete($this->id_Reservation);
    }

    // Method to get a reservation by ID
    public function getById($id_Reservation)
    {
        $reservation = $this->CI->Reservation_Model->getById($id_Reservation);
        if ($reservation) {
            $this->id_Reservation = $reservation['id_Reservation'];
            $this->id_Parking = $reservation['id_Parking'];
            $this->id_Place=$reservation['id_Place'];
            $this->numero_telephone=$reservation['numero_telephone'];
            $this->duree=$reservation['duree'];

        }
        return $reservation;
    }

    // Method to get all reservations
    public function getAll()
    {
        return $this->CI->Reservation_Model->get_all();
    }
}
