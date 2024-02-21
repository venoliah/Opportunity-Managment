<?php
class AdminAccount_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('AdminAccount_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['account_data'] = $this->AdminAccount_model->getAccountData();
        $this->load->view('adminAccounts_view', $data);
    }

    public function edit($accountId) {
        $data['account'] = $this->AdminAccount_model->getAccountById($accountId);
        $this->load->view('edit_account_view', $data); // Create 'edit_account_view' for editing account details
    }

    public function delete($accountId) {
        $this->AdminAccount_model->deleteAccount($accountId);
        redirect('adminAccounts'); // Redirect back to the accounts list after deletion
    }
}
