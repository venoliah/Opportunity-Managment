<!-- application/controllers/Forgotpassword_controller.php -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgotpassword_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the necessary model
        $this->load->model('Forgotpassword_model');
        $this->load->helper('url');
        $this->load->library('email');


    }

    public function index() {
        // Load the forgot password view
        $this->load->view('forgotpassword_view');
    }

    public function reset_password() {
        if ($this->input->post('reset')) {
            // Get user input
            $email = $this->input->post('email');

            // Check if the email exists in the database
            $user_data = $this->Forgotpassword_model->getUserByEmail($email);

            if ($user_data) {
                // Generate and store a unique token in the database
                $token = bin2hex(random_bytes(16));
                $this->Forgotpassword_model->storeResetToken($email, $token);

                // Send an email with a link containing the token to the user's email
                $reset_link = base_url('forgotpassword_controller/reset_form/' . $token);
                // Implement your email sending logic here

                // Redirect the user to a page indicating that the reset link has been sent
                $data['message'] = 'A password reset link has been sent to your email address.';
                $this->load->view('forgotpassword_view', $data);
            } else {
                // Email not found in the database
                $data['message'] = 'Email not found. Please enter a valid email address.';
                $this->load->view('forgotpassword_view', $data);
            }
        }
    }

    public function reset_form($token) {
        // Validate the token and load the reset password form
        $valid_token = $this->Forgotpassword_model->validateToken($token);

        if ($valid_token) {
            // Pass the token to the view
            $data['token'] = $token;
            $this->load->view('reset_form_view', $data);
        } else {
            // Invalid token, redirect or show an error
            show_error('Invalid token. Please try again.');
        }
    }

    public function update_password() {
        if ($this->input->post('update')) {
            // Get user input
            $password = $this->input->post('password');
            $token = $this->input->post('token');

            // Update the password in the database
            $this->Forgotpassword_model->updatePassword($token, $password);

            // Redirect the user to a login page or another appropriate page
            redirect('login_controller');
        }
    }
}
?>
