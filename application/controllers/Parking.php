<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Parking extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        if($this->session->userdata("user")==null || $this->session->userdata("user")["status"]!=3){
            redirect("accueil/index");
        }
    }
    public function index()
    {
        redirect("parking/indexe");
    }

    public function indexe()
    {
        $this->load->model("Classe_Model");
        $this->load->model("Lieu_Model");
        
        $data["title"] = "Page de recherche";
        $data["description"] = "Page de recherche Parking ITpark";
        $data["contents"] = "insert/parking";
        $data["error"] = "";
        
        $data['classe'] = $this->Classe_Model->getAll();
        $data['lieu'] = $this->Lieu_Model->getAll();
        
        $this->load->view("templates2/template2", $data);
    }

    public function insert()
    {
        $this->load->model("Classe_Model");
        $this->load->model("Lieu_Model");
        
        $data["title"] = "Page de recherche";
        $data["description"] = "Page de recherche Parking ITpark";
        $data["contents"] = "insert/parking";
        $data["error"] = "";

        $data['classe'] = $this->Classe_Model->getAll();
        $data['lieu'] = $this->Lieu_Model->getAll();

        $input['id_classe'] = $this->input->post("classe");
        $input['id_lieu'] = $this->input->post("lieu");
        $input['nombre_place'] = $this->input->post("nombre_place");
        $input['prix'] = $this->input->post("prix");
        $input['description'] = $this->input->post("description");

        if ($input['id_classe'] == null || $input['id_lieu'] == null || $input['nombre_place'] == null || $input['prix'] == null || $input['description'] == null) {
            $data["error"] = "Veuillez remplir tous les champs";
        } else {
            $this->load->model("Parking_Model");
            $parking = $this->Parking_Model->insert($input);
            if ($parking) {
                $data["error"] = "Insertion réussie";
            } else {
                $data["error"] = "Erreur d'insertion";
            }
        }

        $this->load->view("templates2/template2", $data);
    }
}
?>
