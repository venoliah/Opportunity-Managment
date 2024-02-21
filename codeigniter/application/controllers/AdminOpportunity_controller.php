<?php
class AdminOpportunity_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminOpportunity_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['opportunities'] = $this->AdminOpportunity_model->getOpportunities();
        $this->load->view('adminOpportunities_view', $data);
    }

    public function edit_opportunity($opportunityId)
    {
        $data['opportunity'] = $this->AdminOpportunity_model->getOpportunityById($opportunityId);
        $this->load->view('edit_opportunity_view', $data); // Create 'edit_opportunity_view' for editing opportunity details
    }

    public function delete_opportunity($opportunityId)
    {
        $this->AdminOpportunity_model->deleteOpportunity($opportunityId);
        redirect('adminOpportunities'); // Redirect back to the opportunities list after deletion
    }
}
