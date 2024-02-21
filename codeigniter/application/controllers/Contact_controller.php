<?php
class Contact_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Contact_model');
    }

    public function index()
    {
        $this->load->view('contact_view');
    }

    public function submit_form()
    {
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        $this->form_validation->set_message('required', 'The {field} field is required.');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('contact_view');
        } else {
            $data = array(
                'full_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'message' => $this->input->post('message')
            );

            if ($this->Contact_model->save_form_data($data)) {
                echo 'Sent successfully';
            } else {
                echo 'Not sent. An error occurred.';
            }
        }
    }
}
?>
