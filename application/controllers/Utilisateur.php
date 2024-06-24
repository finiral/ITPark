<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utilisateur extends CI_Controller
{
    public function index(){
        redirect("utilisateur/getUsers");
    }

    public function getUsers()
    {
        $this->load->model("Utilisateur_Model");
        $data["title"]="Liste Utilisateurs";
        $data["description"] = "Page de Liste Utilisateurs ITpark";
        $data["contents"] = "up_de/utilisateur";
		$data['utilisateurs'] = $this->Utilisateur_Model->getAllByEtat();
        $this->load->view("templates2/template2",$data);
    }

    public function delete($id)
    {
        echo $id;
        $this->load->model("Utilisateur_Model");
        $this->Utilisateur_Model->update_etat($id); 
        $this->getUsers();
    }

    public function redirectForm($id) {
        $this->load->model("Utilisateur_Model","umodel");
        $data["title"] = "Modification Utilisateur";
        $data["description"] = "Page de modification utilisateur ITpark";
        $data['contents'] = "insert/insert_utilisateur";
        $data['action'] = "utilisateur/updateUser";
        $data['status']=$this->umodel->getAllStatusUser();
        $data['name'] = "Modification user";
        $data['user'] = $this->umodel->getById($id);
        $this->load->view("templates/template", $data);
    }

    public function updateUser() {
        $id=$this->input->post("id");
        $identifiant=$this->input->post("identifiant");
        $mdp=$this->input->post("mdp");
        $status=$this->input->post("status");
        $data = array(
            'identifiant' => $identifiant,
            'mdp' => $mdp,
            'status' => $status
        );
        $this->load->model("Utilisateur_Model","umodel");
        $this->umodel->update($id, $data);
        $this->getUsers();
    }

    public function recherche() {
        $id=$this->input->get("id");
        $identifiant = $this->input->get("identifiant");
        $this->load->model("Utilisateur_Model","umodel");
        $data["title"] = "Liste Utilisateurs";
        $data["description"] = "Page de Liste Utilisateurs ITpark";
        $data["contents"] = "up_de/utilisateur";
        $data['utilisateurs'] = $this->umodel->searchUser($id, $identifiant);
        $this->load->view("templates2/template2",$data);
    }
}

?>