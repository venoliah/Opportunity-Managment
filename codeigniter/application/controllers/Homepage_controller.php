<?php
class Homepage_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Homepage_model');
        $this->load->library('session');
        $this->load->helper('url');

        if (!$this->session->userdata('user_email')) {
            redirect('http://localhost/OpportunityManagment/codeigniter/index.php/login');
        }
    }

    public function index()
    {
        $userEmail = $this->session->userdata('user_email');

        if (!$userEmail) {
            echo "User email not set!";
            return;
        }

        $this->load->model('Homepage_model');
        $data['accounts'] = $this->Homepage_model->getUserAccounts($userEmail);
        $data['user_email'] = $userEmail;

        // Load the createdAccounts_view regardless of the presence of accounts
        $this->load->view('createdAccounts_view', $data);
    }
}
?>
