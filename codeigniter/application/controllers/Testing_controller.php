<?php
class Testing_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Testing_model');
        $this->load->helper('url');
    }

    public function newAccount()
    {
        if (!$this->db->conn_id) {
            die("Database connection failed.");
        }
        
        if ($this->input->post('addAccount')) {
            $account_name = $this->input->post('account_name');
            $address = $this->input->post('address');
            $general_area = $this->input->post('general_area');
            $user_email = $this->input->post('user_email');

            // File upload handling
            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 2048; 

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('company_image')) {
                $upload_data = $this->upload->data();
                $file_path = $upload_data['full_path'];
            
                // Log or echo the file path
                error_log('File path: ' . $file_path);
                echo 'File path: ' . $file_path;
            
                // Call the model to store data in the database
                $this->Testing_model->addNewAccount($account_name, $address, $general_area, $file_path, $user_email);
            } else {
                // Log the upload error
                error_log($this->upload->display_errors());
                echo $this->upload->display_errors();
            }
            
        }

        $this->load->view('testing_view');
    }
}
?>
