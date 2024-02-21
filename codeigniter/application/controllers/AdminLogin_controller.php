<?php
class AdminLogin_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminLogin_model');
        $this->load->helper('url');
    }

    public function index()
    {
        if ($this->input->post('login')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $result = $this->AdminLogin_model->check_admin($username, $password);

            if ($result) {
                // Admin login successful
                redirect(base_url('AdminDashboard_controller'));
            } else {
                $data['message'] = "<h3 style='color:red'>Invalid username or password.</h3>";
                $this->load->view('AdminLogin_view', $data);
            }
        } else {
            $this->load->view('AdminLogin_view');
        }
    }
}
?>
