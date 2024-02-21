<?php
class AdminOpportunity_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getOpportunities()
    {
        $query = $this->db->get('opportunities');
        return $query->result_array();
    }

    public function getOpportunityById($opportunityId)
    {
        $query = $this->db->get_where('opportunities', array('id' => $opportunityId));
        return $query->row_array();
    }

    public function deleteOpportunity($opportunityId)
    {
        $this->db->where('id', $opportunityId);
        $this->db->delete('opportunities');
    }
}
