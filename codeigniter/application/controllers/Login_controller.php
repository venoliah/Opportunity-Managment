<?php
class Login_controller extends CI_Controller
{
	public function __construct()
	{
	parent::__construct();

	$this->load->library('session');
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Login_model'); 
	}

	public function index()
	{

		if($this->input->post('login'))
		{
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$this->Login_model->check_data($username,$password);

	}else{
	$this->load->view('login_view');
	}
	}

	public function homepage(){
		$this->load->view('homepage_view');
	}

	public function logout()
    {
        $this->session->unset_userdata('user_id'); 
        redirect('http://localhost/OpportunityManagment/codeigniter/index.php/login');
    }
}
?>