<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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
        redirect("login/admin");
    }

    public function admin()
    {
        $data["title"] = "Login Admin";
        $data["description"] = "Page de login Admin ITpark";
        $data["contents"] = "login/login";
        $data["nomLogin"] = "Admin";
        $data["redirect"]="admin";
        $data["status"] = 0;
        $this->load->view("templates/template", $data);
    }

    public function collaborateur()
    {
        $data["title"] = "Login Collaborateur";
        $data["description"] = "Page de login Collaborateur ITpark";
        $data["contents"] = "login/login";
        $data["nomLogin"] = "Partner";
        $data["redirect"]="collaborateur";
        $data["status"] = 1;
        $this->load->view("templates/template", $data);
    }

    public function gardien()
    {
        $data["title"] = "Login Gardien";
        $data["description"] = "Page de login Gardien ITpark";
        $data["contents"] = "login/login";
        $data["nomLogin"] = "Gardien";
        $data["redirect"]="gardien";
        $data["status"] = 2;
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
            redirect("accueil/recherche");
        }
    }
}
