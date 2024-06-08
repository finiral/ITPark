<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utilisateur
{
    private $id_Utilisateur;
    private $identifiant;
    private $mdp;
    private $status;
    protected $CI;

    public function __construct($id_Utilisateur = null, $identifiant = null, $mdp = null, $status = null)
    {
        // Récupérer l'instance de l'objet CodeIgniter
        $this->CI = &get_instance();
        $this->CI->load->model('Utilisateur_Model');

        $this->id_Utilisateur = $id_Utilisateur;
        $this->identifiant = $identifiant;
        $this->mdp = $mdp;
        $this->status = $status;
    }

    public function get_Id_Utilisateur()
    {
        return $this->id_Utilisateur;
    }

    public function get_Identifiant()
    {
        return $this->identifiant;
    }

    public function get_Mdp()
    {
        return $this->mdp;
    }

    public function get_Status()
    {
        return $this->status;
    }

    public function set_Id_Utilisateur($id_Utilisateur)
    {
        $this->id_Utilisateur = $id_Utilisateur;
    }

    public function set_Identifiant($identifiant)
    {
        $this->identifiant = $identifiant;
    }

    public function set_Mdp($mdp)
    {
        $this->mdp = $mdp;
    }

    public function set_Status($status)
    {
        if (in_array($status, [0, 1, 2])) {
            $this->status = $status;
        } else {
            throw new InvalidArgumentException('Invalid status value. It must be 0, 1, or 2.');
        }
    }

    /* Liste des utilisateurs */
    public function getAllUtilisateurs()
    {
        return $this->CI->Utilisateur_Model->getAll();
    }

    /* Récupérer un utilisateur par son id */
    public function getUtilisateurById($id)
    {
        return $this->CI->Utilisateur_Model->getById($id);
    }

    /* Récupérer un utilisateur par son identifiant, mot de passe et statut */
    public function getUtilisateurByNamePwdType($identifiant, $mdp, $status)
    {
        return $this->CI->Utilisateur_Model->getByNamePwdType($identifiant, $mdp, $status);
    }

    /* Insertion Utilisateur */
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
        return $this->CI->Utilisateur_Model->insert($data);
    }

    /* Mise à jour Utilisateur */
    public function updateUtilisateur()
    {
        if (!in_array($this->status, [0, 1, 2])) {
            throw new InvalidArgumentException('Invalid status value. It must be 0, 1, or 2.');
        }

        $data = array(
            'identifiant' => $this->identifiant,
            'mdp' => $this->mdp,
            'status' => $this->status
        );
        return $this->CI->Utilisateur_Model->update($this->id_Utilisateur, $data);
    }

    /* Suppression Utilisateur */
    public function deleteUtilisateur($id)
    {
        return $this->CI->Utilisateur_Model->delete($id);
    }

}
?>
