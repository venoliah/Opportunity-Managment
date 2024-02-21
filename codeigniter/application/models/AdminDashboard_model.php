<?php
class AdminDashboard_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getUsers()
    {
        // Retrieve user data from the database
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function getUserById($userId)
    {
        // Retrieve user data from the database based on the $userId
        $query = $this->db->get_where('user', array('id' => $userId));
        return $query->row_array();
    }

    public function deleteUser($userId)
    {
        // Delete user from the database based on the $userId
        $this->db->where('id', $userId);
        $this->db->delete('user');
    }
}
?>
