<?php
class Newaccount_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function addNewAccount($account_name, $address, $general_area)
    {
        $data = array(
            'account_name' => $account_name,
            'address' => $address,
            'general_area' => $general_area
        );

        $this->db->insert('accounts', $data);
    }
}
?>
