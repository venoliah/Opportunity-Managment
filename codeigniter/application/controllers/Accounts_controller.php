<?php
class Accounts_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        redirect('homepage_controller/homepage');
    }
    
    public function homepage()
    {
        $data['email'] = $this->session->userdata('user_email'); 
        $this->load->view('homepage_view', $data);
    }

    public function existingAccounts()
{
    $this->load->view('existingAccounts_view');
}

public function newAccount()
{
    $this->load->view('newAccount_view');
}

}
?>
