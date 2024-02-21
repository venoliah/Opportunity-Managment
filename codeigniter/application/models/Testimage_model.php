<?php
class Testimage_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAccountNames($userEmail)
    {
        // Fetch account names based on user's email
        $this->db->select('account_name');
        $query = $this->db->get_where('accounts', array('user_email' => $userEmail));

        // Debugging output
        echo $this->db->last_query(); 
        print_r($query->result_array()); 

        return $query->result_array();
    }

    public function getOpportunities($accountName)
{
    $this->db->select('opportunity_name, amount, date_created');
    $query = $this->db->get_where('opportunities', array('account_name' => $accountName));

    // Debugging output
    echo $this->db->last_query();
    print_r($query->result_array());

    return $query->result_array();
}

}
?>
