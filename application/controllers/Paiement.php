<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paiement extends CI_Controller
{
    public function index(){
        $id=$this->input->post("idparking");
        $data["title"]="Information du parking";
        $data["id"]=$id;
        $data["description"] = "Page d'informations d'un parking";
        $data["contents"] = "paiement/paiement";
        $this->load->view("templates2/template2",$data);
    }
}

?>