<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->model("Reservation_Model");
		$data = array(
			'id_parking' => 1,                // Assume there's a Parking record with id_Parking = 1
			'id_place' => 1,                  // Assume there's a Place record with id_Place = 1
			'numero_telephone' => '1234567890', // Example phone number
			'date_heure_reservation' => '2024-06-08 14:30:00', // Example reservation timestamp
			'duree' => 2                      // Example duration in hours
		);
		echo $this->Reservation_Model->insert($data);
	}
}
