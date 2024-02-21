<?php
class Opportunity_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function add_opportunity($data)
    {
        return $this->db->insert('opportunities', $data);
    }
}
?>
