<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Recue extends CI_Controller
{
    public function index()
    {
        redirect("recue/indexe");
    }

    public function indexe()
    {
        $this->load->model("Classe_Model");
        $this->load->model("Lieu_Model");
        
        $data["title"] = "Page de recherche";
        $data["description"] = "Page de recherche Parking ITpark";
        $data["contents"] = "recue/recu";
        $data["error"] = "";
                
        $this->load->view("templates2/template2", $data);
    }


}
?>
