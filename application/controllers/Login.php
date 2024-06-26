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

    public function redirectGaurdian($idgardien = 0){
        $this->load->model("MouvementGardien_Model","mvmodel");
        $gardien=$this->mvmodel->getMouvementGardienById($idgardien);
        $this->session->set_userdata('status', 1);
        $this->session->set_userdata('guard',$idgardien);
        redirect("place/change?idparking=".$gardien['id_parking']);
    }

    public function checkLogin(){
        $identifiant=$this->input->post("identifiant");
        $mdp=$this->input->post("mdp");
        $status=$this->input->post("status");
        $redirect=$this->input->post("redirect");
        $this->load->model("Utilisateur_Model","umodel");
        $user=$this->umodel->getByNamePwdTypeS($identifiant,$mdp);

        if ($user['status']==1) {
            $redirect = "gardien";
        } else if ($user['status']== 2){
            $redirect = "collaborateur";
        } else if ($user['status']==3){
            $redirect = "admin";
        }
        // echo $user['status'];

        if($user==null){
            redirect("login/$redirect");
        }
        else{
            if($user["status"]==2){
                redirect("dashboard/index");
            } else if($user["status"]==1) {            
                $this->redirectGaurdian($user['id_utilisateur']);
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
