<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classe extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Classe_Model');  
        $this->load->library('form_validation');
    }

    public function index(){
        redirect(site_url("Classe/indexe"));
    }

    public function indexe(){
        $data["title"] = "Page de recherche";
        $data["description"] = "Page de recherche Parking ITpark";
        $data["contents"] = "insert/class";
        $this->load->view("templates2/template2", $data);
    }

    public function insert(){
        $intitule = $this->input->post('intitule');
        $data["title"] = "Page de recherche";
        $data["description"] = "Page de recherche Parking ITpark";
        $data["contents"] = "insert/class";
        
        $this->form_validation->set_rules('intitule', 'Intitule', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view("templates2/template2", $data);
        } else {
            $data = array('intitule' => $intitule);
            $this->Classe_Model->insert($data);
            $this->index();
        }
    }
}
?>
