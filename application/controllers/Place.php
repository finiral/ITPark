<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Place extends CI_Controller
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
    public function change()
    {
        $id_parking = $this->input->post('idparking');
        $this->load->model("Parking_Model","pmodel");
        $parking = $this->pmodel->getViewParkingById($id_parking);
        $this->load->model("Reservation_Model","rmodel");
        $reservations = $this->rmodel->getResarvationsForOneParking($id_parking);
        $this->load->model("Place_Model","plmodel");
        $places = $this->plmodel->getPlacesByParking($id_parking);
        $place_free = $this->plmodel->getPlaceFreeForOneParking($id_parking);
        $status = $this->session->userdata('status');
        $data['id']=$id_parking;
        $data['title'] = "Changement Place";
        $data['description'] = "Page de changement de place";
        $data['contents'] = "place/place_change";
        $data['parking'] = $parking;
        $data['reservations'] = $reservations;
        $data['places'] = $places;
        $data['place_free'] = $place_free;
        $data['status'] = $status;
        $this->load->view("templates/template", $data);
    }
}
