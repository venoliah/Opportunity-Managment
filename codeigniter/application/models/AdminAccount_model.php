<?php
class AdminAccount_model extends CI_Model {
    public function getAccountData() {
        $query = $this->db->select('id, account_name, address, general_area, company_image, user_email')
                          ->from('accounts')
                          ->get();

        return $query->result();
    }

    public function getAccountById($accountId) {
        $query = $this->db->get_where('accounts', array('id' => $accountId));
        return $query->row();
    }

    public function deleteAccount($accountId) {
        $this->db->where('id', $accountId);
        $this->db->delete('accounts');
    }
}
