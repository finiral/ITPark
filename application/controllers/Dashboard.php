<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index(){
        $data["title"]="Dashboard";
        $data["description"] = "Dashboard Parking ITpark";
        $data["contents"] = "dashboard";
        $this->load->view("templates2/template2",$data);
    }
}

?>