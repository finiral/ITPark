<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        redirect("login/admin");
    }

    public function admin()
    {
        $data["title"] = "Login Admin";
        $data["description"] = "Page de login Admin ITpark";
        $data["contents"] = "login/login";
        $data["nomLogin"] = "Admin";
        $data["redirect"]="admin";
        $data["status"] = 3;
        $this->load->view("templates/template", $data);
    }

    public function collaborateur()
    {
        $data["title"] = "Login Collaborateur";
        $data["description"] = "Page de login Collaborateur ITpark";
        $data["contents"] = "login/login";
        $data["nomLogin"] = "Partner";
        $data["redirect"]="collaborateur";
        $data["status"] = 2;
        $this->load->view("templates/template", $data);
    }

    public function gardien()
    {
        $data["title"] = "Login Gardien";
        $data["description"] = "Page de login Gardien ITpark";
        $data["contents"] = "login/login";
        $data["nomLogin"] = "Gardien";
        $data["redirect"]="gardien";
        $data["status"] = 1;
        $this->load->view("templates/template", $data);
    }

    public function checkLogin(){
        $identifiant=$this->input->post("identifiant");
        $mdp=$this->input->post("mdp");
        $status=$this->input->post("status");
        $redirect=$this->input->post("redirect");
        $this->load->model("Utilisateur_Model","umodel");
        $user=$this->umodel->getByNamePwdType($identifiant,$mdp,$status);
        if($user==null){
            redirect("login/$redirect");
        }
        else{
            if($user["status"]==3){
                redirect("dashboard/index");
            }
            else{
                redirect("accueil/recherche");
            }
            
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect("accueil/recherche");
    }
}
