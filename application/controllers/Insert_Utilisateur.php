<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insert_Utilisateur extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        if($this->session->userdata("user")==null || $this->session->userdata("user")["status"]!=3){
            redirect("accueil/index");
        }
    }
    
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
