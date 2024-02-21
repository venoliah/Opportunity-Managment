<?php
class Newaccount_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Newaccount_model');
    }

    public function newAccount()
    {
        if ($this->input->post('addAccount')) {
            $account_name = $this->input->post('account_name');
            $address = $this->input->post('address');
            $general_area = $this->input->post('general_area');

            // Call the model to store data in the database
            $this->Newaccount_model->addNewAccount($account_name, $address, $general_area);

            echo 'Account added successfully.';
        }

        $this->load->view('newAccount_view');
    }
}
?>
