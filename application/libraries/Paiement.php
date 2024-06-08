<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paiement
{
    // Déclaration des attributs
    private $CI;
    public $id_paiement;
    public $id_parking;
    public $matricule;
    public $montant;
    public $date_paiement;
    public $numero_telephone; // Optionnel
    public $isreservation;

    // Constructeur
    public function __construct($id_paiement, $id_parking, $matricule, $montant, $date_paiement, $isreservation, $numero_telephone = null)
    {
        $this->CI = &get_instance();
        $this->CI->load->model('Paiement_Model');

        $this->id_paiement = $id_paiement;
        $this->id_parking = $id_parking;
        $this->matricule = $matricule;
        $this->montant = $montant;
        $this->date_paiement = $date_paiement;
        $this->numero_telephone = $numero_telephone;
        $this->isreservation = $isreservation;
    }

    // Getters
    public function getId_paiement()
    {
        return $this->id_paiement;
    }

    public function getId_parking()
    {
        return $this->id_parking;
    }

    public function getMatricule()
    {
        return $this->matricule;
    }

    public function getMontant()
    {
        return $this->montant;
    }

    public function getDate_paiement()
    {
        return $this->date_paiement;
    }

    public function getNumero_telephone()
    {
        return $this->numero_telephone;
    }

    public function getIsreservation()
    {
        return $this->isreservation;
    }

    // Setters
    public function setId_paiement($id_paiement)
    {
        $this->id_paiement = $id_paiement;
    }

    public function setId_parking($id_parking)
    {
        $this->id_parking = $id_parking;
    }

    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    public function setDate_paiement($date_paiement)
    {
        $this->date_paiement = $date_paiement;
    }

    public function setNumero_telephone($numero_telephone)
    {
        $this->numero_telephone = $numero_telephone;
    }

    public function setIsreservation($isreservation)
    {
        $this->isreservation = $isreservation;
    }

    // Fonctions
    public function insert()
    {
        $data = array(
            'id_parking' => $this->id_parking,
            'matricule' => $this->matricule,
            'montant' => $this->montant,
            'date_paiement' => $this->date_paiement,
            'numero_telephone' => $this->numero_telephone,
            'isreservation' => $this->isreservation
        );
        return $this->CI->Paiement_Model->insert($data);
    }

    public function update()
    {
        $data = array(
            'id_parking' => $this->id_parking,
            'matricule' => $this->matricule,
            'montant' => $this->montant,
            'date_paiement' => $this->date_paiement,
            'numero_telephone' => $this->numero_telephone,
            'isreservation' => $this->isreservation
        );
        return $this->CI->Paiement_Model->update($this->id_paiement, $data);
    }

    public function delete()
    {
        return $this->CI->Paiement_Model->delete($this->id_paiement);
    }

    public function getByid($id)
    {
        $data = $this->CI->Paiement_Model->getByid($id);
        if ($data) {
            $this->id_paiement = $data['id_paiement'];
            $this->id_parking = $data['id_parking'];
            $this->matricule = $data['matricule'];
            $this->montant = $data['montant'];
            $this->date_paiement = $data['date_paiement'];
            $this->numero_telephone = $data['numero_telephone'];
            $this->isreservation = $data['isreservation'];
        }
        return $data;
    }

    public function getAll()
    {
        $data = $this->CI->Paiement_Model->getAll();
        $paiements = array();
        foreach ($data as $item) {
            $paiements[] = new self(
                $item->id_paiement,
                $item->id_parking,
                $item->matricule,
                $item->montant,
                $item->date_paiement,
                $item->isreservation,
                $item->numero_telephone
            );
        }
        return $paiements;
    }
}
?>
