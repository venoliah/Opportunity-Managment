<!-- application/models/Forgotpassword_model.php -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgotpassword_model extends CI_Model {

    public function getUserByEmail($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('user');

        return $query->row_array();
    }

    public function storeResetToken($email, $token) {
        $data = array('reset_token' => $token);
        $this->db->where('email', $email);
        $this->db->update('user', $data);
    }

    public function validateToken($token) {
        $this->db->where('reset_token', $token);
        $query = $this->db->get('user');

        return ($query->num_rows() === 1);
    }

    public function updatePassword($token, $password) {
        $data = array(
            'reset_token' => null,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        );

        $this->db->where('reset_token', $token);
        $this->db->update('user', $data);
    }
}
?>
