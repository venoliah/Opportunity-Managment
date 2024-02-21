<?php
class Admincharts_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function showUserRegistrationChart()
    {
        $data['userRegistrationData'] = $this->Admin_model->getUsersRegistrationData();
        $this->load->view('admincharts_view', $data);
    }
}
