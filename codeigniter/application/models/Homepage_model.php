<?php
class Homepage_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getUserAccounts($userEmail)
    {
        $this->db->select('account_name, company_image');
        $query = $this->db->get_where('accounts', array('user_email' => $userEmail));

        return $query->result_array();
    }
}
?>
