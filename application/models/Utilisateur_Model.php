<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utilisateur_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Récupérer tous les utilisateurs
    public function getAll()
    {
        $query = $this->db->get('utilisateur');
        return $query->result();
    }

    public function getParkings($id_user)
    {
    $this->db->select('accessproprietaire.id_parking, parking.id_parking, parking.id_classe, parking.id_lieu, parking.nombre_place, parking.prix, parking.description');
    $this->db->from('parking');
    $this->db->join('accessproprietaire', 'accessproprietaire.id_parking = parking.id_parking');
    $this->db->where('accessproprietaire.id_utilisateur', $id_user);
    $query = $this->db->get();
    return $query->result_array();
    }


    // Récupérer un utilisateur par son id
    public function getById($id)
    {
        $query = $this->db->get_where('utilisateur', array('id_utilisateur' => $id));
        return $query->row_array();
    }

    //Récuperer un utilisateur avec sont nom , mdp, et status 
    public function getByNamePwdType($identifiant, $mdp, $status)
    {
        $query = $this->db->get_where('utilisateur', array(
            'identifiant' => $identifiant,
            'mdp' => md5($mdp),
            'status' => $status
        ));
        return $query->row_array();
    }

    // vaovao
    // Fonction pour récupérer tous les utilisateurs présents
    public function getAllByEtat()
    {
        $query = $this->db->get_where('utilisateur', array('etat' => 1));
        return $query->result_array();
    }

    // Insertion d'un utilisateur
    public function insert($data)
    {
        // Vérification du champ status
        if (in_array($data['status'], [0, 1, 2])) {
            return $this->db->insert('utilisateur', $data);
        } else {
            throw new InvalidArgumentException('Invalid status value. It must be 0, 1, or 2.');
        }
    }

    public function addUtilisateur()
    {
        if (!in_array($this->status, [0, 1, 2])) {
            throw new InvalidArgumentException('Invalid status value. It must be 0, 1, or 2.');
        }

        $data = array(
            'identifiant' => $this->identifiant,
            'mdp' => $this->mdp,
            'status' => $this->status
        );
        return $this->insert($data);
    }

    // Mise à jour d'un utilisateur
    public function update($id, $data)
    {
        // Vérification du champ status
        if (in_array($data['status'], [0, 1, 2])) {
            $this->db->where('id_utilisateur', $id);
            return $this->db->update('utilisateur', $data);
        } else {
            throw new InvalidArgumentException('Invalid status value. It must be 0, 1, or 2.');
        }
    }

    // Suppression d'un utilisateur
    public function delete($id)
    {
        $this->db->where('id_utilisateur', $id);
        return $this->db->delete('utilisateur');
    }

    // vaovao
    // Modification de l'état de l'utilisateur(mbola ao sa tsia)
    public function update_etat($id) {
        $this->db->where('id_utilisateur', $id);
        return $this->db->update('utilisateur', array('etat' => 0));
    }

    // vaovao
    // Recherche utilisateur(s) à partir de son id et de son identifiant
    public function searchUser($id, $identifiant) {
        $this->db->where('etat', 1);
        if (!empty($id)) {
            $this->db->like('cast(id_utilisateur as text)', $id);
        }
        if (!empty($identifiant)) {
            $this->db->like('identifiant', $identifiant);
        }
        $query = $this->db->get('utilisateur');
        return $query->result_array();
    }

    // vaovoa
    // Récupération des status des utilisateurs
    public function getAllStatusUser() {
        $query = $this->db->get('status_utilisateur');
        return $query->result_array();
    }
}
?>
