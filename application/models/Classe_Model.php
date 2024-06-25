<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Classe_Model extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insert($data){
        return $this->db->insert('classe',$data);
    }

    public function update($id,$data){
        $this->db->where('id_classe',$id);
        return $this->db->update('classe',$data);
    }

    public function delete($id){
        $this->db->where('id_classe',$id);
        return $this->db->delete('classe');
    }

    public function getByid($id){
        $query = $this->db->get_where('classe',array('id_classe'=>$id));
        return $query->row_array();
    }

    public function getAll(){
    $query = $this->db->get('classe');
    return $query->result_array();
    }

    public function getClasseRecette($annee){
        $query=$this->db->query("SELECT
                                    c.intitule AS classe_nom,
                                    SUM(pai.montant) AS total_revenue
                                FROM
                                    Paiement pai
                                JOIN
                                    Parking p ON pai.id_Parking = p.id_Parking
                                JOIN
                                    Classe c ON p.id_Classe = c.id_Classe
                                WHERE
                                    EXTRACT(YEAR FROM pai.date_Paiement) = $annee
                                GROUP BY
                                    c.intitule
                                ORDER BY
                                    total_revenue DESC;
");
        return $query->result_array();
    }

}

?>