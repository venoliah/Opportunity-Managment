<?php
class AdminLogin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function check_admin($username, $password)
    {
        $query = $this->db->get_where('admin', array('username' => $username, 'password' => $password));

        return $query->num_rows() > 0;
    }
}
?>
