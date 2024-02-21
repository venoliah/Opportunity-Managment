<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Charts_model'); // Load your Charts_model
    }

    public function index() {
        // Fetch user registration data from the model
        $userData = $this->Charts_model->getRegistrationData();

        // Pass the data to the view
        $data['userData'] = json_encode($userData); // Convert data to JSON for JavaScript
        $this->load->view('charts_view', $data);
    }
}
