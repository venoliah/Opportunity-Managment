// application/controllers/Home_controller.php

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('index_view');
    }

    public function login()
    {
        // Load the login view
        $this->load->view('login_view');
    }

    public function register()
    {
        // Load the registration view
        $this->load->view('register_view');
    }
}
