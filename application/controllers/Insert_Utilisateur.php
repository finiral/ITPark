<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insert_Utilisateur extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        $this->load->model("Utilisateur_Model","umodel");
        $data["title"] = "Insertion Utilisateur";
        $data["description"] = "Page d'insertion utilisateur ITpark";
        $data['contents']="insert/insert_utilisateur";
        $data['action']="insert_utilisateur/insertUser";
        $data['status']=$this->umodel->getAllStatusUser();
        $data['name']="User";
        $this->load->view("templates/template", $data);
    }

    public function insertUser(){
        $identifiant=$this->input->post("identifiant");
        $mdp=$this->input->post("mdp");
        $status=$this->input->post("status");
        $data = array(
            'identifiant' => $identifiant,
            'mdp' => $mdp,
            'status' => $status
        );
        $this->load->model("Utilisateur_Model","umodel");
        $this->umodel->insert($data);
        redirect("utilisateur/getUsers");
    }
}
