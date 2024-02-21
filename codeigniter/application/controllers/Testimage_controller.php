<?php
class Testimage_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Testimage_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $userEmail = 'venoliah.kennedy@strathmore.edu';
        $data['accounts'] = $this->Testimage_model->getAccountNames($userEmail);
        $this->load->view('testimage_view', $data);
    }

    public function account_page($accountName)
{
    $data['account_name'] = $accountName;
    $data['opportunities'] = $this->Testimage_model->getOpportunities($accountName);
    $this->load->view('openAccount_view', $data);
}

}
?>
