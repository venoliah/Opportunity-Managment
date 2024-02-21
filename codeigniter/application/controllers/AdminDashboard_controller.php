<?php
class AdminDashboard_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminDashboard_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['users'] = $this->AdminDashboard_model->getUsers();
        $this->load->view('admin_dashboard_view', $data);
    }

    public function edit($userId)
    {
        echo "Edit method called with user ID: " . $userId;
        // Fetch user details based on the $userId from the model and load the edit view
        $data['user'] = $this->AdminDashboard_model->getUserById($userId);
        $this->load->view('edit_user_view', $data); // Create 'edit_user_view' for editing user details
    }

    public function delete($userId)
    {
        echo "Delete method called with user ID: " . $userId;
        // Delete user from the model based on the $userId
        $this->AdminDashboard_model->deleteUser($userId);
        redirect('admin'); // Redirect back to the user list after deletion
    }
}
?>
