<?php
class Admincharts_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getUsersRegistrationData()
    {
        // This example assumes you have a 'users' table with a 'timestamp' column
        $this->db->select("DATE_FORMAT(timestamp, '%Y-%m') AS registration_month, COUNT(*) AS user_count");
        $this->db->from('users');
        $this->db->group_by("DATE_FORMAT(timestamp, '%Y-%m')");
        $query = $this->db->get();

        return $query->result_array();
    }
}
