<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getRegistrationData() {
        // Fetch user registration data from the "user" table
        $query = $this->db->query('SELECT COUNT(*) as count, MONTH(timestamp) as month FROM user GROUP BY MONTH(timestamp) ORDER BY MONTH(timestamp)');

        // Process the query result and return the necessary data
        $userData['labels'] = [];
        $userData['data'] = [];

        foreach ($query->result() as $row) {
            $userData['labels'][] = $row->month;
            $userData['data'][] = $row->count;
        }

        return $userData;
    }
}
