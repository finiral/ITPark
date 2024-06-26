<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paiement extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Paiement_Model');  
        $this->load->model('Parking_Model');  
        $this->load->model('Place_Model');  
        $this->load->model('Reservation_Model');  
        $this->load->model('MouvementPlace_Model');  
        $this->load->library('form_validation');
    }

    public function index()
    {
        redirect(site_url("accueil/recherche"));
    }

    public function indexe(){
        $data["title"] = "Page de paiement";
        $data["description"] = "Page de paiement pour ITpark";
        $data["contents"] = "insert/paiement";
        $data["idparking"] = $this->input->post('idparking');
        $data["numero_place"] = $this->input->post('numero_place');
        $data["action"] = $this->input->post('action');
        $this->load->view("templates2/template2", $data);
    }
    public function redirectGaurdian($idgardien = 0){
        $this->load->model("MouvementGardien_Model","mvmodel");
        $gardien=$this->mvmodel->getMouvementGardienById($idgardien);
        $this->session->set_userdata('status', 1);
        $this->session->set_userdata('guard',$idgardien);
        redirect("place/change?idparking=".$gardien['id_parking']);
    }
    public function insert() {
        // Affiche toutes les données POST pour vérifier leur contenu(debug)
        /*
        echo '<pre>';
        print_r($this->input->post());
        echo '</pre>';
        */
        $numero = $this->input->post('numero');
        $immatriculation = $this->input->post('immatriculation');
        $date = $this->input->post('date');
        $duree = $this->input->post('duree');
        $idparking = $this->input->post('idparking'); 
        $numero_place = $this->input->post('numero_place');
        $action = $this->input->post('action');
    
        $this->form_validation->set_rules('numero', 'Numero', 'required|numeric');
        $this->form_validation->set_rules('immatriculation', 'Immatriculation', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('duree', 'Duree', 'required|numeric');
        $this->form_validation->set_rules('numero_place', 'Numero de place', 'required|numeric');
        $stat=$this->session->userdata('status');
        if ($this->form_validation->run() == FALSE) {
            $data["title"] = "Page de paiement";
            $data["description"] = "Page de paiement pour ITpark";
            if (is_null($stat) ) {
                $data["contents"] = "insert/paiement";
            } else {
                $gardien=$this->session->userdata('guard');
                if(!is_null($gardien)){
                // echo $gardien;
                    $this->redirectGaurdian($gardien);
                }
            }

            $this->load->view("templates2/template2", $data);
        }else {
            $prix_parking = $this->Parking_Model->getPrixById($idparking);
            $montant_total = $this->Paiement_Model->calculMontant($duree, $idparking); 
            $idPlace = $this->Place_Model->getPlace($idparking, $numero_place);
            
            $data_paiement = array(
                'id_parking' => $idparking,
                'matricule' => $immatriculation,
                'montant' => $montant_total,
                'date_paiement' => $date,
                'numero_telephone' => $numero,
                'isreservation' => 1
            );
            $gardien=$this->session->userdata('guard');

            $this->Paiement_Model->insert($data_paiement);
            $date_heure_reservation = date('Y-m-d H:i:s');
            if ($action == "rsrv") {
                $this->Reservation_Model->insertReservation($idparking, $idPlace, $numero, $date_heure_reservation, $duree, $immatriculation);
            } else {
                $input = [];
                $input['id_parking'] = $idparking;
                $input['id_place'] = $idPlace;
                $input['matricule'] = $immatriculation;
                $input['date_heure_mouvementplace'] = $date;
                $input['status'] = 0;
                $this->MouvementPlace_Model->insert($input);
                $this->Place_Model->changeState($idPlace , 0);
            }

            $parking = $this->Parking_Model->getInfoParkingCompletId($idparking);
            $data['numero'] = $numero;
            $data['immatriculation'] = $immatriculation;
            $data['parking_lieu'] = $parking["lieu_nom"];;
            $data['prix_parking'] = $prix_parking;
            $data['numero_place'] = $numero_place;
            $data['duree'] = $duree;
            $data['montant_total'] = $montant_total;
            $data['date'] = $date;
            $data["title"] = "Page de paiement";
            $data["description"] = "Page de paiement pour ITpark";
            $data["contents"] = "recue/recu";

            $this->load->view("templates2/template2",$data);
        }
    }  
}
?>
