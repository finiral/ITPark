<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Classe
{
    private $id_classe;
    private $intitule;

    // Constructeur
    public function __construct($id_classe = null, $intitule = null)
    {
        $this->CI = &get_instance();
        $this->CI->load->model('Classe_Model');

        $this->id_classe = $id_classe;
        $this->intitule = $intitule;
    }

    // Getter pour id_classe
    public function getIdclasse()
    {
        return $this->id_classe;
    }

    // Setter pour id_classe
    public function setIdclasse($id_classe)
    {
        $this->id_classe = $id_classe;
    }

    // Getter pour intitule
    public function getIntitule()
    {
        return $this->intitule;
    }

    // Setter pour intitule
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    }

    //functions

    public function insert()
    {
        $data = array(
            'intitule' => $this->intitule
        );
        return $this->CI->Classe_Model->insert($data);
    }

    public function update()
    {
        $data = array(
            'intitule' => $this->intitule
        );
        return $this->CI->Classe_Model->update($this->id_classe,$data);
    }

    public function delete()
    {
        return $this->CI->Classe_Model->delete($this->id_classe);
    }

    public function getByid($id)
    {
        return $this->CI->Classe_Model->getByid($id);
        if ($data) {
             $this->id_classe = $data['id_classe'];
             $this->intitule = $data['intitule'];
            }
        return $data;
    }

    public function getAll()
    {
        $data = $this->CI->Classe_Model->getAll();
        $classes = array();
        foreach ($data as $item) {
             $classes[] = new self(
                 $item->id_Classe,
                 $item->intitule,
             );
         }
         return $classes;
     }
}
