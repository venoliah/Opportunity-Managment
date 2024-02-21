<?php
class OpenedAccount_controller extends CI_Controller
{
    public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	}

    public function viewAccount($accountName)
    {
        

        // Load the model to fetch account details
        $this->load->model('OpenedAccount_model');

        // Get account details based on the account name
        $data['accountDetails'] = $this->OpenedAccount_model->getAccountDetails($accountName);

        // Load the model to fetch opportunities for the account
        $this->load->model('OpenedAccount_model');
        $data['opportunities'] = $this->OpenedAccount_model->getOpportunitiesForAccount($accountName);

        // Load the view to display account details and opportunities
        $this->load->view('openedAccount_view', $data);
    }
}
?>
