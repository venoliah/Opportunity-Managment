<?php
class Contact_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function save_form_data($data)
    {
        return $this->db->insert('contact', $data);
    }
}
