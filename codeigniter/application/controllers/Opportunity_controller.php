<?php
class Opportunity_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Opportunity_model');
    }

    public function index()
    {
        // Load the data for account options
        $this->load->model('Homepage_model');
        $data['account_options'] = $this->Homepage_model->getUserAccounts($this->session->userdata('user_email'));

        // Your opportunity list view goes here
        $this->load->view('opportunities_view', $data);
        $this->load->helper('url');

    }

    public function add_opportunity()
{
    $this->form_validation->set_rules('opportunity_name', 'Opportunity Name', 'required');
    $this->form_validation->set_rules('amount', 'Amount', 'required');
    $this->form_validation->set_rules('account', 'Account', 'required');
    $this->form_validation->set_rules('date_created', 'Date Created', 'required');

    if ($this->form_validation->run() === FALSE) {
        // Load the data for account options
        $this->load->model('Homepage_model');
        $data['account_options'] = $this->Homepage_model->getUserAccounts($this->session->userdata('user_email'));

        $this->load->view('opportunities_view', $data);
    } else {
        $data = array(
            'opportunity_name' => $this->input->post('opportunity_name'),
            'amount' => $this->input->post('amount'),
            'account_name' => $this->input->post('account'), // Change 'account' to 'account_name'
            'date_created' => $this->input->post('date_created')
        );

        $this->Opportunity_model->add_opportunity($data);

        // Redirect to the opportunity list or any other page after adding
        redirect('openedaccount_controller/viewAccount/' . urlencode($this->input->post('account')));

    }
}

}
?>
