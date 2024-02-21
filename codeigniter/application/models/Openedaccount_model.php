<?php
class OpenedAccount_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAccountDetails($accountName)
    {
        $this->db->select('account_name, address, general_area');
        $query = $this->db->get_where('accounts', array('account_name' => $accountName));

        return $query->row_array();
    }

    public function getOpportunitiesForAccount($accountName)
    {
        $this->db->select('opportunity_name, amount, date_created');
        $query = $this->db->get_where('opportunities', array('account_name' => $accountName));

        return $query->result_array();
    }
}
?>
